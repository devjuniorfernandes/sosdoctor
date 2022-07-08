<?php

namespace App\Http\Controllers;

use App\Models\Personalback;
use Illuminate\Http\Request;

class PersonalbackController extends Controller
{
    // Get Single
    public function show($id)
    {
        return response([
            'personalback' => Personalback::where('id', $id)->get()
        ]);
    }

    // Create Historics
    public function store(Request $request)
    {
        // Validate Fields
        $attrs = $request->validate([
            'id_historic' => 'required|integer',
            'dyslipidemias' => 'required|string',
            'diabetes' => 'required|string',
            'hypertension' => 'required|string',
            'allergies' => 'required|string',
            'tobacco' => 'required|string',
            'alcohol' => 'required|string',
            'toxic' => 'required|string',
            'traumatological' => 'required|string',
            'numberchildren' => 'required|string',
            'others' => 'required|string',
            'diuresis' => 'required|string',
            'evacuation' => 'required|string',
            'stresslevel' => 'required|string',
            'activity' => 'required|string',
        ]);

        // Save 
        $personalback = Personalback::Create([
            'id_historic' => $attrs['id_historic'],
            'dyslipidemias' => $attrs['dyslipidemias'],
            'diabetes' => $attrs['diabetes'],
            'hypertension' => $attrs['hypertension'],
            'allergies' => $attrs['allergies'],
            'tobacco' => $attrs['tobacco'],
            'alcohol' => $attrs['alcohol'],
            'toxic' => $attrs['toxic'],
            'traumatological' => $attrs['traumatological'],
            'numberchildren' => $attrs['numberchildren'],
            'others' => $attrs['others'],
            'diuresis' => $attrs['diuresis'],
            'evacuation' => $attrs['evacuation'],
            'surgeries' => $attrs['surgeries'],
            'stresslevel' => $attrs['stresslevel'],
            'activity' => $attrs['activity'],
        ]);

        return response([
            'message' => 'Antecedentes adicionado com sucesso!',
            'personalback' => $personalback
        ], 200);
    }

    // Update 
    public function update(Request $request, $id)
    {

        $personalback = Personalback::find($id);

        if (!$personalback) {
            return response([
                'message' => 'Antecedentes não encontrado'
            ], 403);
        }

        // Validate Fields
        $attrs = $request->validate([
            'dyslipidemias' => 'required|string',
            'diabetes' => 'required|string',
            'hypertension' => 'required|string',
            'allergies' => 'required|string',
            'tobacco' => 'required|string',
            'alcohol' => 'required|string',
            'toxic' => 'required|string',
            'traumatological' => 'required|string',
            'numberchildren' => 'required|string',
            'others' => 'required|string',
            'diuresis' => 'required|string',
            'evacuation' => 'required|string',
            'stresslevel' => 'required|string',
            'activity' => 'required|string',
        ]);

        $personalback->update([
            'dyslipidemias' => $attrs['dyslipidemias'],
            'diabetes' => $attrs['diabetes'],
            'hypertension' => $attrs['hypertension'],
            'allergies' => $attrs['allergies'],
            'tobacco' => $attrs['tobacco'],
            'alcohol' => $attrs['alcohol'],
            'toxic' => $attrs['toxic'],
            'traumatological' => $attrs['traumatological'],
            'numberchildren' => $attrs['numberchildren'],
            'others' => $attrs['others'],
            'diuresis' => $attrs['diuresis'],
            'evacuation' => $attrs['evacuation'],
            'surgeries' => $attrs['surgeries'],
            'stresslevel' => $attrs['stresslevel'],
            'activity' => $attrs['activity'],
        ]);

        return response([
            'message' => 'Plano de Saude actualizada com sucesso!',
            'insurance' => $personalback
        ], 200);
    }
}
