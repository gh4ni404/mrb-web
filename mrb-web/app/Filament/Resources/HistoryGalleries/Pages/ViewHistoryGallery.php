<?php

namespace App\Filament\Resources\HistoryGalleries\Pages;

use App\Filament\Resources\HistoryGalleries\HistoryGalleryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHistoryGallery extends ViewRecord
{
    protected static string $resource = HistoryGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
