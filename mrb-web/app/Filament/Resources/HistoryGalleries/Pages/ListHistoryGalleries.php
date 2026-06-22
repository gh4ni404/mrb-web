<?php

namespace App\Filament\Resources\HistoryGalleries\Pages;

use App\Filament\Resources\HistoryGalleries\HistoryGalleryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHistoryGalleries extends ListRecords
{
    protected static string $resource = HistoryGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
