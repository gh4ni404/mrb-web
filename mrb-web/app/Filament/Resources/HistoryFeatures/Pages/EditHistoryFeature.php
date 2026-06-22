<?php

namespace App\Filament\Resources\HistoryFeatures\Pages;

use App\Filament\Resources\HistoryFeatures\HistoryFeatureResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHistoryFeature extends EditRecord
{
    protected static string $resource = HistoryFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
