@extends('layouts.admin.admin')

@section('content')
<div class="container-fluid px-5">

    @if(isset($updated) && !empty('updated'))
            <div class="alert alert-warning" role="alert">
                {{ $updated }}
            </div>
    @endif

    @if(session('created'))
            <div class="alert alert-success" role="alert">
                {{ session('created') }}
            </div>
    @endif

    <h3><strong>Name:</strong> {{ $project->name }}</h3>

    <h3><strong>Client Name:</strong> {{ $project->client_name }}</h3>

    @if ($project->type)
        <h3><strong>Type:</strong> {{ $project->type->name }}</h3>
    @endif

    @if ($project->cover_image)
        <div class="text-center my-5">
            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->image_original_name }}" width="50%">
            <p><i>{{ $project->image_original_name }}</i></p>
        </div>
    @endif

    <p class="fs-4"><strong class="fs-3">Summary: </strong>{!! $project->summary !!}</p>

    <hr class="mt-5">

    <h5>Created at: {{ $project->created_at }}</h5>
    <h5>Last Update: {{ $project->updated_at }}</h5>
    <h5>Slug: {{ $project->slug }}</h5>
    <h5>Id: {{ $project->id }}</h5>

    <div class="row mt-3 container mx-auto down_button_show">
        <div class="col-4">
            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}"><i class="fa-solid fa-left-long"></i> Back</a>
        </div>
        <div class="col-4">
            <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}"><i class="fa-solid fa-file-pen"></i> Edit</a>
        </div>
        <div class="col-4">
            @include('layouts.admin.partials.modal-delete', [
                                    'route' => 'projects',
                                    'item' => $project
                                ])
        </div>
    </div>

</div>
@endsection
