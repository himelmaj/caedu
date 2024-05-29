<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class Calendar extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return response()->json($appointments);
    }

    public function getAppointmentsById($id)
    {
        $appointment = Appointment::find($id);
        
        return response()->json($appointment);
    }
}
