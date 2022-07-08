<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    // Get Single Occorrence
    public function show($id)
    {
        return response([
            'insurance' => Insurance::where('id', $id)->get()
        ]);
    }

    // Create Historics
    public function store(Request $request)
    {
        // Validate Fields
        $attrs = $request->validate([
            'id_historic' => 'required|integer',
            'name_company' => 'required|string',
            'plan_health' => 'required|string',
            'number_plan' => 'required|string',
        ]);

        // Save Historics
        $insurance = Insurance::Create([
            'id_historic' => $attrs['id_historic'],
            'name_company' => $attrs['name_company'],
            'plan_health' =>  $attrs['plan_health'],
            'number_plan' =>  $attrs['number_plan'],
        ]);

        return response([
            'message' => 'Plano de Seguro adicionado com sucesso!',
            'insurance' => $insurance
        ], 200);
    }

        // Update Report
        public function update(Request $request, $id)
        {
    
            $insurance = Insurance::find($id);
    
            if (!$insurance) {
                return response([
                    'message' => 'Plano de Saude não encontrado'
                ], 403);
            }

            // Validate Fields
            $attrs = $request->validate([
                'id_historic' => 'required|integer',
                'name_company' => 'required|string',
                'plan_health' => 'required|string',
                'number_plan' => 'required|string',
            ]);
    
            $insurance->update([
                'id_historic' => $attrs['id_historic'],
                'name_company' => $attrs['name_company'],
                'plan_health' => $attrs['plan_health'],
                'number_plan' => $attrs['number_plan'],
            ]);
    
            return response([
                'message' => 'Plano de Saude actualizada com sucesso!',
                'insurance' => $insurance
            ], 200);
        }

}
