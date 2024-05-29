<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function getAppointmentById($id)
    {
        $appointment = Appointment::find($id);
        return response()->json($appointment);
    }

    public function getAppointmentsBySender($sender_id)
    {
        $appointments = Appointment::where('sender_id', $sender_id)->get();
        return response()->json($appointments);
    }

    public function getAppointmentsByReceiver($receiver_id)
    {
        $appointments = Appointment::where('receiver_id', $receiver_id)->get();
        return response()->json($appointments);
    }
}
