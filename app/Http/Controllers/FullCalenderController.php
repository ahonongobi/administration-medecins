<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect,Response;

class FullCalenderController extends Controller
{
    public function create(Request $request)
    {
        $insertArr = [ 'title' => $request->title,
            'user_id' => Auth::user()->id,
            'start' => $request->start,
            'end' => $request->end
        ];
        $event = Event::insert($insertArr);
        return Response::json($event);
    }


    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);

        return Response::json($event);
    }


    public function destroy(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();

        return Response::json($event);
    }
}
