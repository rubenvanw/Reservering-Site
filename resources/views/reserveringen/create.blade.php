@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 column">
            <div class="card">
                <div class="card-header">Reserveer</div>

                <div class="card-body">
                    <form action="/reserveringen/store" method="POST" class="d-flex flex-column">

                        @csrf

                        <div class="row mb-3">
                            <label for="tijdblok" class="col-md-4 col-form-label text-md-end">Tijdblok</label>

                            <div class="col-md-6">
                                <select name="tijdblok" id="tijdblok" class="form-control" autofocus>
                                    <option selected>Kies een tijdblok...</option>
                                    <option value="17:30 - 18:25">17:30 - 18:25</option>
                                    <option value="18:30 - 19:25">18:30 - 19:25</option>
                                    <option value="19:30 - 20:25">19:30 - 20:25</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="aantal" class="col-md-4 col-form-label text-md-end">Aantal</label>

                            <div class="col-md-6">
                                <input id="aantal" type="number" class="form-control" name="aantal" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="opmerking" class="col-md-4 col-form-label text-md-end">Opmerking</label>

                            <div class="col-md-6">
                                <textarea name="opmerking" id="opmerking" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                            </div>
                        </div>

                        <p class="text-center">{{session('message')}}</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection