<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TomadorController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Listagem de tomadores']);
    }

    public function show($id)
    {
        return response()->json(['message' => "Exibindo tomador com ID: $id"]);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Tomador cadastrado com sucesso']);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Tomador ID $id atualizado"]);
    }

    public function destroy($id)
    {
        return response()->json(['message' => "Tomador ID $id removido"]);
    }
}
