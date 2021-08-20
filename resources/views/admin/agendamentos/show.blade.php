@extends('admin.layout.app')

@section('title', 'Agendamento')

@section('content')
    <h2 class="display-3 text-center">Agendamento - {{ $agendamento->id }}</h2>
    <hr>
    <table class="table table-hover table-sm table-bordered">
        <thead>
          <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Data</th>
            <th scope="col">Local</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $agendamento->id }}</th>
            <td>{{ $agendamento->tipo }}</td>
            <td>
                {{ $agendamento->data_hora }}
            </td>
            <td>{{ $agendamento->unidade }}</td>
          </tr>
        </tbody>
      </table>

@endsection