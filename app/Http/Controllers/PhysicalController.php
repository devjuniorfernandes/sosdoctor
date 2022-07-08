<?php

namespace App\Http\Controllers;

use App\Models\Physical;
use Illuminate\Http\Request;

class PhysicalController extends Controller
{
    // Get Single Occorrence
    public function show($id)
    {
        return response([
            'physical' => Physical::where('id', $id)->get()
        ]);
    }

    // Create Historics
    public function store(Request $request)
    {
        // Validate Fields
        $attrs = $request->validate([
            'id_historic' => 'required|integer',
            'freq_respiratory' => 'required|string',
            'freq_heart' => 'required|string',
            'blood_pressure' => 'required|string',
            'temperature' => 'required|string',
            'perce_saturation' => 'required|string',
            'weight' => 'required|string',
            'height' => 'required|string',
            'imc_kg' => 'required|string',
        ]);

        // Save Historics
        $physical = Physical::Create([
            'id_historic' => $attrs['id_historic'],
            'freq_respiratory' => $attrs['freq_respiratory'],
            'freq_heart' =>  $attrs['freq_heart'],
            'blood_pressure' =>  $attrs['blood_pressure'],
            'temperature' =>  $attrs['temperature'],
            'perce_saturation' =>  $attrs['perce_saturation'],
            'weight' =>  $attrs['weight'],
            'height' =>  $attrs['height'],
            'imc_kg' =>  $attrs['imc_kg'],
        ]);

        return response([
            'message' => 'Descrição Fisica adicionada com sucesso!',
            'physical' => $physical
        ], 200);
    }

    // Update Report
    public function update(Request $request, $id)
    {

        $physical = Physical::find($id);

        if (!$physical) {
            return response([
                'message' => 'Descriação física não encontrado'
            ], 403);
        }

        // Validate Fields
        $attrs = $request->validate([
            'freq_respiratory' => 'required|string',
            'freq_heart' => 'required|string',
            'blood_pressure' => 'required|string',
            'temperature' => 'required|string',
            'perce_saturation' => 'required|string',
            'weight' => 'required|string',
            'height' => 'required|string',
            'imc_kg' => 'required|string',
        ]);

        $physical->update([
            'freq_respiratory' => $attrs['freq_respiratory'],
            'freq_heart' =>  $attrs['freq_heart'],
            'blood_pressure' =>  $attrs['blood_pressure'],
            'temperature' =>  $attrs['temperature'],
            'perce_saturation' =>  $attrs['perce_saturation'],
            'weight' =>  $attrs['weight'],
            'height' =>  $attrs['height'],
            'imc_kg' =>  $attrs['imc_kg'],
        ]);

        return response([
            'message' => 'Descrição física actualizada com sucesso!',
            'physical' => $physical
        ], 200);
    }
}
