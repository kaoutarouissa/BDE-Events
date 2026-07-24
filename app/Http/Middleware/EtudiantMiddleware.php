<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EtudiantMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
          if (!auth()->check()) {
        abort(403); // ou redirect()->route('login');
    }
        if (Auth::check() && Auth::user()->role === 'etudiant') {
            return $next($request);
        }

        abort(403, 'Accès interdit');
    }
}