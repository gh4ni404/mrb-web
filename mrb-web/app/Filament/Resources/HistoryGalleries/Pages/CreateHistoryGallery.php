<?php

namespace App\Filament\Resources\HistoryGalleries\Pages;

use App\Filament\Resources\HistoryGalleries\HistoryGalleryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHistoryGallery extends CreateRecord
{
    protected static string $resource = HistoryGalleryResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
