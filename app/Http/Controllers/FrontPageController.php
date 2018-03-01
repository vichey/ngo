<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
class FrontPageController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            app()->setLocale(Session::get("lang"));
             return $next($request);
         });
    }
    // index
    public function index($id)
    {
        $data['page'] = DB::table('pages')
            ->where('id', $id)
            ->first();
            return view('fronts.page', $data);
    }
    public function about()
    {
        $data['about'] = DB::table('pages')
            ->where('id', 4)
            ->first();
        return view('fronts.pages.about', $data);
    }
    public function contact()
    {
        $data['contact'] = DB::table('pages')
            ->where('id', 5)
            ->first();
        return view('fronts.pages.contact', $data);
    }
    public function page($id)
    {
        $data['page'] = DB::table('pages')
            ->where('active',1)
            ->where('id', $id)
            ->first();
        return view('fronts.pages.index', $data);
    }
    public function staff() 
    {
        $data['staffs'] = DB::table('staffs')
            ->where('section', 'staff')
            ->where('active', 1)
            ->get();
        return view('fronts.pages.staff', $data);
    }
    public function staff_detail($id) 
    {
        $data['s'] = DB::table('staffs')
            ->where('id', $id)
            ->where('active', 1)
            ->first();
        return view('fronts.pages.staff-detail', $data);
    }
    public function board() 
    {
        $data['staffs'] = DB::table('staffs')
            ->where('section', 'board')
            ->where('active', 1)
            ->get();
        return view('fronts.pages.staff', $data);
    }
}
