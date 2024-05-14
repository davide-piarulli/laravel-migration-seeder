@extends('layout.main')

@section('content')
  <h1>Tabellone Partenze</h1>
  {{-- @dd($trains); --}}
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Compagnia</th>
        <th scope="col">N. Treno</th>
        <th scope="col">Destinazione</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Orario di arrivo</th>
        <th scope="col">Ritardo</th>
        <th scope="col">Cancellato</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($trains as $train)
        <tr>
          <td>{{ $train->travel_company }}</td>
          <td>{{ $train->train_number }}</td>
          <td>{{ $train->arrival_station }}</td>
          <td>{{ $train->departure_time }}</td>
          <td>{{ $train->arrival_time }}</td>
          <td>{{ $train->minutes_late }} minuti</td>
          <td>{{ $train->is_cancelled }}</td>

        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
