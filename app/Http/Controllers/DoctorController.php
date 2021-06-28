<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function __construct()
    {

        $this->middleware(['auth']);

    }

    public function register()
    {
        return view('doctor.register');
    }

    public function index()
    {
        
        if(isset($_GET['search'])) {

            $doctors = Doctor::where('email', 'LIKE', '%' . $_GET['search'] . '%')
                                ->orWhere('type', 'LIKE', '%' . $_GET['search'] . '%')
                                ->orWhere('name', 'LIKE', '%' . $_GET['search'] . '%')
                                ->orWhere('phone_no', 'LIKE', '%' . $_GET['search'] . '%')
                                ->orderBy('users.created_at','desc')->paginate(10);
        
        }
        else{

            $doctors = Doctor::orderBy('users.created_at','desc')->paginate(10);

        }

        return view('doctor.doctor', compact('doctors'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:mysql2.users',
            'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Doctor::create([
            'type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->action([DoctorController::class, 'index'])->with('success','Siberdoctor '.$request->email. ' has been registered successfully!');
    }

    public function show($email)
    {

        $doctor = Doctor::where('email', $email)->first();

        return view('doctor.show', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        //
    }

    public function update(Request $request, $email)
    {

        $request->validate([
            'type' => 'required|string',
            'name' => 'required|string|max:255',
            'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);

        $doctor = Doctor::where('email', $email)->first();

        $doctor->type = $request->type;
        $doctor->name = $request->name;
        $doctor->phone_no = $request->phone_no;

        $doctor->save();

        return back()->with('success','Siberdoktor '.$email.' has been updated successfully!');

    }

    public function destroy($email)
    {
        $doctor = Doctor::where('email', $email)->first();

        $doctor->delete();

        return back()->with('success','Siberdoktor '.$email.' has been deleted successfully!');
        
    }
}
