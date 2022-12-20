<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index(Request $request) {
        $request->session()->pull('account_id');

        $accounts = Account::all();

        return view('account.index', compact('accounts'));
    }
}
