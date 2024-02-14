<?php

namespace App\Filament\Resources\PuzzleDocumentResource\Pages;

use App\Filament\Resources\PuzzleDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPuzzleDocuments extends ListRecords
{
    protected static string $resource = PuzzleDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
