<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Assurez-vous que l'utilisateur est connecté et que son type correspond à l'un des rôles autorisés.
        if (!$request->user() || !in_array($request->user()->user_type, $roles)) {
            // Redirigez l'utilisateur vers la page d'accueil s'il n'a pas le rôle requis.
            return redirect('/');
        }

        return $next($request);
    }
}
