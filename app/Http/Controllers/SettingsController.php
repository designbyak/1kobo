<?php

namespace App\Http\Controllers;
use App\Models\User as ModelsUser; // User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('changemail');
    }

    public function pass()
    {
        //
        return view('changepass');
    }

    public function name()
    {
        //
        return view('changename');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //validation rules

        $request->validate([
            'email'=>'required|email|string|max:50'
        ]);
        $email = $request->input('email');
        $user = ModelsUser::where('email', $email)->first();

        
        if ($user != null) {
            return redirect()->back()->with('success','Email already in use');
        } else {
            $name = Auth::user()->name;
            $user = ModelsUser::where('name', $name)->first();
            $user->email = $request->input('email');
            $user->save();
            return redirect()->back()->with('success','Email Updated Successfully');
        }

    }

    public function updatepass(Request $request)
    {
        //
        //validation rules

        $request->validate([
            'password'=>'required|password|string|max:50'
        ]);
        $password = $request->input('password');
            $name = Auth::user()->name;
            $user = ModelsUser::where('name', $name)->first();
            $user->password = Hash::make($request->input('password'));
            $user->save();
            return redirect()->back()->with('success','Password Updated Successfully');
    

    }

    public function updatename(Request $request)
    {
        //
        //validation rules
        $request->validate([
            'name'=> 'required|string|max:50',
            'password'=>'required|password|string|max:50'
        ]);
        $password = Hash::make($request->input('password'));

 
        $name = $request->input('name');
        $username = ModelsUser::where('name', $name)->first();

        $userp = ModelsUser::where('password', $password)->first();
        if ($userp != null) {
            return redirect()->back()->with('success','Incorrect Password try again');
        }    
        elseif ($username != null) {
            return redirect()->back()->with('success','Username Already Exists. Try Something else.');
        }else {
            $name = Auth::user()->name;
            $user = ModelsUser::where('name', $name)->first();
            $user->name = Str::lower($request->input('name'));
            $user->save();
            return redirect()->back()->with('success','Username Updated Successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
