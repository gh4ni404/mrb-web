<?php

namespace App\Filament\Resources\HistoryTimelines;

use App\Filament\Resources\HistoryTimelines\Pages\CreateHistoryTimeline;
use App\Filament\Resources\HistoryTimelines\Pages\EditHistoryTimeline;
use App\Filament\Resources\HistoryTimelines\Pages\ListHistoryTimelines;
use App\Filament\Resources\HistoryTimelines\Pages\ViewHistoryTimeline;
use App\Filament\Resources\HistoryTimelines\Schemas\HistoryTimelineForm;
use App\Filament\Resources\HistoryTimelines\Schemas\HistoryTimelineInfolist;
use App\Filament\Resources\HistoryTimelines\Tables\HistoryTimelinesTable;
use App\Models\HistoryTimeline;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HistoryTimelineResource extends Resource
{
    protected static ?string $model = HistoryTimeline::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return HistoryTimelineForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HistoryTimelineInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HistoryTimelinesTable::configure($table);
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
            'index' => ListHistoryTimelines::route('/'),
            'create' => CreateHistoryTimeline::route('/create'),
            'view' => ViewHistoryTimeline::route('/{record}'),
            'edit' => EditHistoryTimeline::route('/{record}/edit'),
        ];
    }
}
