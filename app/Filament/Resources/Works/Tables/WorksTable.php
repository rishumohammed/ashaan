<?php

namespace App\Filament\Resources\Works\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WorksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category.name')
                    ->label('Category name')
                    ->sortable(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                ImageColumn::make('image_path')
                    ->state(fn ($record) => $record->image_url)
                    ->extraImgAttributes(['style' => 'object-fit: contain; height: 120px; width: auto;'])
                    ->action(
                        \Filament\Actions\Action::make('view_image')
                            ->modalHeading('Image Preview')
                            ->modalContent(fn ($record) => new \Illuminate\Support\HtmlString("<img src='" . $record->image_url . "' style='width: 100%; height: auto; border-radius: 8px;' />"))
                            ->modalSubmitAction(false)
                            ->modalCancelAction(false)
                    ),
                TextColumn::make('project_no')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('sort_order')
                    ->sortable(),
                \Filament\Tables\Columns\ToggleColumn::make('is_featured')
                    ->label('Featured'),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
