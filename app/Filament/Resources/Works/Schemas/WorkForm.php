<?php

namespace App\Filament\Resources\Works\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WorkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('title'),
                TextInput::make('description')
                    ->default(null),
                FileUpload::make('image_path')
                    ->image()
                    ->required(),
                TextInput::make('project_no')
                    ->default(null),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
                \Filament\Forms\Components\Toggle::make('is_featured')
                    ->label('Feature on Homepage')
                    ->default(false),
            ]);
    }
}
