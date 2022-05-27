<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Config::where('status','on')->paginate(15);
        return  view('frontend.config.index')->with(compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.config.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'resolution' => ['required', 'string', 'max:255', 'unique:configs'],
            
        ]); 

        $config = Config::create([
            'name' => $request->name,
            'resolution' => $request->resolution,
            'status' => $request->status,
        ]);
        $config->save();

        return redirect()->back()->with('success', 'Tạo mới cấu hình trạm thành công');
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
        $config = Config::where('id',$id)->first();
        return view('frontend.config.edit')->with(compact('config'));
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'resolution' => ['required', 'string', 'max:255', 'unique:configs'],
           
        ]);

        $config = Config::find($id);
        $config->name = $request->name;
        $config->resolution = $request->resolution;
        $config->status = $request->status;
        

        $config->save();

        return redirect()->back()->with('success', 'Sửa cấu hình trạm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $config =  Config::where('id',$id)->delete();

        return redirect()->back()->with('success', 'Xoá cấu hình trạm thành công');
    }
}
