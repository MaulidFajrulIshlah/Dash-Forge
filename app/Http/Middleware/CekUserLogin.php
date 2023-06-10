<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CekUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // cek autentikasi pengguna
        if (!Auth::check()) {
            return redirect('login');
        }

        // cek akses halaman pengguna
        $user = Auth::user();
        if (in_array($user->id_jabatan, $roles)) {
            return $next($request);
        }
        // jika tidak termasuk ke dalam daftar pengguna
        abort(403, 'Anda tidak memiliki akses ke halaman ini!');
    }
}
