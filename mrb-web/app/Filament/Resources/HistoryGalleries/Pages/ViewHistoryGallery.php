<?php

namespace App\Filament\Resources\HistoryGalleries\Pages;

use App\Filament\Resources\HistoryGalleries\HistoryGalleryResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Icons\Heroicon;

class ViewHistoryGallery extends ViewRecord
{
    protected static string $resource = HistoryGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
            ->label('Kembali')
            ->url(HistoryGalleryResource::getIndexUrl())
            ->icon(Heroicon::ArrowLeft),
            EditAction::make(),
        ];
    }
}
