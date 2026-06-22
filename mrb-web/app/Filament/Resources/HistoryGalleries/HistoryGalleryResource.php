<?php

namespace App\Filament\Resources\HistoryGalleries;

use App\Filament\Resources\HistoryGalleries\Pages\CreateHistoryGallery;
use App\Filament\Resources\HistoryGalleries\Pages\EditHistoryGallery;
use App\Filament\Resources\HistoryGalleries\Pages\ListHistoryGalleries;
use App\Filament\Resources\HistoryGalleries\Pages\ViewHistoryGallery;
use App\Filament\Resources\HistoryGalleries\Schemas\HistoryGalleryForm;
use App\Filament\Resources\HistoryGalleries\Schemas\HistoryGalleryInfolist;
use App\Filament\Resources\HistoryGalleries\Tables\HistoryGalleriesTable;
use App\Models\HistoryGallery;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HistoryGalleryResource extends Resource
{
    protected static ?string $model = HistoryGallery::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return HistoryGalleryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HistoryGalleryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HistoryGalleriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHistoryGalleries::route('/'),
            'create' => CreateHistoryGallery::route('/create'),
            'view' => ViewHistoryGallery::route('/{record}'),
            'edit' => EditHistoryGallery::route('/{record}/edit'),
        ];
    }
}
