@extends('layouts.app')

@section('content')
<div class="jumbotron my-5">
    <div class="container">
        <h1 class="display-3">Reserveringsite</h1>
        <p>Vivamus non vestibulum enim, quis varius urna. Nunc vestibulum metus quis nunc venenatis, vel vehicula ligula malesuada. Nunc in sem mattis, euismod leo nec, commodo ipsum.</p>
        <p class="text-muted">Aenean viverra augue turpis, eget convallis lacus malesuada a. Ut suscipit orci sed quam consectetur!</p>
        <p class="text-muted">In vulputate odio ultrices. Nullam placerat bibendum cursus. Praesent id varius ligula. Integer a dapibus neque. Vestibulum quis felis leo.</p>
        <p><a class="btn btn-primary btn-lg" href="{{route('create')}}" role="button">Aanmelden &raquo;</a></p>
    </div>
</div>
@endsection
