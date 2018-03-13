<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Auth;
class MembershipController extends Controller
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
        $data['memberships'] = DB::table('memberships')
            ->orderBy('id', 'desc')
            ->where('active', 1)
            ->paginate(18);
        return view('memberships.index', $data);
    }
    public function save(Request $r) 
    {
        $data = array(
            'english_first_name' => $r->english_first_name,
            'english_family_name' => $r->english_family_name,
            'khmer_first_name' => $r->khmer_first_name,
            'khmer_family_name' => $r->khmer_family_name,
            'date_of_birth' => $r->date_of_birth,
            'place_of_birth' => $r->place_of_birth,
            'current_address' => $r->current_address,
            'gender' => $r->gender,
            'phone' => $r->phone,
            'email' => $r->email,
            'receive_newsletter' => $r->receive_newsletter,
        );
        
        $sms = "The new membership has been created successfully.";
        $sms1 = "Fail to create the new membership, please check again!";
        $i = DB::table('memberships')->insertGetId($data);

        if ($i)
        {
            if($r->photo) {
                $file = $r->file('photo');
                $file_name = $file->getClientOriginalName();
                $destinationPath = 'public/uploads/members';
                $file->move($destinationPath, $i.$file_name);
    
                $data['photo'] = $i.$file_name;
                DB::table('memberships')->update($data);
            }
            $r->session()->flash('sms', $sms);
            return redirect('/membership/create');
        }
        else
        {
            $r->session()->flash('sms1', $sms1);
            return redirect('/membership/create')->withInput();
        }
    }
     // load create form
     public function create()
     {
         return view('memberships.create');
     }
    
     public function edit($id)
     {
         $data['membership'] = DB::table('memberships')
             ->where('id',$id)->first();
         return view('memberships.edit', $data);
     }
     // delete
     public function delete($id)
     {
         DB::table('memberships')->where('id', $id)->update(['active'=>0]);
         return redirect('/membership');
     }
     public function update(Request $r)
     { 
        $data = array(
            'english_first_name' => $r->english_first_name,
            'english_family_name' => $r->english_family_name,
            'khmer_first_name' => $r->khmer_first_name,
            'khmer_family_name' => $r->khmer_family_name,
            'date_of_birth' => $r->date_of_birth,
            'place_of_birth' => $r->place_of_birth,
            'current_address' => $r->current_address,
            'gender' => $r->gender,
            'phone' => $r->phone,
            'email' => $r->email,
            'receive_newsletter' => $r->receive_newsletter,
        );
        if($r->photo) {
            $file = $r->file('photo');
            $file_name = $file->getClientOriginalName();
            $destinationPath = 'public/uploads/members';
            $file->move($destinationPath, $r->id.$file_name);

            $data['photo'] = $r->id.$file_name;
        }
         $sms = "All changes have been saved successfully.";
         $sms1 = "Fail to to save changes, please check again!";
         $i = DB::table('memberships')->where('id', $r->id)->update($data);
         if ($i)
         {
             $r->session()->flash('sms', $sms);
             return redirect('/membership/edit/'.$r->id);
         }
         else
         {
             $r->session()->flash('sms1', $sms1);
             return redirect('/membership/edit/'.$r->id);
         }
     }
     // view detail
     public function detail($id) 
     {
         $data['membership'] = DB::table('memberships')
             ->where('id',$id)->first();
         return view('memberships.detail', $data);
     }

}
