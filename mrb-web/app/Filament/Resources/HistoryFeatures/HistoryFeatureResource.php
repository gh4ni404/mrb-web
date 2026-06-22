<?php

namespace App\Filament\Resources\HistoryFeatures;

use App\Filament\Resources\HistoryFeatures\Pages\CreateHistoryFeature;
use App\Filament\Resources\HistoryFeatures\Pages\EditHistoryFeature;
use App\Filament\Resources\HistoryFeatures\Pages\ListHistoryFeatures;
use App\Filament\Resources\HistoryFeatures\Pages\ViewHistoryFeature;
use App\Filament\Resources\HistoryFeatures\Schemas\HistoryFeatureForm;
use App\Filament\Resources\HistoryFeatures\Schemas\HistoryFeatureInfolist;
use App\Filament\Resources\HistoryFeatures\Tables\HistoryFeaturesTable;
use App\Models\HistoryFeature;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HistoryFeatureResource extends Resource
{
    protected static ?string $model = HistoryFeature::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return HistoryFeatureForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HistoryFeatureInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HistoryFeaturesTable::configure($table);
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
            'index' => ListHistoryFeatures::route('/'),
            'create' => CreateHistoryFeature::route('/create'),
            'view' => ViewHistoryFeature::route('/{record}'),
            'edit' => EditHistoryFeature::route('/{record}/edit'),
        ];
    }
}
