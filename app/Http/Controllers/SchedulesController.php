<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    // Get All Schadules
    public function index()
    {
        return response([
            'schadules' => Schedules::orderBy('created_at', 'desc')->with('user:id,name')->get()
        ], 200);
    }

    // Get Single Schadules
    public function show($id)
    {
        return response([
            'schadules' => Schedules::where('id', $id)->with('user:id,name')->get()
        ]);
    }

    // Create Schadules
    public function store(Request $request)
    {
        // Validate Fields
        $attrs = $request->validate([
            'date_schedules' => 'required|date',
            'name_patients' => 'required|string',
            'phone_patients' => 'required|integer',
            'address_patients' => 'required|string',
            'age_patients' => 'required|integer',
            'subject' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|integer',

        ]);

        // Save Schadules
        $schadules = Schedules::Create([
            'user_id' => auth()->user()->id,
            'date_schedules' => $attrs['date_schedules'],
            'name_patients' => $attrs['name_patients'],
            'phone_patients' => $attrs['phone_patients'],
            'address_patients' => $attrs['address_patients'],
            'age_patients' => $attrs['age_patients'],
            'subject' => $attrs['subject'],
            'description' => $attrs['description'],
            'status' => $attrs['status'],
        ]);

        return response([
            'message' => 'Agêndamento com sucesso!',
            'schadules' => $schadules
        ], 200);
    }

    // Update Schadules
    public function update(Request $request, $id)
    {

        $schadules = Schedules::find($id);

        if (!$schadules) {
            return response([
                'message' => 'Agendamento não encontrado!'
            ], 403);
        }

        if ($schadules->user_id != auth()->user()->id) {
            return response([
                'message' => 'Permissão negada para edição!'
            ], 403);
        }

        // Validate Fields
        $attrs = $request->validate([
            'date_schedules' => 'required|date',
            'name_patients' => 'required|string',
            'phone_patients' => 'required|integer',
            'address_patients' => 'required|string',
            'age_patients' => 'required|integer',
            'subject' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|integer',
        ]);

        $schadules->update([
            'date_schedules' => $attrs['date_schedules'],
            'name_patients' => $attrs['name_patients'],
            'phone_patients' => $attrs['phone_patients'],
            'address_patients' => $attrs['address_patients'],
            'age_patients' => $attrs['age_patients'],
            'subject' => $attrs['subject'],
            'description' => $attrs['description'],
            'status' => $attrs['status'],
        ]);

        return response([
            'message' => 'Agendamento actualizado com sucesso!',
            'schadules' => $schadules
        ], 200);
    }

    public function destroy($id)
    {
        $schadules = Schedules::find($id);

        if (!$schadules) {
            return response([
                'message' => 'Agendamento não encontrado!'
            ], 403);
        }

        if ($schadules->user_id != auth()->user()->id) {
            return response([
                'message' => 'Permissão negada para edição!'
            ], 403);
        }

        $schadules->delete();
        return response([
            'message' => 'Agendamento deletada com sucesso!',
        ], 200);
    }
}
