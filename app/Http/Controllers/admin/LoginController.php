<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Session;
use Validator;
use Auth;

class LoginController extends Controller {

    function index() {
        return view('admin/login');
    }

    function checklogin(Request $request) {
        $name = $request->input('username');
        $pass = md5($request->input('password'));
        $request->session()->put('username', $request->input('username'));
        $session = $request->session()->get('username');
        $data = DB::select('select id from admin where username=? and password=?', [$name, $pass]);
        if (count($data)) {
            return redirect('admin/dashboard');
        } else {
            return redirect()->back()->with('message', 'Authentication Fail');
        }
    }

    function dashboard() {
        return view('/admin/dashboard');
    }


}
