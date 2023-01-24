@extends('layouts.admin.admin')

@section('content')
    <div class="container-fluid px-5">
        <h3 class="mb-4">Types - Projects</h3>

        <table class="table table-bordered w-75" style="border-color:rgba(71, 37, 95, 0.4);">
            <thead class="text-white" style="background-color: rgba(71, 37, 95, 0.6);">
              <tr>
                <th scope="col">
                    Type
                </th>
                <th scope="col">
                    Projects
                </th>
              </tr>
            </thead>
            <tbody>
                @forelse ($types as $type)
                    <tr class="rows">
                        <td>{{ $type->name }}</td>
                        <td>
                            <ul style="list-style: none">
                                @forelse ($type->projects as $project)
                                    <li>
                                        <a href="{{ route('admin.projects.show', $project->slug) }}">{{ $project->name }}</a>
                                    </li>
                                @empty
                                    <h5>Nessun Progetto per questa tipologia.</h5>
                                @endforelse
                            </ul>
                        </td>
                    </tr>
                @empty
                    <h5>No Types Found</h5>
                @endforelse
            </tbody>
          </table>
    </div>
@endsection
