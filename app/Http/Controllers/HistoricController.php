<?php

namespace App\Http\Controllers;

use App\Models\Historic;
use Illuminate\Http\Request;

class HistoricController extends Controller
{
    // Get All Historics
    public function index()
    {
        return response([
            'historics' => Historic::orderBy('created_at', 'desc')->with('user:id,name')->get()
        ], 200);
    }

    // Create Historics
    public function store(Request $request)
    {
        // Validate Fields
        $attrs = $request->validate([
            'name_patients' => 'required|string',
            'gender_patients' => 'required|string',
            'bi_patients' => 'required|string',
            'number_patients' => 'required|string',
            'address_patients' => 'required|string',
            'local_patients' => 'required|string',
            'birth_date_patients' => 'required|string',
            'civil_status_patients' => 'required|string',
            'spouse_patients' => 'required|string',
            'parents_patients' => 'required|string',
            'profission_patients' => 'required|string',
        ]);

        // Save Historics
        $historic = Historic::Create([
            'user_id' => auth()->user()->id,
            'name_patients' => $attrs['name_patients'],
            'gender_patients' => $attrs['gender_patients'],
            'bi_patients' =>  $attrs['bi_patients'],
            'number_patients' => $attrs['number_patients'],
            'address_patients' => $attrs['address_patients'],
            'local_patients' =>  $attrs['local_patients'],
            'birth_date_patients' => $attrs['birth_date_patients'],
            'civil_status_patients' => $attrs['civil_status_patients'],
            'spouse_patients' => $attrs['spouse_patients'],
            'parents_patients' => $attrs['parents_patients'],
            'profission_patients' => $attrs['profission_patients'],
        ]);

        return response([
            'message' => 'Historico Clinico criado com sucesso!',
            'historics' => $historic
        ], 200);
    }
}
