<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Appointment;
use App\Models\TimeSlot;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth']);

    }

    public function today()
    {
        // $date = "2021-06-18";	

        // $appointment_today = Appointment::where('date', $date)->orderBy('time', 'asc')->get();

        // $appointment_now = Appointment::where('date', $date)->whereTime('time', '>=', date('H').':00:00')->whereTime('time', '<', (date('H')+1).':00:00')->get();

        // $appointment_next = Appointment::where('date', $date)->whereTime('time', '>=', (date('H')+1).':00:00')->whereTime('time', '<', '17:00:00')->get();

        $appointment_today = Appointment::where('date', date('Y-m-d'))->orderBy('time', 'asc')->get();

        $appointment_now = Appointment::where('date', date('Y-m-d'))->whereTime('time', '>=', date('H').':00:00')->whereTime('time', '<', (date('H')+1).':00:00')->get();

        $appointment_next = Appointment::where('date', date('Y-m-d'))->whereTime('time', '>=', (date('H')+1).':00:00')->whereTime('time', '<', '17:00:00')->get();
        	
        return view('appointment.today', compact('appointment_today', 'appointment_now', 'appointment_next'));

    }

    public function upcoming()
    {
        if(isset($_GET['search'])) {

            $appointment_upcoming = Appointment::join(config('app.doctor_database').'.users', 'appointments.doctor_id', '=', 'users.id')
                     ->select('appointments.*', 'users.name', 'users.phone_no')->where('date','>', now())
                     ->where(function ($query) {
                        $query->where('appointments.type', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('date', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('title', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('category', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('name', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('phone_no', 'LIKE', '%' . $_GET['search'] . '%');
                    })->orderBy('date', 'asc')->orderBy('time', 'asc')->paginate(10);

        }
        else{

            $appointment_upcoming = Appointment::where('date', '>', now())->orderBy('date', 'asc')->orderBy('time', 'asc')->paginate(10);

        }

        return view('appointment.upcoming', compact('appointment_upcoming'));

    }

    public function history()
    {
        if(isset($_GET['search'])) {

            $appointment_history = Appointment::join(config('app.doctor_database').'.users', 'appointments.doctor_id', '=', 'users.id')
                     ->select('appointments.*', 'users.name', 'users.phone_no')->where('date','<', now())
                     ->where(function ($query) {
                        $query->where('appointments.type', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('date', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('title', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('category', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('name', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('phone_no', 'LIKE', '%' . $_GET['search'] . '%');
                    })->orderBy('date', 'asc')->orderBy('time', 'asc')->paginate(10);

        }
        else{

            $appointment_history = Appointment::where('date', '<', now())->orderBy('date', 'asc')->orderBy('time', 'asc')->paginate(10);

        }

        return view('appointment.history', compact('appointment_history'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id, $title)
    {
        $appointment = Appointment::where('id', $id)->first();

        return view('appointment.show', compact('appointment'));
    }

    public function rescheduleDate(Request $request, $id, $title)
    {

        $appointment = Appointment::where('id', $id)->first();

        $available_days = TimeSlot::select('day')->groupBy('day')->pluck('day');

        return view('appointment.reschedule', compact('appointment', 'available_days'));
        
    }

    public function rescheduleTime(Request $request, $id, $title)
    {
        $validator = $request->validate([
            'type' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $type = $request->type;
        $category = $request->category;
        $title = $request->title;
        $description = $request->description;
        $date = $request->date;

        //


        //

        $appointment = Appointment::where('id', $id)->first();

        $day = date('l', strtotime($date));

        $available_days = TimeSlot::select('day')->groupBy('day')->pluck('day');

        $time_booked = Appointment::where('date', $date)->pluck('time');

        $doctor_booked = Appointment::where('date', $date)->pluck('doctor_id');

        if($day == "Saturday" || $day == "Sunday"){
            return back()->with('error', 'No appointment for weekends!');
        }

        $timeslots = TimeSlot::where('day', $day)
                            ->pluck('time');

        // $available_timeslots = TimeSlot::where('day', $day)
        //                                 ->whereNotIn('time', $time_booked)
        //                                 ->pluck('time');

        $available_timeslots = TimeSlot::where('day', $day)
                                        ->whereNotIn('doctor_id', $doctor_booked)
                                        ->orderBy('time')->groupBy('time')->pluck('time');

        if(count($timeslots) < 1){

            return back()->with('error', 'Appointment is not available on '.$day.'!');

        }

        if(count($available_timeslots) < 1){
            return back()->with('error', 'Appointment is fully booked on '.date('d/m/Y', strtotime($date)).'!');
        }

        return view('appointment.reschedule', compact('type', 'category', 'title', 'description', 'date', 'available_days', 'day', 'available_timeslots', 'appointment'));
    }

    public function reschedule(Request $request, $id)
    {
        
        $validator = $request->validate([
            'type' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        $type = $request->type;
        $category = $request->category;
        $title = $request->title;
        $description = $request->description;
        $date = $request->date;
        $time = $request->time;

        $day = date('l', strtotime($date));

        $doctor_booked = Appointment::where('date', $date)
                                    ->where('time', $time)
                                    ->pluck('doctor_id');

        $timeslot = TimeSlot::where('day', $day)
                            ->where('time', $time)
                            ->whereNotIn('doctor_id', $doctor_booked)
                            ->first();

        if(!isset($timeslot)){

            return redirect()->action(
                [AppointmentController::class, 'rescheduleTime'], ['id' => $id, 'type' => $type, 'category' => $category, 'title' => $title, 'description' => $description, 'date' => $date, 'time' => $time]
            )->with('error', 'Appointment has been fully booked on '.date('d/m/Y', strtotime($date)).'!');

        }

        $doctor = Doctor::where('id', $timeslot->doctor_id)->first();

        $timeslots = TimeSlot::where('day', $day)
                            ->where('time', $time)
                            ->whereNotIn('doctor_id', $doctor_booked)
                            ->pluck('time');

        if(count($timeslots) < 1){

            return redirect()->action(
                [AppointmentController::class, 'rescheduleTime'], ['id' => $id, 'type' => $type, 'category' => $category, 'title' => $title, 'description' => $description, 'date' => $date, 'time' => $time]
            )->with('error', 'Appointment has been booked on '.date('d/m/Y', strtotime($date)).' at '.date('G:i', strtotime($time)).'!');

        }

        $appointment = Appointment::where('id', $id)->first();

        $appointment->type = $type;
        $appointment->category = $category;
        $appointment->title = $title;
        $appointment->description = $description;
        $appointment->date = $date;
        $appointment->time = $time;
        

        $appointment->save();

    
        return redirect()->action(
            [AppointmentController::class, 'edit'], ['id' => $id, 'title' => $title]
        )->with('success','Appointment '.$title. ' has been reschedule to '. date('l', strtotime($date)).', '.date('d/m/Y', strtotime($date)).' at '.date('G:i', strtotime($time)) .' successfully!');

    }

    public function edit($id, $title)
    {
        $appointment = Appointment::where('id', $id)->first();

        return view('appointment.edit', compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'type' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $type = $request->type;
        $category = $request->category;
        $title = $request->title;
        $description = $request->description;
        
        $appointment = Appointment::where('id', $id)->first();

        $appointment->type = $type;
        $appointment->category = $category;
        $appointment->title = $title;
        $appointment->description = $description;

        $appointment->save();

        return back()->with('success', 'Appointment '.$title.' has been updated successfully!');
        
    }

    public function updateOutcome(Request $request, $id)
    {
        $validator = $request->validate([
            'outcome' => 'nullable',
        ]);
        
        $appointment = Appointment::where('id', $id)->first();

        $appointment->outcome = $request->outcome;

        $appointment->save();

        return back()->with('success', 'Appointment '.$appointment->title.' outcome has been updated successfully!');
        
    }

    public function destroy(Request $request, $id)
    {

        $appointment = Appointment::where('id', $id)->first();

        $title = $appointment->title;

        $appointment->delete();
        
        // if string contains the word 
        if(strpos(url()->previous(), 'today') !== false){

            return redirect()->action([AppointmentController::class, 'today'])->with('success','Appointment '.$title.' has been deleted successfully!');

        } 

        elseif(strpos(url()->previous(), 'history') !== false){

            return redirect()->action([AppointmentController::class, 'history'])->with('success','Appointment '.$title.' has been deleted successfully!');

        } 

        elseif(strpos(url()->previous(), 'upcoming') !== false){

            return redirect()->action([AppointmentController::class, 'upcoming'])->with('success','Appointment '.$title.' has been deleted successfully!');

        } 
        
        else{

            return redirect()->action([AppointmentController::class, 'today'])->with('success','Appointment '.$title.' has been deleted successfully!');

        }

    }
}
