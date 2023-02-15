<?php

namespace App\Http\Middleware;

use App\Models\DetailUser;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileMiddleware
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
        $userData = $request->user();

        // get Prodile Data from Model DetailUser
        $profileData = DetailUser::where('user_id', $userData->id)->first();

        if($profileData == null){
            return redirect()->route('profile.create');
        }

        //     $request->user()->profile
        return $next($request);

    }
}
