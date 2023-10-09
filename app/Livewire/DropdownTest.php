<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Attributes\Url;
use Livewire\Component;

class DropdownTest extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    #[Url]
    public ?string $formValue1 = '';
    #[Url]
    public ?string $formValue2 = '';

    public function form(Form $form): Form
    {
        return $form->schema([

            Select::make('formValue1')
                ->options(function () {
                    if ($this->formValue2 != '') {
                        return [
                            '1' => '1',
                            '2' => '2',
                        ];
                    }
                    return [
                        '1a' => 'do not select 1',
                        '1b' => 'do not select 2',
                        '1c' => 'do not select 3',
                        '1' => '1',
                        '2' => '2',
                    ];
                })
                ->reactive()
            ,
            Select::make('formValue2')
                ->options(function () {
                    return [
                        'value 1' => 'Value 1',
                        'value 2' => 'Value 2',
                        'value 3' => 'Value 3',
                        'value 4' => 'Value 4',
                        'value 5' => 'Value 5',
                    ];
                })
                ->reactive(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(function () {
                return User::query();
            })
            ->columns([
                TextColumn::make('email')
            ]);
    }

    public function render()
    {
        return view('livewire.dropdown-test');
    }
}
