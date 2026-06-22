<?php

namespace App\Filament\Resources\HistoryFeatures\Pages;

use App\Filament\Resources\HistoryFeatures\HistoryFeatureResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHistoryFeatures extends ListRecords
{
    protected static string $resource = HistoryFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->createAnother(false),
        ];
    }
}
