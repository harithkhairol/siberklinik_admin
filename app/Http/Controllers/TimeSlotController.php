<?php

namespace App\Http\Controllers;

use App\Models\TimeSlot;
use App\Models\Doctor;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{

    public function index()
    {

        // 9::00

        $monday_nine = TimeSlot::where('day', 'Monday')
                        ->where('time', '09:00:00')
                        ->get();

        $tuesday_nine = TimeSlot::where('day', 'Tuesday')
                        ->where('time', '09:00:00')
                        ->get();

        $wednesday_nine = TimeSlot::where('day', 'Wednesday')
                        ->where('time', '09:00:00')
                        ->get();

        $thursday_nine = TimeSlot::where('day', 'Thursday')
                        ->where('time', '09:00:00')
                        ->get();

        $friday_nine = TimeSlot::where('day', 'Friday')
                        ->where('time', '09:00:00')
                        ->get();

        // 10::00

        $monday_ten = TimeSlot::where('day', 'Monday')
                        ->where('time', '10:00:00')
                        ->get();

        $tuesday_ten = TimeSlot::where('day', 'Tuesday')
                        ->where('time', '10:00:00')
                        ->get();

        $wednesday_ten = TimeSlot::where('day', 'Wednesday')
                        ->where('time', '10:00:00')
                        ->get();

        $thursday_ten = TimeSlot::where('day', 'Thursday')
                        ->where('time', '10:00:00')
                        ->get();

        $friday_ten = TimeSlot::where('day', 'Friday')
                        ->where('time', '10:00:00')
                        ->get();

        // 11::00

        $monday_eleven = TimeSlot::where('day', 'Monday')
                        ->where('time', '11:00:00')
                        ->get();

        $tuesday_eleven = TimeSlot::where('day', 'Tuesday')
                        ->where('time', '11:00:00')
                        ->get();

        $wednesday_eleven = TimeSlot::where('day', 'Wednesday')
                        ->where('time', '11:00:00')
                        ->get();

        $thursday_eleven = TimeSlot::where('day', 'Thursday')
                        ->where('time', '11:00:00')
                        ->get();

        $friday_eleven = TimeSlot::where('day', 'Friday')
                        ->where('time', '11:00:00')
                        ->get();

        // 12::00

        $monday_twelve = TimeSlot::where('day', 'Monday')
                        ->where('time', '12:00:00')
                        ->get();

        $tuesday_twelve = TimeSlot::where('day', 'Tuesday')
                        ->where('time', '12:00:00')
                        ->get();

        $wednesday_twelve = TimeSlot::where('day', 'Wednesday')
                        ->where('time', '12:00:00')
                        ->get();

        $thursday_twelve = TimeSlot::where('day', 'Thursday')
                        ->where('time', '12:00:00')
                        ->get();

        $friday_twelve = TimeSlot::where('day', 'Friday')
                        ->where('time', '12:00:00')
                        ->get();


        // 13::00

        $monday_thirteen = TimeSlot::where('day', 'Monday')
                        ->where('time', '13:00:00')
                        ->get();

        $tuesday_thirteen = TimeSlot::where('day', 'Tuesday')
                        ->where('time', '13:00:00')
                        ->get();

        $wednesday_thirteen = TimeSlot::where('day', 'Wednesday')
                        ->where('time', '13:00:00')
                        ->get();

        $thursday_thirteen = TimeSlot::where('day', 'Thursday')
                        ->where('time', '13:00:00')
                        ->get();

        $friday_thirteen = TimeSlot::where('day', 'Friday')
                        ->where('time', '13:00:00')
                        ->get();

        // 14::00

        $monday_fourteen = TimeSlot::where('day', 'Monday')
                        ->where('time', '14:00:00')
                        ->get();

        $tuesday_fourteen = TimeSlot::where('day', 'Tuesday')
                        ->where('time', '14:00:00')
                        ->get();

        $wednesday_fourteen = TimeSlot::where('day', 'Wednesday')
                        ->where('time', '14:00:00')
                        ->get();

        $thursday_fourteen = TimeSlot::where('day', 'Thursday')
                        ->where('time', '14:00:00')
                        ->get();

        $friday_fourteen = TimeSlot::where('day', 'Friday')
                        ->where('time', '14:00:00')
                        ->get();

        // 15::00

        $monday_fifteen = TimeSlot::where('day', 'Monday')
                        ->where('time', '15:00:00')
                        ->get();

        $tuesday_fifteen = TimeSlot::where('day', 'Tuesday')
                        ->where('time', '15:00:00')
                        ->get();

        $wednesday_fifteen = TimeSlot::where('day', 'Wednesday')
                        ->where('time', '15:00:00')
                        ->get();

        $thursday_fifteen = TimeSlot::where('day', 'Thursday')
                        ->where('time', '15:00:00')
                        ->get();

        $friday_fifteen = TimeSlot::where('day', 'Friday')
                        ->where('time', '15:00:00')
                        ->get();

        // 16::00

        $monday_sixteen = TimeSlot::where('day', 'Monday')
                        ->where('time', '16:00:00')
                        ->get();

        $tuesday_sixteen = TimeSlot::where('day', 'Tuesday')
                        ->where('time', '16:00:00')
                        ->get();

        $wednesday_sixteen = TimeSlot::where('day', 'Wednesday')
                        ->where('time', '16:00:00')
                        ->get();

        $thursday_sixteen = TimeSlot::where('day', 'Thursday')
                        ->where('time', '16:00:00')
                        ->get();

        $friday_sixteen = TimeSlot::where('day', 'Friday')
                        ->where('time', '16:00:00')
                        ->get();

        return view('timeslot.timeslot', compact('monday_nine', 'tuesday_nine', 'wednesday_nine', 'thursday_nine', 'friday_nine',
                                                'monday_ten', 'tuesday_ten', 'wednesday_ten', 'thursday_ten', 'friday_ten',
                                                'monday_eleven', 'tuesday_eleven', 'wednesday_eleven', 'thursday_eleven', 'friday_eleven',
                                                'monday_twelve', 'tuesday_twelve', 'wednesday_twelve', 'thursday_twelve', 'friday_twelve',
                                                'monday_thirteen', 'tuesday_thirteen', 'wednesday_thirteen', 'thursday_thirteen', 'friday_thirteen',
                                                'monday_fourteen', 'tuesday_fourteen', 'wednesday_fourteen', 'thursday_fourteen', 'friday_fourteen',
                                                'monday_fifteen', 'tuesday_fifteen', 'wednesday_fifteen', 'thursday_fifteen', 'friday_fifteen',
                                                'monday_sixteen', 'tuesday_sixteen', 'wednesday_sixteen', 'thursday_sixteen', 'friday_sixteen'));
    }

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

    public function edit($day, $time)
    {
        $doctors = Doctor::orderBy('users.created_at','desc')->get();

        $timeslots = TimeSlot::where('day', $day)
                        ->where('time', $time)->get();

        $timeslots_count = TimeSlot::where('day', $day)
                        ->where('time', $time)->count();

        return view('timeslot.edit', compact('timeslots', 'timeslots_count', 'doctors', 'day', 'time'));
    }

    public function update(Request $request, $day, $time)
    {

        $validator = $request->validate([
            'nine.*' => 'nullable',
        ]);

        if($request->nine != null){

            $timeslots = TimeSlot::where('day', $day)
                                ->where('time', date('G:i', strtotime($time)).":00")
                                ->get();


            for ($i = 0; $i < count($request->nine); $i++) {

                foreach ($timeslots as $timeslot){

                    if( $timeslot->doctor_id == $request->nine[$i]){

                        $timeslot_error = TimeSlot::where('doctor_id', $timeslot->doctor_id)
                                                ->first();

                        return back()->with('error', $timeslot_error->doctor->name.' has already in the Time Slot!');                
    
                    }
    
                }
    
            }


            for ($i = 0; $i < count($request->nine); $i++) {

                $insert_siberdoctor = new TimeSlot;
    
                $insert_siberdoctor->doctor_id = $request->nine[$i];

                $insert_siberdoctor->day = 'Monday';

                $insert_siberdoctor->time = '9:00:00';
    
                $insert_siberdoctor->save();
    
            }

        }

        return back()->with('success','Time Slot has been updated successfully!');
    }

    public function destroy(Request $request, $day, $time, $email)
    {

        $doctor = Doctor::where('email', $email)->first();

        $timeslot = TimeSlot::where('day', $day)
                                ->where('time', date('G:i', strtotime($time)).":00" )
                                ->where('doctor_id', $doctor->id)
                                ->first();

        $timeslot->delete();

        return back()->with('success',$doctor->name.' has been deleted from the timeslot successfully!');
    }
}
