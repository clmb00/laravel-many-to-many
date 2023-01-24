@extends('layouts.admin.admin')

@section('content')
    <div class="container-fluid px-5">

        <h3 class="mb-4">Manage Technologies</h3>

        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('admin.technologies.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3 w-50">
                <input type="text" class="form-control" name="name" placeholder="New technology...">
                <button class="btn btn-outline-success" type="submit" id="button-addon2"><i class="fa-solid fa-circle-plus"></i>  ADD</button>
            </div>
        </form>

        <table class="table table-bordered w-50" style="border-color:rgba(71, 37, 95, 0.4);">
            <thead class="text-white" style="background-color: rgba(71, 37, 95, 0.6);">
              <tr>
                <th scope="col">Technology</th>
                <th scope="col">Projects count</th>
              </tr>
            </thead>
            <tbody>

                @forelse ($technologies as $technology)
                    <tr class="rows">

                        <td class="d-flex">
                            <form action="{{ route('admin.technologies.update', $technology) }}" method="POST" class="d-flex flex-fill">
                                @csrf
                                @method('PATCH')
                                <input value="{{ $technology->name }}" class="form-control border-0 me-2" type="text" name="name" id="name">
                                <button class="btn btn-warning me-2" type="submit"><i class="fa-solid fa-file-pen"></i></button>
                            </form>

                            @include('layouts.admin.partials.modal-delete', [
                                    'route' => 'technologies',
                                    'item' => $technology
                                ])

                        </td>

                        <td class="text-center"><span class="badge text-bg-secondary fs-4">{{ count($technology->projects) }}</span></td>

                    </tr>
                @empty
                    <h5>No Technologies Found</h5>
                @endforelse

            </tbody>
          </table>

    </div>

@endsection
