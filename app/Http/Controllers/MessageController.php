<?php

namespace App\Http\Controllers;

use App\Models\Message as ModelMessage;
use Illuminate\Http\Request;
use App\Models\User as ModelsUser; // User model
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $name = Auth::user()->name;

        $message = ModelMessage::where('name', $name)->simplePaginate(8);

        return view('messages', compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($name)
    {
        //
        $user = ModelsUser::where('name', $name)->first();

        if ($user != null) {
            return view('write', compact('name'));
        } else {
            return view('404', compact('name'));
        }
        
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
        $data = request()->validate([
        
            "message" => 'required',
            "name" => ''
        ]);
        $data = new ModelMessage([
            "message" => $request->input('message'),
            "name" => $request->input('name')
           ]);
           $data->save();
           return redirect()->back()->with('success','Message sent successfully - Now your turn.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
