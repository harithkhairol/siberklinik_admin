<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth']);

    }

    public function index()
    {
        
        if(isset($_GET['search'])) {

            $customers = Customer::where('email', 'LIKE', '%' . $_GET['search'] . '%')
                                ->orWhere('name', 'LIKE', '%' . $_GET['search'] . '%')
                                ->orWhere('phone_no', 'LIKE', '%' . $_GET['search'] . '%')
                                ->orderBy('created_at','desc')->paginate(10);
        
        }
        else{

            $customers = Customer::orderBy('created_at','desc')->paginate(10);

        }

        return view('customer.customer', compact('customers'));
    }

    public function show($email)
    {

        $customer = Customer::where('email', $email)->first();

        return view('customer.show', compact('customer'));
    }


    public function update(Request $request, $email)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);

        $customer = Customer::where('email', $email)->first();

        $customer->name = $request->name;
        $customer->phone_no = $request->phone_no;

        $customer->save();

        return back()->with('success','Customer '.$email.' has been updated successfully!');

    }

    public function destroy($email)
    {
        $customer = Customer::where('email', $email)->first();

        $customer->delete();

        return back()->with('success','Customer '.$email.' has been deleted successfully!');
    }
}
