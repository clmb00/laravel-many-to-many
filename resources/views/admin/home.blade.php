@extends('layouts.admin.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card border-secondary">
                <div class="card-header text-white border-secondary card_header_color">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-4">
        <div class="col-4">
            <div class="card border-secondary">
                <div class="card-header text-white border-secondary card_header_color">Number of Projects</div>

                <div class="card-body">
                    {{ $number_of_proj }}
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card border-secondary">
                <div class="card-header text-white border-secondary card_header_color">Last Project</div>

                <div class="card-body">
                    {{ $last_project->name }}
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-8">
            <div class="card border-secondary">
                <div class="card-header text-white border-secondary d-flex justify-content-between card_header_color">
                    To do
                    <a class="btn btn-outline-light btn-sm" href="{{ route('admin.projects.index') }}"><i class="fa-solid fa-pencil"></i></a>
                </div>

                <div class="card-body">
                    <ul>
                        <li>edit to do</li>
                        <li>crude type</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
