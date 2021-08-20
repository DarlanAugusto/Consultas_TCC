<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAgendamentos;
use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index() {
        $agendamentos = Agendamento::get();
        return view('admin.agendamentos.index', compact('agendamentos'));
    }

    public function create() {
        return view('admin.agendamentos.create');
    }

    public function store(StoreAgendamentos $request) {
        $agendamento = Agendamento::create($request->all());
        return redirect()
                    ->route('agendamentos.show', $agendamento->id)
                    ->with('mensagem', 'Sua consulta doi agendada');
    }

    public function show($id) {
        $agendamento = Agendamento::findOrFail($id);

        return view('admin.agendamentos.show', compact('agendamento'));
    }
}
