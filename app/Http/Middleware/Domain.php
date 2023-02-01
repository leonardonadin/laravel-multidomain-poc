<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Domain
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
        $host = $request->getHost();
        $subdomain = explode('.', $host)[0];
        $account = \App\Models\Account::where('subdomain', $subdomain)->first();

        if ($account) {
            $request->attributes->add(['account' => $account]);
        } else {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
