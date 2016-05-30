<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Event;
use Auth;
use DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Event::where('user_id', Auth::user()->id)->get();
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
    public function store(Request $request, Event $event)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'start_date'  => 'required',
            'end_date'  => 'required',
            'alerts' => 'required'
        ]);

        $event->user_id = $request->user()->id;
        $event->title = $request->title;
        $event->start = $request->start_date;
        $event->end = $request->end_date;

        switch ($request->alerts) {
            case 0:
                $event->alert = Event::ALERT_MOMENT;
                break;
            case 1:
                $event->alert = Event::ALERT_5_MINUTES;
                break;
            case 2:
                $event->alert = Event::ALERT_10_MINUTES;
                break;
            default:
               echo 'Invalid alert set!'; die;
        }

        $event->save();

        return back();
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'start_date'  => 'required',
            'end_date'  => 'required',
            'alerts' => 'required'
        ]);

        $event = Event::findOrFail($id);

        $event->title = $request->title;
        $event->start = $request->start_date;
        $event->end = $request->end_date;

        switch ($request->alerts) {
            case 0:
                $event->alert = Event::ALERT_MOMENT;
                break;
            case 1:
                $event->alert = Event::ALERT_5_MINUTES;
                break;
            case 2:
                $event->alert = Event::ALERT_10_MINUTES;
                break;
            default:
               echo 'Invalid alert set!'; die;
        }

        $event->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return back();
    }
}
