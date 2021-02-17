<?php

namespace App\Http\Controllers;

use App\Models\TimeSlot;
use App\Models\Doctor;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeslots = TimeSlot::get();

        return view('timeslot.timeslot', compact('timeslots'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function show($day)
    {

        $doctors = Doctor::orderBy('users.created_at','desc')->get();

        // $timeslots = TimeSlot::where('day', $day)->orderBy('time', 'asc')->get();

        $nine = TimeSlot::where('day', $day)
                        ->where('time', '09:00:00')->first();

        $ten = TimeSlot::where('day', $day)
                        ->where('time', '10:00:00')->first();

        $eleven = TimeSlot::where('day', $day)
                            ->where('time', '11:00:00')->first();

        $twelve = TimeSlot::where('day', $day)
                            ->where('time', '12:00:00')->first();

        $thirteen = TimeSlot::where('day', $day)
                            ->where('time', '13:00:00')->first();

        $fourteen = TimeSlot::where('day', $day)
                            ->where('time', '14:00:00')->first();

        $fifteen = TimeSlot::where('day', $day)
                            ->where('time', '15:00:00')->first();

        $sixteen = TimeSlot::where('day', $day)
                            ->where('time', '16:00:00')->first();

        // return view('timeslot.show', compact('timeslots', 'doctors'));

        return view('timeslot.show', compact('nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'doctors', 'day'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeSlot $timeSlot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $day)
    {
        $request->validate([
            'nine' => 'required',
            'ten' => 'required',
            'eleven' => 'required',
            'twelve' => 'required',
            'thirteen' => 'required',
            'fourteen' => 'required',
            'fifteen' => 'required',
            'sixteen' => 'required',
        ]);


        $nine = TimeSlot::where('day', $day)
                        ->where('time', '09:00:00')->first();

        $nine->doctor_id = $request->nine;

        $nine->save();


        $ten = TimeSlot::where('day', $day)
                        ->where('time', '10:00:00')->first();

        $ten->doctor_id = $request->ten;

        $ten->save();


        $eleven = TimeSlot::where('day', $day)
                            ->where('time', '11:00:00')->first();

        $eleven->doctor_id = $request->eleven;

        $eleven->save();


        $twelve = TimeSlot::where('day', $day)
                            ->where('time', '12:00:00')->first();

        $twelve->doctor_id = $request->twelve;

        $twelve->save();


        $thirteen = TimeSlot::where('day', $day)
                            ->where('time', '13:00:00')->first();

        $thirteen->doctor_id = $request->thirteen;

        $thirteen->save();


        $fourteen = TimeSlot::where('day', $day)
                            ->where('time', '14:00:00')->first();

        $fourteen->doctor_id = $request->fourteen;

        $fourteen->save();


        $fifteen = TimeSlot::where('day', $day)
                            ->where('time', '15:00:00')->first();

        $fifteen->doctor_id = $request->fifteen;

        $fifteen->save();


        $sixteen = TimeSlot::where('day', $day)
                            ->where('time', '16:00:00')->first();

        $sixteen->doctor_id = $request->sixteen;

        $sixteen->save();

        return back()->with('success','Time Slot has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeSlot $timeSlot)
    {
        //
    }
}
