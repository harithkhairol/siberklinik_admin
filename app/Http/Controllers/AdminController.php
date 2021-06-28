<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth']);

    }

    public function index()
    {
        
        if(isset($_GET['search'])) {

            // $users = User::whereNotIn('user_level_id', [0, 1])
            //                     ->where(function ($query) {
            //                         $query->where('email', 'LIKE', '%' . $_GET['search'] . '%')
            //                         ->orWhere('name', 'LIKE', '%' . $_GET['search'] . '%');
                                    
            //                     })
            //                     ->orderBy('users.created_at','desc')->paginate(10);

            $users = User::whereNotIn('user_level_id', [0, 2])
                                ->where(function ($query) {
                                    $query->where('email', 'LIKE', '%' . $_GET['search'] . '%')
                                    ->orWhere('name', 'LIKE', '%' . $_GET['search'] . '%');
                                    
                                })
                                ->orderBy('users.created_at','desc')->paginate(10);
        
        }
        else{
    
            // $users = User::whereNotIn('user_level_id', [0, 1])->orderBy('users.created_at','desc')->paginate(10);

            $users = User::whereNotIn('user_level_id', [0, 2])->orderBy('users.created_at','desc')->paginate(10);

        }

        return view('user.user', compact('users'));
    }

    public function create()
    {

        $user_levels = UserLevel::orderBy('created_at', 'asc')->get();

        return view('user.register', compact('user_levels'));

    }

    public function show($email)
    {

        $user = User::where('email', $email)->first();

        $user_levels = UserLevel::whereNotIn('id', [0, 1])->orderBy('created_at', 'asc')->get();

        return view('user.show', compact('user', 'user_levels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'user_level' => 'required',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_level_id' => $request->user_level,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect()->action([AdminController::class, 'index'])->with('success','Admin '.$request->email. ' has been registered successfully!');

    }

    public function update(Request $request, $email)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'user_level' => 'required',
        ]);

        $user = User::where('email', $email)->first();

        $user->name = $request->name;
        $user->user_level_id = $request->user_level;

        $user->save();

        return back()->with('success','User '.$email.' has been updated successfully!');

    }

    public function destroy($email)
    {
        $user = User::where('email', $email)->first();

        $user->delete();

        return back()->with('success','User '.$email.' has been deleted successfully!');
        
    }
    

}
