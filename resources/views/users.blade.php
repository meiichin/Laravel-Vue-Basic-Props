@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman User</div>

                <div class="card-body">

                    <users :data="{{$users->toJson()}}"></users>

                </div>
            </div>

            <example-component></example-component>
        </div>
    </div>
</div>
@endsection
