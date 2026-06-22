<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
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

                Textarea::make('excerpt')
                    ->label('Ringkasan / Excerpt')
                    ->nullable()
                    ->rows(3)
                    ->maxLength(255)
                    ->helperText('Tampil di card berita. Kosongkan unuk diisi otomatis dari konten.')
                    ->columnSpanFull(),

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

                Select::make('type')
                    ->label('Jenis Konten')
                    ->options(['berita' => 'Berita', 'artikel' => 'Artikel', 'khutbah' => 'Khutbah'])
                    ->default('berita')
                    ->required()
                    ->native(false),

                Select::make('categories')
                    ->label('Kategori')
                    ->multiple()
                    ->relationship('categories', 'name', fn ($query) => $query->where('type', 'post'))
                    ->searchable()
                    ->nullable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('name')->label('Nama')->required(),
                        TextInput::make('slug')->label('Slug')->required(),
                    ]),

                SpatieMediaLibraryFileUpload::make('thumbnail')
                    ->collection('thumbnail')
                    ->image()
                    ->maxSize(2048)
                    ->disk('public')
                    ->helperText('Maks 2MB. Rasio disarankan 4:3.')
                    ->columnSpanFull(),

                Toggle::make('is_published')
                    ->label('Published')
                    ->visible(fn () => Auth::user()->can('Publish:Post'))
                    ->required(),

                DateTimePicker::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->nullable()
                    ->native(false)
                    ->displayFormat('d M Y H:i')
                    ->visible(fn () => Auth::user()->can('Publish:Post'))
                    ->helperText('Kosongkan untuk publish sekarang.'),
            ]);
    }
}
