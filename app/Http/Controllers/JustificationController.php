<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Justification;


class JustificationController extends Controller
{
        // Get All Justification
        public function index()
        {
            return response([
                'justifications' => Justification::orderBy('created_at', 'desc')->with('user:id,name')->get()
            ], 200);
        }

        // Create Justification
        public function store(Request $request)
        {
            // Validate Fields
            $attrs = $request->validate([
                'bi_user' => 'required|string',
                'name_patients' => 'required|string',
                'description' => 'required|string',
                'date' => 'required|string',
                'days' => 'required|integer',
                'after' => 'required|string',
            ]);

            // Save Justification
            $justification = Justification::Create([
                'user_id' => auth()->user()->id,
                'bi_user' => $attrs['bi_user'],
                'name_patients' => $attrs['name_patients'],
                'description' => $attrs['description'],
                'date' => $attrs['date'],
                'days' => $attrs['days'],
                'after' => $attrs['after'],
            ]);

            return response([
                'message' => 'Justificativo criado com sucesso!',
                'justification' => $justification
            ], 200);
        }
}
