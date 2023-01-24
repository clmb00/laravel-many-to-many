<aside class="aside_bar vh-100 ps-3">
    <div class="d-flex align-items-center shadow-sm ps-3" style="height: 80px">
        <h1 class="text-light"><i class="fa-solid fa-gears"></i> <span class="fs-3">MyDashboard</span></h1>
    </div>
    <nav class="navbar d-flex flex-column gap-3 mt-4">
        <div class="d-flex gap-1" style="width: 80%;">
            <li class="nav-item btn btn-outline-light btn-lg w-100">
                <a class="nav-link" href="{{ url('/admin') }}"><i class="fa-solid fa-house"></i><br>Dashboard</a>
            </li>
        </div>
        <div class="d-flex gap-1" style="width: 80%;">
            <li class="nav-item btn btn-outline-light btn-lg w-100">
                <a class="nav-link" href="{{ url('/admin/projects') }}"><i class="fa-solid fa-file-lines"></i><br>Projects</a>
            </li>
        </div>
        <div class="d-flex gap-1" style="width: 80%;">
            <li class="nav-item btn btn-outline-light btn-lg w-100">
                <a class="nav-link" href="{{ route('admin.projects.create') }}"><i class="fa-solid fa-file-circle-plus"></i><br>New Project</a>
            </li>
        </div>
        <div class="d-flex gap-1" style="width: 80%;">
            <li class="nav-item btn btn-outline-light btn-lg w-100">
                <a class="nav-link" href="{{ route('admin.project_type') }}"><i class="fa-solid fa-link"></i><br>Projects - Type</a>
            </li>
        </div>
        <div class="d-flex gap-1" style="width: 80%;">
            <li class="nav-item btn btn-outline-light btn-lg w-100">
                <a class="nav-link" href="{{ route('admin.types.index') }}"><i class="fa-solid fa-file-lines"></i><br>Types</a>
            </li>
        </div>
        <div class="d-flex gap-1" style="width: 80%;">
            <li class="nav-item btn btn-outline-light btn-lg w-100">
                <a class="nav-link" href="{{ url('/admin/profile') }}"><i class="fa-solid fa-user"></i><br>Profile</a>
            </li>
        </div>
    </nav>
</aside>
