<?php

namespace App\Filament\Resources\HistoryFeatures\Pages;

use App\Filament\Resources\HistoryFeatures\HistoryFeatureResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHistoryFeature extends ViewRecord
{
    protected static string $resource = HistoryFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
