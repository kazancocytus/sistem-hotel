<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;


class StatusCostumer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check()) {
            $transaction = Transaction::where('id', Auth::id())->orderBy('id', 'DESC')->first();
            if ($transaction) {
                $transaction->check_out = now();
                $transaction->save();
            }
        }

        return $next($request);
    }
}
