<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component {
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login() {

        $this->validate();

        if ( $this->attemptLogin() ) {
            return redirect()->url( '/' );
        }

        $this->addError( 'email', 'Invalid credentials.' );

    }

    public function render() {
        return view( 'livewire.login' );
    }

    private function attemptLogin():bool {
        return Auth::attempt( [ 'email' => $this->email, 'password' => $this->password ] );
    }

}
