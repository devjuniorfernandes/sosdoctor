<?php

namespace App\Http\Controllers;

use App\Models\PhysicalExam;
use Illuminate\Http\Request;

class PhysicalExamController extends Controller
{
    // Get Single
    public function show($id)
    {
        return response([
            'personalexams' => PhysicalExam::where('id', $id)->get()
        ]);
    }

    // Create Historics
    public function store(Request $request)
    {
        // Validate Fields
        $attrs = $request->validate([
            'id_historic' => 'required|integer',
            'habit' => 'required|string',
            'skin' => 'required|string',
            'head' => 'required|string',
            'eyes' => 'required|string',
            'teeth' => 'required|string',
            'ears' => 'required|string',
            'face' => 'required|string',
            'neck' => 'required|string',
            'thyroid' => 'required|string',
            'ap_cardiovascular' => 'required|string',
            'ap_respiratory' => 'required|string',
            'ap_gi' => 'required|string',
            'ap_genitourinary' => 'required|string',
            'ap_osteoarticular' => 'required|string',
            'sns' => 'required|string',

        ]);

        // Save 
        $personalexams = PhysicalExam::Create([
            'id_historic' => $attrs['id_historic'],
            'habit' => $attrs['habit'],
            'skin' => $attrs['skin'],
            'head' => $attrs['head'],
            'eyes' => $attrs['eyes'],
            'teeth' => $attrs['teeth'],
            'ears' => $attrs['ears'],
            'face' => $attrs['face'],
            'neck' => $attrs['neck'],
            'ap_cardiovascular' => $attrs['ap_cardiovascular'],
            'ap_respiratory' => $attrs['ap_respiratory'],
            'ap_gi' => $attrs['ap_gi'],
            'ap_genitourinary' => $attrs['ap_genitourinary'],
            'ap_osteoarticular' => $attrs['ap_osteoarticular'],
            'sns' => $attrs['sns'],
        ]);

        return response([
            'message' => 'Antecedentes adicionado com sucesso!',
            'personalexams' => $personalexams
        ], 200);
    }

    // Update 
    public function update(Request $request, $id)
    {

        $personalexams = PhysicalExam::find($id);

        if (!$personalexams) {
            return response([
                'message' => 'Antecedentes não encontrado'
            ], 403);
        }

        // Validate Fields
        $attrs = $request->validate([
            'habit' => 'required|string',
            'skin' => 'required|string',
            'head' => 'required|string',
            'eyes' => 'required|string',
            'teeth' => 'required|string',
            'ears' => 'required|string',
            'face' => 'required|string',
            'neck' => 'required|string',
            'thyroid' => 'required|string',
            'ap_cardiovascular' => 'required|string',
            'ap_respiratory' => 'required|string',
            'ap_gi' => 'required|string',
            'ap_genitourinary' => 'required|string',
            'ap_osteoarticular' => 'required|string',
            'sns' => 'required|string',
        ]);

        $personalexams->update([
            'habit' => $attrs['habit'],
            'skin' => $attrs['skin'],
            'head' => $attrs['head'],
            'eyes' => $attrs['eyes'],
            'teeth' => $attrs['teeth'],
            'ears' => $attrs['ears'],
            'face' => $attrs['face'],
            'neck' => $attrs['neck'],
            'ap_cardiovascular' => $attrs['ap_cardiovascular'],
            'ap_respiratory' => $attrs['ap_respiratory'],
            'ap_gi' => $attrs['ap_gi'],
            'ap_genitourinary' => $attrs['ap_genitourinary'],
            'ap_osteoarticular' => $attrs['ap_osteoarticular'],
            'sns' => $attrs['sns'],
        ]);

        return response([
            'message' => 'Plano de Saude actualizada com sucesso!',
            'insurance' => $personalexams
        ], 200);
    }
}
