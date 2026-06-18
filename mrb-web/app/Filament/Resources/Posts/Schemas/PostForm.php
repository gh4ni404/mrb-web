<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn (string $operation, $state, callable $set) => $operation === 'create'
                        ? $set('slug', Str::slug($state))
                        : null
                    ),
                TextInput::make('slug')
                    ->label('Slug URL')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->helperText('Disi otomatis, bisa diubah manual'),
                RichEditor::make('content')
                    ->label('Isi Konten')
                    ->required()
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->columnSpanFull(),
                Textarea::make('excerpt')
                    ->label('Ringkasan / Excerpt')
                    ->nullable()
                    ->rows(3)
                    ->maxLength(255)
                    ->helperText('Tampil di card berita. Kosongkan unuk diisi otomatis dari konten.')
                    ->columnSpanFull(),
                Select::make('type')
                    ->label('Jenis Konten')
                    ->options(['berita' => 'Berita', 'artikel' => 'Artikel', 'khutbah' => 'Khutbah'])
                    ->default('berita')
                    ->required()
                    ->native(false),
                Select::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name', fn ($query) => $query->where('type', 'post'))
                    ->searchable()
                    ->nullable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('name')->label('Nama')->required(),
                        TextInput::make('slug')->label('Slug')->required(),
                    ]),
                Toggle::make('is_published')
                    ->label('Published')
                    ->visible(fn () => Auth::user()->can('Publish:Post'))
                    ->required(),
            ]);
    }
}
