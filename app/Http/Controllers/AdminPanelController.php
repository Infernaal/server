<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index() {
        return view('admin-panel');
    }

    public function login(Request $request) {
        $username = $request ->input('username');
        $password = $request ->input('password');

        if($username === 'admin' && $password === 'admin') {
            session_start();
            $_SESSION['user'] = $username;
            return redirect()->route('admin-panel.index');
        } else {
            return "Error [X234SZS]: Invalid Data";
        }
    }
}
