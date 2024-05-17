<?php

//namespace App\Http\Middleware;
//
//use Closure;
//use Illuminate\Http\Request;
//use Symfony\Component\HttpFoundation\Response;
//
//class CheckAdmin
//{
//    public function handle($request, Closure $next)
//    {
//// Check if user is authenticated and is admin
//        if (auth()->check() && auth()->user()->admin == 1) {
//            return $next($request); // Proceed to the next middleware or route handler
//        }
//
//    // Redirect or return a response based on non-admin access
//        return redirect('/home'); // Replace '/home' with the route or view you want to redirect to
//    }
//}
