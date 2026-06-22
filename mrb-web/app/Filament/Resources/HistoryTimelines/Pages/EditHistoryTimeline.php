<?php

namespace App\Filament\Resources\HistoryTimelines\Pages;

use App\Filament\Resources\HistoryTimelines\HistoryTimelineResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHistoryTimeline extends EditRecord
{
    protected static string $resource = HistoryTimelineResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
