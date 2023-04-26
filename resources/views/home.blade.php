@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Je bent ingelogd!') }}

                    </br>
                    </br>
                    @if(Auth::user()->role === 'admin')
                    <a href="{{route('index')}}">Overzicht</a>
                    </br>
                    @endif
                    <a href="{{route('create')}}">Reserveer een afspraak</a>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection