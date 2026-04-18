<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use App\Models\Visa;

class AuthController extends Controller
{
    function loginForm(){ return view('admin.login'); }
    function login(Request $r){ if($r->username==='admin' && $r->password==='00403701'){ session(['admin'=>1]); return redirect('/admin/dashboard'); } return back(); }
    function logout(){ session()->forget('admin'); return redirect('/admin/login'); }

}


