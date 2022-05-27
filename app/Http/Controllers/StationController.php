<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Station;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      dd(Station::with('customers')->get());
        $station = Station::with('customers')->paginate(15);
        return  view('frontend.station.index')->with(compact('station'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = User::where('status', 'on')->get();
        return  view('frontend.station.add')->with(compact('customer'));
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
                'topic' => ['required', 'string', 'max:255', 'unique:stations'],
                'uid' => ['required', 'string', 'max:255', 'unique:stations'],
            ],
            [
                'name.required'=>'Tên trạm phải có nhé',          
                'topic.unique'=>'Topic đã tồn tại',
                'topic.required'=>'Topic trạm phải có nhé',
                'uid.unique'=>'Uid đã tồn tại',
                'uid.required'=>'Uid trạm phải có nhé',
            ],  
        );

        $station = new Station();
        $station->name = $request->name;
        $station->topic = $request->topic;
        $station->uid = $request->uid;
        $station->customer_id = $request->customer_id;
        $station->status = $request->status;
        $station->address = $request->address;


        $get_image = $request->image;

        $path = 'uploads/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $station->image = $new_image;


        $station->save();

        return redirect()->back()->with('success', 'Tạo trạm mới thành công');
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
        $station = Station::where('id', $id)->first();
        $customer = User::get();
//        dd($station);
        return  view('frontend.station.edit')->with(compact('station','customer'));
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
    //    dd($request->all(),$id);
        $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'topic' => ['required', 'string', 'max:255'],
                'uid' => ['required', 'string', 'max:255'],
            ],
            [
                'name.required'=>'Tên trạm phải có nhé',   
                'topic.required'=>'Topic trạm phải có nhé',
                'uid.required'=>'Uid trạm phải có nhé',
            ],  
        );

        $station = Station::find($id);
    //    dd($station);
        $station->name = $request->name;
        $station->topic = $request->topic;
        $station->uid = $request->uid;
        $station->customer_id = $request->customer_id;
        $station->status = $request->status;
        $station->address = $request->address;
        //  dd($station);
        $get_image = $request->image;
        if($get_image){
            $path = 'uploads/'.$station->image;
            if(file_exists($path)){
                unlink($path);
            }
            $path = 'uploads/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $station->image = $new_image;
        }
        $station->save();
        

        return redirect()->back()->with('success', 'Sửa trạm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $station = Station::where('id',$id)->delete();

        return redirect()->back()->with('success', 'Xoá trạm thành công');
    }
}
