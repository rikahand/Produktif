<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiPendidikanController extends Controller
{
    // Acara 21
    public function getAll()
    {
        $pendidikan = Pendidikan::all();
        return Response::json($pendidikan, 201);
    }

    // Acara 22
    public function getPen($id)
    {
        $pendidikan = Pendidikan::find($id);
        return Response::json($pendidikan, 200);
    }

    public function createPen(Request $request)
    {
        Pendidikan::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil ditambahkan!'
        ], 201);
    }

    public function updatePen($id, Request $request)
    {
        $pendidikan = Pendidikan::find($id);
        if ($pendidikan) {
            $pendidikan->update($request->all());

            return response()->json([
                'status' => 'ok',
                'message' => 'Pendidikan berhasil dirubah!'
            ], 201);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Data tidak ditemukan!'
        ], 404);
    }

    public function deletePen($id)
    {
        $deleted = Pendidikan::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil dihapus'
        ], 201);
    }
}
