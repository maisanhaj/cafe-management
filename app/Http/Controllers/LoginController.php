<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {
    public function showLoginForm() {
        return view( 'livewire.login' );
    }

    public function redirectBasedOnRole( $role ) {
        switch ( $role ) {
            case 'admin':
            return redirect()->route( 'admin.dashboard' );
            case 'user':
            return redirect()->route( 'user.dashboard' );
            default:
            return redirect()->route( 'dashboard' );
        }
    }
}
