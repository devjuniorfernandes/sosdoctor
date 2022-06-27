<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Occurrence;

class OccurrenceController extends Controller
{
    // Get All Occorrence
    public function index()
    {
        return response([
            'occorrences' => Occurrence::orderBy('created_at', 'desc')->with('user:id,name')->get()
        ], 200);
    }

    // Get Single Occorrence
    public function show($id)
    {
        return response([
            'occorrence' => Occurrence::where('id', $id)->get()
        ]);

    }

    public function count(){
        return response([
            'occorrences' => Occurrence::count()
        ], 200);
    }

    // Create Occorrence
    public function store(Request $request)
    {
        // Validate Fields
        $attrs = $request->validate([
            'name_patients' => 'required|string',
            'phone_patients' => 'required|integer',
            'address_patients' => 'required|string',
            'age_patients' => 'required|integer',
            'subject' => 'required|string',
            'description' => 'required|string',
            'urgency' => 'required|boolean',
            'status' => 'required|integer',
        ]);

        // Save Occorrence
        $occorrence = Occurrence::Create([
            'user_id' => auth()->user()->id,
            'name_patients' => $attrs['name_patients'],
            'phone_patients' => $attrs['phone_patients'],
            'address_patients' => $attrs['address_patients'],
            'age_patients' => $attrs['age_patients'],
            'subject' => $attrs['subject'],
            'description' => $attrs['description'],
            'urgency' => $attrs['urgency'],
            'status' => $attrs['status'],
        ]);

        return response([
            'message' => 'Ocorrência criada com sucesso!'
             //'occorrence' => $occorrence
        ], 200);
    }

    // Update Occorrence
    public function update(Request $request, $id)
    {

        $occorrence = Occurrence::find($id);

        if (!$occorrence) {
            return response([
                'message' => 'Ocorrência não encontrada'
            ], 403);
        }

        if ($occorrence->user_id != auth()->user()->id) {
            return response([
                'message' => 'Permissão negada para edição!'
            ], 403);
        }

        // Validate Fields
        $attrs = $request->validate([
            'name_patients' => 'required|string',
            'phone_patients' => 'required|integer',
            'address_patients' => 'required|string',
            'age_patients' => 'required|integer',
            'subject' => 'required|string',
            'description' => 'required|string',
            'urgency' => 'required|boolean',
            'status' => 'required|integer',
        ]);

        $occorrence->update([
            'name_patients' => $attrs['name_patients'],
            'phone_patients' => $attrs['phone_patients'],
            'address_patients' => $attrs['address_patients'],
            'age_patients' => $attrs['age_patients'],
            'subject' => $attrs['subject'],
            'description' => $attrs['description'],
            'urgency' => $attrs['urgency'],
            'status' => $attrs['status'],
        ]);

        return response([
            'message' => 'Ocorrência actualizada com sucesso!',
            'occorrence' => $occorrence
        ], 200);
    }

    public function destroy($id)
    {
        $occorrence = Occurrence::find($id);

        if (!$occorrence) {
            return response([
                'message' => 'Ocorrência não encontrada'
            ], 403);
        }

        if ($occorrence->user_id != auth()->user()->id) {
            return response([
                'message' => 'Permissão negada para edição!'
            ], 403);
        }

        $occorrence->report()->delete();
        $occorrence->delete();
        return response([
            'message' => 'Ocorrência deletada com sucesso!',
        ], 200);
    }
}
