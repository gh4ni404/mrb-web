<?php

namespace App\Filament\Resources\Histories\Pages;

use App\Filament\Resources\Histories\HistoryResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Icons\Heroicon;

class ViewHistory extends ViewRecord
{
    protected static string $resource = HistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
            ->label('Kembali')
            ->color('gray')
            ->url(HistoryResource::getUrl('index'))
            ->icon(Heroicon::ArrowLeft),
            EditAction::make(),
        ];
    }
}
