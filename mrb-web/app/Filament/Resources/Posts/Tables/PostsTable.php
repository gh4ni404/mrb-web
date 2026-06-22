<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author.name')
                    ->label('Author')
                    ->sortable()
                    ->searchable()
                    ->color('warning')
                    ->toggleable(),

                TextColumn::make('khatib_name')
                    ->label('Khatib')
                    ->searchable()
                    ->placeholder('-')
                    ->color('success')
                    ->visible(fn ($record) => $record?->type === 'khutbah'),

                TextColumn::make('author_role')
                    ->color('info')
                    ->label('Author Role')
                    ->getStateUsing(
                        fn ($record) => str($record->author?->getRoleNames()->first() ?? 'User')->replace('_', ' ')->title()
                    )
                    ->badge()
                    ->sortable(false)
                    ->toggleable(),

                SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->collection('thumbnail')
                    ->conversion('thumb')
                    ->width(60),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->limit(25)
                    ->tooltip(fn ($record) => $record->title),

                TextColumn::make('type')
                    ->label('Jenis')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'berita' => 'Berita',
                        'artikel' => 'Artikel',
                        'khutbah' => 'Khutbah',
                        default => $state,
                    })
                    ->badge(),

                TextColumn::make('categories.name')
                    ->label('Kategori')
                    ->badge(),

                IconColumn::make('is_published')
                    ->label('Publik')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label('Tanggal Publish')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->placeholder('Belum dipublish'),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Jenis Konten')
                    ->options([
                        'berita' => 'Berita',
                        'artikel' => 'Artikel',
                        'khutbah' => 'Khutbah',
                    ]),

                SelectFilter::make('categories')
                    ->label('Kategori')
                    ->relationship('categories', 'name')
                    ->searchable()
                    ->preload()
                    ->multiple(),

                TernaryFilter::make('is_published')
                    ->label('Status')
                    ->trueLabel('Sudah Dipublish')
                    ->falseLabel('Draft'),
            ])
            ->recordActions([
                ViewAction::make()->label(''),
                EditAction::make()->label(''),
                DeleteAction::make()->label(''),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->recordActionsColumnLabel('Aksi')
            ->defaultSort('created_at', 'desc');
    }
}
