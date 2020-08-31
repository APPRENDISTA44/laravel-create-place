@extends('layouts.layout')

@section('main_content')
  <h1>Pagina Students</h1>
  <div>
    @foreach ($students as $student)
      <ul>
        <li>Nome: {{ $student->nome }}</li>
        <li>Nome: {{ $student->cognome }}</li>
        <li>Nome: {{ $student->voto }}</li>

      </ul>
    @endforeach

  </div>
@endsection
