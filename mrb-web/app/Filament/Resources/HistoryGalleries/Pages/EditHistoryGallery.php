<?php

namespace App\Filament\Resources\HistoryGalleries\Pages;

use App\Filament\Resources\HistoryGalleries\HistoryGalleryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHistoryGallery extends EditRecord
{
    protected static string $resource = HistoryGalleryResource::class;

    protected function getRedirectUrl(): string {
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
