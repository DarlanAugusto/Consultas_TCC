@extends('admin.layout.app')

@section('title', 'Meus agendamentos')

@section('content')
    <h2 class="display-5 text-center">Consultas Agendadas</h2>
    <hr>
    <div class="text-center mb-3">
      <a style="text-decoration: none; color: #000;" href="{{ route('agendamentos.create') }}" class="h4 p-3 text-muted" title="Agendar Nova Consulta"> <i class="bi bi-plus-lg"></i> Agendar Consulta</a>
    </div>
    <hr>
    @foreach ($agendamentos as $agendamento)
      <div class="row d-flex justify-content-center">
        <div class="col-2 d-flex align-content-center flex-wrap justify-content-center">
          <i class="bi bi-calendar-check display-1"></i>
        </div>
        <div class="col-4">
          <p class=""><b>{{ $agendamento->id }} - {{ $agendamento->tipo }}</b></p>
          <p class="text-muted p-0 m-0">
             {{ $agendamento->data_hora }}
          </p>
          <a href="" class="text-decoration-none text-muted">
            <i class="bi bi-geo-alt-fill"></i> {{ $agendamento->unidade }}

          </a>
        </div>
        <div class="col-2 d-flex align-content-center flex-wrap justify-content-center">
          <a href="{{ route('agendamentos.show', $agendamento->id) }}" class="text-decoration-none" style="color: #000;">
            <i class="bi bi-arrow-right display-5"></i>
          </a>
        </div>
      </div>
      <hr>
      
    @endforeach
@endsection
