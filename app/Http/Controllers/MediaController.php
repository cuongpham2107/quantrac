<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.media.index');
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
    public function show(Request $request,$id)
    {
        $idMonth = $id;
        
        if($request->time_start)
        {
            $data = Media::whereMonth('timestart_capture',$id)->where('timestart_capture','>=',$request->time_start)->get();
        }
        elseif($request->time_end){
            $data = Media::whereMonth('timestart_capture',$id)->where('timestart_capture','<=',$request->time_start)->get();
        }
        elseif($request->time_start && $request->time_end){
            $data = Media::whereMonth('timestart_capture',$id)
            ->where('timestart_capture','>=',$request->time_start)
            ->where('timestart_capture','<=',$request->time_start)
            ->get();
        }   
        else
        {
            $data = Media::whereMonth('timestart_capture',$id)->get();
        }

       
        // dd($data);

        return view('frontend.media.show')->with(compact('data','idMonth'));
        
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
    public function update(Request $request, $id)
    {
        //
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
