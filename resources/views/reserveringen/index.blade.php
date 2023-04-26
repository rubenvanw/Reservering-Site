@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 column">
            <table class="table table-bordered bg-white">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tijdblok</th>
                        <th scope="col">Aantal</th>
                        <th scope="col">Opmerking</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reserveringen as $reservering)
                    <tr>
                        <th scope="row">{{ $reservering->id }}</th>
                        <td>{{ $reservering->tijdblok }}</td>
                        <td>{{ $reservering->aantal }}</td>
                        <td>{{ $reservering->opmerking }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection