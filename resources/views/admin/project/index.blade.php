@extends('layouts.admin.admin')

@section('content')
    <div class="container-fluid px-5">
        <h3 class="mb-4">Projects</h3>

        @if(session('deleted'))
            <div class="alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>
        @endif

        <table class="table table-striped table-hover table-bordered" style="border-color:rgba(71, 37, 95, 0.4);">
            <thead class="text-white" style="background-color: rgba(71, 37, 95, 0.6);">
              <tr>
                <th scope="col" class="text-decoration-underline" style="min-width: 60px">
                    <a class="nav-link" href="{{ route('admin.projects.orderby', ['column'=>'id', 'direction'=>$direction]) }}">
                        ID @if ($active_order == 'id') @if ($direction == 'desc') <i class='fa-solid fa-chevron-up'></i> @else <i class="fa-solid fa-chevron-down"></i> @endif @endif
                    </a>
                </th>
                <th scope="col" class="text-decoration-underline">
                    <a class="nav-link" href="{{ route('admin.projects.orderby', ['column'=>'name', 'direction'=>$direction]) }}">
                        Name @if ($active_order == 'name') @if ($direction == 'desc') <i class="fa-solid fa-chevron-up"></i> @else <i class="fa-solid fa-chevron-down"></i> @endif @endif
                    </a>
                </th>
                <th scope="col" class="text-decoration-underline">
                    <a class="nav-link" href="{{ route('admin.projects.orderby', ['column'=>'client_name', 'direction'=>$direction]) }}">
                        Client Name @if ($active_order == 'client_name') @if ($direction == 'desc') <i class="fa-solid fa-chevron-up"></i> @else <i class="fa-solid fa-chevron-down"></i> @endif @endif
                    </a>
                </th>
                <th scope="col">Summary</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

                @forelse ($projects as $project)
                    <tr class="rows">

                        <td>{{ $project->id }}</td>

                        <td>
                            {{ $project->name }}<br>
                            <div style="text-align: right">
                                <span class="badge rounded-pill text-bg-success">{{ $project->type?->name }}</span>
                            </div>
                        </td>

                        <td>{{ $project->client_name }}</td>

                        <td>
                            <div style="height: 50px; overflow:auto;">
                                {!! $project->summary !!}
                            </div>
                        </td>

                        <td>
                            <div class="d-flex gap-2 align-items-center" style="height: 50px">
                                <a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}"><i class="fa-solid fa-circle-info"></i></a>
                                <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}"><i class="fa-solid fa-file-pen"></i></a>

                                @include('layouts.admin.partials.modal-delete', [
                                    'route' => 'projects',
                                    'item' => $project
                                ])
                            </div>
                        </td>

                    </tr>
                @empty
                    <h5>No Projects Found</h5>
                @endforelse

            </tbody>
          </table>

          {{-- {{ $projects->links() }} --}}
    </div>
@endsection
