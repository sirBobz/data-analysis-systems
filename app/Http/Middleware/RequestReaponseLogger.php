<?php

namespace App\Http\Middleware;

use Closure;
use Log;
use Auth;

class RequestReaponseLogger  
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {

        //Define logged in Users Requests
        if (Auth::guest())
           $user = "New User";
        else
           $user = Auth::user()->email;

        //Log All Requests and Response code 
        Log::info('requests', [
            'request' => $request->all(),
            'User' => $user,
            'IP Address' => $request->getClientIp(),
            'Method' => $request->getMethod(),
            'URL' => $request->fullUrl(),
            'response Code' => $response->getStatusCode(),
        ]);    
    
    }
}
