<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function demo1()
    {
        $event = new Events();
        $event->event_name = 'event 3';
        $event->band_names = 'band 3';
        $event->start_date = '2021-10-11';
        $event->end_date = '2021-10-13';
        $event->portfolio = '1223';
        $event->ticket_price = 1234.5;
        $event->status = 3;
        $event->created_at = Carbon::now();
        $event->updated_at = Carbon::now();
        $event->save();
    }

    public function demo2()
    {
        return Events::all();
    }

    public function demo3()
    {
        $event = Events::find(2);
        $event->delete();
    }

    public function getList()
    {
        $data = Events::all()->where('status', '!=', '-1')->toArray();
        return view('admin.event.list')->with('data', $data);
    }

    public function getDetail(Request $request)
    {
        $id = $request->get('id');
        $data = Events::find($id)->toArray();
        return view('admin.event.detail')->with('data', $data);
    }

    public function getEdit(Request $request)
    {
        $id = $request->get('id');
        $data = Events::find($id)->toArray();
        return view('admin.event.edit')->with('data', $data);
    }

    public function processEdit(StoreEventRequest $request)
    {
        $id = $request->get('id');
        $eventName = $request->get('eventName');
        $bandNames = $request->get('bandNames');
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');
        $portfolio = $request->get('portfolio');
        $ticketPrice = $request->get('ticketPrice');
        $status = $request->get('status');
        $event = Events::find($id);
        $event->event_name = $eventName;
        $event->band_names = $bandNames;
        $event->start_date = $startDate;
        $event->end_date = $endDate;
        $event->portfolio = $portfolio;
        $event->ticket_price = $ticketPrice;
        $event->status = $status;
        $event->updated_at = Carbon::now();
        $event->save();
        return redirect('admin/event/list')->with('success', 'Event edited successfully!');
    }

    public function handleForm()
    {
        return view('admin.event.form');
    }

    public function processForm(StoreEventRequest $request)
    {
        $eventName = $request->get('eventName');
        $bandNames = $request->get('bandNames');
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');
        $portfolio = $request->get('portfolio');
        $ticketPrice = $request->get('ticketPrice');
        $status = $request->get('status');
        $event = new Events();
        $event->event_name = $eventName;
        $event->band_names = $bandNames;
        $event->start_date = $startDate;
        $event->end_date = $endDate;
        $event->portfolio = $portfolio;
        $event->ticket_price = $ticketPrice;
        $event->status = $status;
        $event->save();
        return redirect('admin/event/list')->with('success', 'Event added successfully!');
    }

    public function getDelete(Request $request)
    {
        $id = $request->get('id');
        $data = Events::find($id)->toArray();
        return view('admin.event.delete')->with('data', $data);
    }

    public function processDelete(Request $request)
    {
        $id = $request->get('id');
        $event = Events::find($id);
        $event->updated_at = Carbon::now();
        $event->status = -1;
        $event->save();
        return redirect('admin/event/list');
    }
}
