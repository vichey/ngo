<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            app()->setLocale(Session::get("lang"));
             return $next($request);
         });
    }
    // index
    public function index()
    {
        $data['mission'] = DB::table('pages')->where('id',19)->first();
        $data['vission'] = DB::table('pages')->where('id',20)->first();
        $data['slides'] = DB::table('slides')
            ->where('active', 1)
            ->orderBy('order', 'asc')
            ->get();
        $data['news'] = DB::table('posts')
            ->orderBy('id', 'desc')
            ->where('active',1)
            ->get();

        return view('fronts.index', $data);
    }
    public function detail($id)
    {
        $data['detail'] = DB::table('posts')->where('id', $id)->first();

        return view('fronts.detail', $data);
    }
    public function page_by_category()
    {
        $data['posts'] = DB::table('posts')
            ->where('active',1)
            ->orderBy('id', 'desc')
            ->paginate(12);
        return view('fronts.page_by_categories', $data);
    }
}
