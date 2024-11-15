<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Mail\AppointmentSuccessMail;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use App\Models\Franchise;

class AppointmentController extends Controller
{
    public function index()
{
    // Fetch appointments with status 'Pending'
    $pendingAppointments = Appointment::where('status', 'Appointment Booked')->get();
    
    // Fetch appointments with status 'Assigned'
    $assignedAppointments = Appointment::where('status', 'Franchise Assigned')->get();
    $franchises=Franchise::all();
    
    return view('admin.appointments', compact('pendingAppointments', 'assignedAppointments','franchises'));
}
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|digits_between:10,15',
            'address' => 'required|string|max:255',
            'pincode' => 'required|digits:6',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
        ]);
        $validatedData['status'] = 'Appointment Booked';
    
        $appointment = Appointment::create($validatedData);
    
        // Send success email
        Mail::to($appointment->email)->send(new AppointmentSuccessMail($appointment));
    
        return response()->json(['message' => 'Appointment created successfully!'], 201);
    }
    public function assign(Request $request)
{
    $request->validate([
        'appointment_id' => 'required|exists:appointments,id',
        'franchise_id' => 'required|exists:franchises,id',
    ]);

    $appointment = Appointment::findOrFail($request->appointment_id);
    $appointment->franchise_id = $request->franchise_id;
    $appointment->status = 'Franchise Assigned';  // Update the status
    $appointment->save();

    return redirect()->back()->with('success', 'Franchise assigned successfully.');
}

}
