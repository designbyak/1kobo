<?php

namespace App\Http\Controllers;

use App\Models\Archived as ModelArchived;
use App\Models\Message as ModelMessage;
use App\Models\Report as ModelReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArchivedController extends Controller
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

        $message = ModelArchived::where('name', $name)->simplePaginate(8);

        return view('archivedMessages', compact('message'));
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
        //
        $data = request()->validate([
        
            "message" => 'required',
            "name" => ''
        ]);

    
        $data = new ModelArchived([
            "message" => $request->input('message'),
            "name" => $request->input('name')
           ]);
          $data->save();
           $id = $request->input('id');
          $request = ModelMessage::where('id', $id);
          $request->delete();
           return redirect()->to('/messages')->with('success','Answer archived successfully.
           Archived answers can be found at Settings > Archived Answers.');
    }

    public function reportstore(Request $request)
    {
        //
        //
        $data = request()->validate([
        
            "message" => 'required',
            "name" => ''
        ]);

    
        $data = new ModelReport([
            "message" => $request->input('message'),
            "name" => $request->input('name')
           ]);
          $data->save();
           $id = $request->input('id');
          $request = ModelMessage::where('id', $id);
          $request->delete();
           return redirect()->to('/messages')->with('success','Report added successfully.
           Thank You.');
    }


    public function report_archive_store(Request $request)
    {
        //
        //
        $data = request()->validate([
        
            "message" => 'required',
            "name" => ''
        ]);

    
        $data = new ModelReport([
            "message" => $request->input('message'),
            "name" => $request->input('name')
           ]);
          $data->save();
           $id = $request->input('id');
          $request = ModelArchived::where('id', $id);
          $request->delete();
           return redirect()->to('/archivedMessages')->with('success','Report added successfully.
           Thank You.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Archived  $archived
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $archive = ModelMessage::find($id) ?? abort(404);
        return view('archive', compact('archive', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Archived  $archived
     * @return \Illuminate\Http\Response
     */
    public function edit(Archived $archived)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archived  $archived
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archived $archived)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archived  $archived
     * @return \Illuminate\Http\Response
     */

    public function report($id)
    {
        //
        $archive = ModelMessage::find($id) ?? abort(404);
        return view('report', compact('archive', 'id'));
    }

    public function report_archive($id)
    {
        //
        $archive = ModelArchived::find($id) ?? abort(404);
        return view('report-archive', compact('archive', 'id'));
    }


    public function destroy($id)
    {
        //
        $report = ModelMessage::find($id) ?? abort(404);
        $report->delete();
        return redirect()->to('/messages')->with('success','Answer archived successfully.
           Archived answers can be found at Settings > Archived Answers.');

    }
}
