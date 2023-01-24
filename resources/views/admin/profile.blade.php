@extends('layouts.admin.admin')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div>
            <h4 class="ms-1"><strong>Name:</strong> {{ Auth::user()->name }}</h4>
            <h4 class="ms-1"><strong>Email:</strong> {{ Auth::user()->email }}</h4>
            <h4 class="ms-1"><strong>Account verificato il:</strong> {{ (Auth::user()->email_verified_at) ? Auth::user()->email_verified_at : 'Non verificato' }}</h4>
            <h4 class="ms-1"><strong>Account creato il:</strong> {{ Auth::user()->created_at }}</h4>
        </div>
    </div>
</div>
@endsection
