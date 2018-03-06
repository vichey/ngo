<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
class EbookController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::user()==null)
            {
                return redirect("/login");
            }
            return $next($request);
        });
    }
    // index
    public function index()
    {
        $data['ebooks'] = DB::table('ebooks')
            ->join('categories', 'categories.id', '=','ebooks.category_id')
            ->select('ebooks.*', 'categories.name as category')
            ->orderBy('id', 'desc')
            ->where('ebooks.active',1)
            ->paginate(18);
        return view('ebooks.index', $data);
    }
    // load create form
    public function create()
    {
        return view('ebooks.create');
    }
    // save 
    public function save(Request $r)
    {
        $data = array(
            'title' => $r->title,
            'description' => $r->description,
            'order' => $r->order,
            'category_id' => $r->category
        );
        $i = DB::table('ebooks')->insertGetId($data);
        if ($i)
        {
            if($r->file_name) {
                $file = $r->file('file_name');
                $file_name = $file->getClientOriginalName();
                $destinationPath = 'public/uploads/ebooks';
                $file->move($destinationPath, $i.'-'.$file_name);
                $data['file_name'] = $i.'-'.$file_name;
            }
            if($r->featured_photo) {
                $file = $r->file('featured_photo');
                $file_name = $file->getClientOriginalName();
                $destinationPath = 'public/uploads/ebooks';
                $file->move($destinationPath, $i.'-'.$file_name);
                $data['featured_photo'] = $i.'-'.$file_name;
            }
            DB::table('ebooks')->where('id', $i)->update(['featured_photo'=> $data['featured_photo'], 'file_name'=> $data['file_name']]);
            $sms = "The new ebook has been created successfully.";
            $r->session()->flash('sms', $sms);
            return redirect('/ebook/create');
        }
        else
        {
            $sms1 = "Fail to create the new ebook, please check again!";
            $r->session()->flash('sms1', $sms1);
            return redirect('/ebook/create')->withInput();
        }
    }
    // delete
    public function delete($id)
    {
        DB::table('ebooks')->where('id', $id)->update(['active'=>0]);
        return redirect('/ebook');
    }
    public function edit($id)
    {
        $data['ebook'] = DB::table('ebooks')
            ->where('id',$id)->first();
        return view('ebooks.edit', $data);
    }
    public function detail($id)
    {
        $data['ebook'] = DB::table('ebooks')
            ->join('categories', 'categories.id', '=','ebooks.category_id')
            ->select('ebooks.*', 'categories.name as category')
            ->where('ebooks.active', 1)
            ->where('ebooks.id',$id)->first();
        return view('ebooks.detail', $data);
    }
    
    public function update(Request $r)
    {
        $data = array(
            'title' => $r->title,
            'description' => $r->description,
            'order' => $r->order,
            'category_id' => $r->category
        );

        if($r->file_name) {

            $file = $r->file('file_name');
            $file_name = $file->getClientOriginalName();
            $destinationPath = 'public/uploads/ebooks';
            $file->move($destinationPath, $r->id.'-'.$file_name);
            $data['file_name'] = $r->id.'-'.$file_name;
        }
        if($r->featured_photo) {
            $file = $r->file('featured_photo');
            $file_name = $file->getClientOriginalName();
            $destinationPath = 'public/uploads/ebooks';
            $file->move($destinationPath, $r->id.'-'.$file_name);
            $data['featured_photo'] = $r->id.'-'.$file_name;
        }
        DB::table('ebooks')->where('id', $r->id)->update($data);
        $sms = "The new branch has been created successfully.";
        $sms1 = "Fail to create the new ebook, please check again!";
        $r->session()->flash('sms', $sms);
        return redirect('/ebook/edit/'.$r->id);
        
    }
}

