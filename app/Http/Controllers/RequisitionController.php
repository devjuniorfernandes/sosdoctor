<?php

namespace App\Http\Controllers;

use App\Models\Requisition;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{

    public function index()
    {
        return response([
            'requisitions' => Requisition::orderBy('created_at', 'desc')->with('user:id,name')->get()
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        // Validate Fields
        $attrs = $request->validate([
            'name_patients' => 'required|string',
            'age_patients' => 'required|integer',
            'pre_diagnosis' => 'required|string',
            'exams' => 'required|string',
            'date' => 'required|string',
        ]);

        // Save Requisition
        $requisition = Requisition::Create([
            'user_id' => auth()->user()->id,
            'name_patients' => $attrs['name_patients'],
            'age_patients' => $attrs['age_patients'],
            'pre_diagnosis' => $attrs['pre_diagnosis'],
            'exams' => $attrs['exams'],
            'date' => $attrs['date'],
        ]);

        return response([
            'message' => 'Requisição Medica criada com sucesso!'
            //'requisitions' => $requisition
        ], 200);

    }

    public function show(Requisition $id)
    {
        return response([
            'requisition' => Requisition::where('id', $id)->get()
        ]);
    }

    public function edit(Requisition $requisition)
    {
        //
    }

    public function update(Request $request, Requisition $requisition)
    {
        //
    }


    public function destroy(Requisition $requisition)
    {
        //
    }
}
