<?php

namespace App\Http\Middleware;

use App\Models\Account as AccountModel;
use Closure;
use Illuminate\Http\Request;

class Account
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $account = AccountModel::find($request->session()->get('account_id'));

        if (!$account) {
            $account = AccountModel::where('domain', $request->getHost())->first();

            if (!$account) {
                $account = AccountModel::where('subdomain', $request->input('subdomain'))->first();
            }

            if (!$account) {
                throw new \Exception('Account not found');
            }

            $request->session()->put('account_id', $account->id);
        }

        return $next($request);
    }
}
