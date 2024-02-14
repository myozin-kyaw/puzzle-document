<?php

namespace App\Filament\Resources\PuzzleDocumentResource\Pages;

use App\Filament\Resources\PuzzleDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPuzzleDocument extends EditRecord
{
    protected static string $resource = PuzzleDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
