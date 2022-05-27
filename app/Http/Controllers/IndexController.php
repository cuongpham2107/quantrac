<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Station;
use App\Models\Media;
use App\Models\Log;

class IndexController extends Controller
{
    public function index(Request $request){



        if(Auth::user()->quyen == 'admin'){
            
            $station = Station::where('status','on')->get();
          
            $log = Log::orderBy('id','DESC')->get();
            
            return view('frontend.index')->with(compact('station','log'));
        }
        else if(Auth::user()){
            $station = Station::where('customer_id', Auth::user()->id )->where('status','on')->get();

            $topic = Station::where('customer_id', Auth::user()->id )->where('status','on')->pluck('topic')->toArray();
            $time_start = $request->time_start ?? '';
            $time_end = $request->time_end ?? '';
            if($request->time_start)
            {
                $image = Media::whereIn('station_id',$topic)->where('timestart_capture','>=',$request->time_start)->get();
            }
            elseif($request->time_end){
                $image = Media::whereIn('station_id',$topic)->where('timestart_capture','<=',$request->time_start)->get();
            }
            elseif($request->time_start && $request->time_end){
                $image = Media::whereIn('station_id',$topic)->where('timestart_capture','>=',$request->time_start)->where('timestart_capture','<=',$request->time_start)->get();
            }   
            else
            {
                $image = Media::whereIn('station_id',$topic)->get();
            }
            return view('frontend.index')->with(compact('station','image','time_start','time_end'));
        }else{
            return route('login');
        }
    }
    public function show(Request $request, $id){
        if(Auth::user()){
            
            $station = Station::where('customer_id', Auth::user()->id )->where('status','on')->get();
            
            $stationStreaming = Station::where('id', $id )->where('status','on')->first();
            // dd($stationStreaming);
            // dd($station);
            $time_start = $request->time_start ?? '';
            $time_end = $request->time_end ?? '';
            if($request->time_start)
            {
                $image = Media::where('station_id',$stationStreaming->topic)->where('timestart_capture','>=',$request->time_start)->get();
            }
            elseif($request->time_end){
                $image = Media::where('station_id',$stationStreaming->topic)->where('timestart_capture','<=',$request->time_start)->get();
            }
            elseif($request->time_start && $request->time_end){
                $image = Media::where('station_id',$stationStreaming->topic)
                ->where('timestart_capture','>=',$request->time_start)
                ->where('timestart_capture','<=',$request->time_start)
                ->get();
            }   
            else
            {
                $image = Media::where('station_id',$stationStreaming->topic)->get();
            }

            return view('frontend.station_detail')->with(compact('station','stationStreaming','image','time_start','time_end'));
        }
        else{
            return route('login');
        }
    }
    public function updateStation(Request $request, $id){
        $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
            ],
            [
                'name.required'=>'Tên trạm phải có nhé',   
                'address.required'=>'Địa chỉ trạm phải có nhé',
            ],  
        );

        $station = Station::find($id);

        $station->name = $request->name;

        $station->address = $request->address;

        $station->save();

        return redirect()->back()->with('success', 'Sửa trạm thành công');
    }
}
