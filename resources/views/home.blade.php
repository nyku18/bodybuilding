@extends('layouts.app')

@section('content')
<div class="container top-contact">
    <div class="row">
        <div class="col-md-6 contact-stanga">
            <i class="fas fa-address-card"></i> Sibiu, V.Milea P1
            <i class="fas fa-phone"></i> 0765899425
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
