<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise;
use App\Models\Product;
use App\Models\Appointment;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        $franchise=Franchise::all();
        $product=Product::all();
        $appointment = Appointment::where('status', 'Appointment Booked');

        if ($request->has('dateFilter')) {
            $appointment->whereDate('created_at', $request->dateFilter);
        }

        $appointment = $appointment->get();
        $user=User::all();
        return view('admin.dashboard',compact('franchise','product','appointment','user'));
    }
}