<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Command;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $command = Command::where('status','on')->paginate(15);
        return  view('frontend.command.index')->with(compact('command'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.command.add');
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
            'code' => ['required', 'string', 'max:255', 'unique:commands'],
            
        ]); 

        $command = Command::create([
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status,
        ]);
        $command->save();

        return redirect()->back()->with('success', 'Tạo mới lệnh thành công');
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
        $command = Command::where('id',$id)->first();
        return view('frontend.command.edit')->with(compact('command'));
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
            'code' => ['required', 'string', 'max:255', 'unique:commands'],
           
        ]);

        $command = Command::find($id);
        $command->name = $request->name;
        $command->code = $request->code;
        $command->status = $request->status;
        

        $command->save();

        return redirect()->back()->with('success', 'Sửa lệnh điều khiển thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $command =  Command::where('id',$id)->delete();

        return redirect()->back()->with('success', 'Xoá lệnh điều khiển thành công');

    }
}
