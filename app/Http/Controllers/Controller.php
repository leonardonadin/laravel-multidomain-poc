<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
        $this->middleware(function ($request, $next) {
            $account = Account::find($request->session()->get('account_id'));
            if (!$account) {
                $account = Account::where('domain', $request->getHost())->first();
                if (!$account) {
                    $account = Account::where('subdomain', $request->getHost())->first();
                }
                if (!$account) {
                    $account = Account::where('domain', 'localhost')->first();
                }
                if (!$account) {
                    $account = Account::where('subdomain', 'localhost')->first();
                }
                if (!$account) {
                    $account = Account::first();
                }
                $request->session()->put('account_id', $account->id);
            }
            return $next($request);
        });
    }
}
