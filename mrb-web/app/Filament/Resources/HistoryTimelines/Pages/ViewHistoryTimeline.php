<?php

namespace App\Filament\Resources\HistoryTimelines\Pages;

use App\Filament\Resources\HistoryTimelines\HistoryTimelineResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Icons\Heroicon;

class ViewHistoryTimeline extends ViewRecord
{
    protected static string $resource = HistoryTimelineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label('Kembali')
                ->color('gray')
                ->url(HistoryTimelineResource::getIndexUrl())
                ->icon(Heroicon::ArrowLeft),
            EditAction::make(),
        ];
    }
}
