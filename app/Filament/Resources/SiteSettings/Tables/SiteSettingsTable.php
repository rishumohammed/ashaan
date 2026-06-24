<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->searchable(),

                \Filament\Tables\Columns\ImageColumn::make('value')
                    ->label('Image')
                    ->state(fn ($record) => $record->image_url)
                    ->extraImgAttributes(['style' => 'object-fit: contain; height: 120px; width: auto;'])
                    ->action(
                        \Filament\Actions\Action::make('view_image')
                            ->modalHeading('Image Preview')
                            ->modalContent(fn ($record) => new \Illuminate\Support\HtmlString("<img src='" . $record->image_url . "' style='width: 100%; height: auto; border-radius: 8px;' />"))
                            ->modalSubmitAction(false)
                            ->modalCancelAction(false)
                    ),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->modalHeading(fn ($record) => 'Update Image: ' . \Illuminate\Support\Str::headline($record->key))
                    ->form([
                        \Filament\Forms\Components\FileUpload::make('value')
                            ->image()
                            ->label('Upload Image')
                            ->required(),
                    ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
