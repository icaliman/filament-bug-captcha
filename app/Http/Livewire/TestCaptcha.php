<?php

namespace App\Http\Livewire;

use AbanoubNassem\FilamentGRecaptchaField\Forms\Components\GRecaptcha;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class TestCaptcha extends Component implements HasForms
{
    use InteractsWithForms;

    public $email;

    public $captcha = '';

    public $submited = false;

    public function mount(): void
    {
        $this->form->fill([
            'email' => 'test@gmail.com',
            'captcha' => '',
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('email')->rules(['email:rfc,dns'])->email()
                ->disableAutocomplete()->required(),
            GRecaptcha::make('captcha'),
        ];
    }

    public function submit()
    {
        $data = $this->form->getState();
        $this->submited = true;
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.test-captcha');
    }
}