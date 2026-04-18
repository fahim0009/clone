<?php

namespace App\Http\Middleware; 
use Closure; use Illuminate\Http\Request;

class AdminMiddleware{ 
    public function handle(Request $r, Closure $next){ if(!session('admin')) return redirect('/admin/login'); return $next($r);} 
}