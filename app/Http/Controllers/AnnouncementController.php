<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
class AnnouncementController extends Controller
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
        $data['announcements'] = DB::table('announcements')
            ->orderBy('id','desc')
            ->where('active', 1)
            ->paginate(18);
        return view('announcements.index', $data);
    }
    // load create form
    public function create()
    {
        return view('announcements.create');
    }
    // save new page
    public function save(Request $r)
    {
        $data = array(
            'title' => $r->title,
            'description' => $r->description,
            'location' => $r->location,
            'date' => $r->date,
            'time' => $r->time,
        );
        $sms = "The new coming up event has been created successfully.";
        $sms1 = "Fail to create the new coming up event, please check again!";
        $i = DB::table('announcements')->insertGetId($data);

        if($i > 0) {
            $url = 'announcement/view/'.$i;
            $data = array(
                'url' => $url
            );
            $i = DB::table('announcements')->where('id', $i)->update($data);
        }

        if ($i)
        {
            $r->session()->flash('sms', $sms);
            return redirect('/announcement/create');
        }
        else
        {
            $r->session()->flash('sms1', $sms1);
            return redirect('/announcement/create')->withInput();
        }
    }
    // delete
    public function delete($id)
    {
        DB::table('announcements')->where('id', $id)->update(['active'=>0]);
        return redirect('/announcement');
    }

    public function edit($id)
    {
        $data['announcement'] = DB::table('announcements')
            ->where('id',$id)->first();
        return view('announcements.edit', $data);
    }

    public function update(Request $r)
    {
        $data = array(
            'title' => $r->title,
            'description' => $r->description,
            'location' => $r->location,
            'date' => $r->date,
            'time' => $r->time,
        );
        $sms = "All changes have been saved successfully.";
        $sms1 = "Fail to to save changes, please check again!";
        $i = DB::table('announcements')->where('id', $r->id)->update($data);
        if ($i)
        {
            $r->session()->flash('sms', $sms);
            return redirect('/announcement/edit/'.$r->id);
        }
        else
        {
            $r->session()->flash('sms1', $sms1);
            return redirect('/announcement/edit/'.$r->id);
        }
    }
    // view detail
    public function view($id) 
    {
        $data['announcement'] = DB::table('announcements')
            ->where('id',$id)->first();
        return view('announcements.view', $data);
    }
}

