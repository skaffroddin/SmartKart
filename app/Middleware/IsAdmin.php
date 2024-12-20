<?php
// app/Http/Middleware/IsAdmin.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is admin
        if (!auth()->user() || !auth()->user()->is_admin) {
            return redirect('/home'); // Redirect if not admin
        }

        return $next($request); // Continue if user is admin
    }
}
