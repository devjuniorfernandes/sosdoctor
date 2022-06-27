<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Occurrence;

class ReportController extends Controller
{
    // Get All Report
    public function index()
    {
        return response([
            'reports' => Report::orderBy('created_at', 'desc')->get()
        ], 200);
    }

    // Get Single Report
    public function show($id)
    {
        return response([
            'report' => Report::where('id', $id)->with('user:id,name')->with('occorrence:id,name_patients,subject')->get()
        ]);
    }

    // Create Report
    public function store(Request $request)
    {
        // Validate Fields
        $attrs = $request->validate([
            'id_ocurrence' => 'required|integer',
            'description' => 'required|string',
            'urgency' => 'required|boolean',
            'status' => 'required|integer',
        ]);

        // Save Report
        $report = Report::Create([
            'user_id' => auth()->user()->id,
            'id_ocurrence' => $attrs['id_ocurrence'],
            'description' => $attrs['description'],
            'urgency' => $attrs['urgency'],
            'status' => $attrs['status'],
        ]);

        return response([
            'message' => 'Relatório criada com sucesso!',
            'report' => $report
        ], 200);
    }

    // Update Report
    public function update(Request $request, $id)
    {

        $report = Report::find($id);

        if (!$report) {
            return response([
                'message' => 'Relatório não encontrado'
            ], 403);
        }

        if ($report->user_id != auth()->user()->id) {
            return response([
                'message' => 'Permissão negada para edição!'
            ], 403);
        }

        // Validate Fields
        $attrs = $request->validate([
            'description' => 'required|string',
            'urgency' => 'required|boolean',
            'status' => 'required|integer',
        ]);

        $report->update([
            'description' => $attrs['description'],
            'urgency' => $attrs['urgency'],
            'status' => $attrs['status'],
        ]);

        return response([
            'message' => 'Relatório actualizada com sucesso!',
            'occorrence' => $report
        ], 200);
    }

    // Delete Report
    public function destroy($id)
    {
        $report = Report::find($id);

        if (!$report) {
            return response([
                'message' => 'Relatório não encontrado'
            ], 403);
        }

        if ($report->user_id != auth()->user()->id) {
            return response([
                'message' => 'Permissão negada para edição!'
            ], 403);
        }

        $report->delete();
        return response([
            'message' => 'Relatório deletado com sucesso!',
        ], 200);
    }
}
