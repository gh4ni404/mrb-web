<?php

namespace App\Filament\Resources\HistoryTimelines\Pages;

use App\Filament\Resources\HistoryTimelines\HistoryTimelineResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHistoryTimeline extends ViewRecord
{
    protected static string $resource = HistoryTimelineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
