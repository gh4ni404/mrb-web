<?php

namespace App\Filament\Resources\HistoryFeatures\Pages;

use App\Filament\Resources\HistoryFeatures\HistoryFeatureResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Icons\Heroicon;

class ViewHistoryFeature extends ViewRecord
{
    protected static string $resource = HistoryFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
            ->label('Kembali')
            ->color('gray')
            ->url(HistoryFeatureResource::getIndexUrl())
            ->icon(Heroicon::ArrowLeft),
            EditAction::make(),
        ];
    }
}
