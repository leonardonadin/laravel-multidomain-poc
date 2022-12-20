<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index(Request $request) {
        $account = Account::find($request->session()->get('account_id'));

        return view('home', ['account' => $account]);
    }

}
