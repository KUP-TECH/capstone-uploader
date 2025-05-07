<x-adminbase>
    <div class="d-flex flex-row justify-content-evenly align-items-center">
        <div class="card">
            <div class="card-body p-2 ps-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="text-sm mb-0 text-capitalize">Total Uploaded</p>
                        <h4 class="mb-0">{{ $data['count'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body p-2 ps-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="text-sm mb-0 text-capitalize">Total Users</p>
                        <h4 class="mb-0">{{ $data['users_count'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body p-2 ps-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="text-sm mb-0 text-capitalize">IoT Based</p>
                        <h4 class="mb-0">{{ $data['iot'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body p-2 ps-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="text-sm mb-0 text-capitalize">Web Based</p>
                        <h4 class="mb-0">{{ $data['web'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body p-2 ps-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="text-sm mb-0 text-capitalize">App Based</p>
                        <h4 class="mb-0">{{ $data['app'] }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid py-2 px-0">
        <div class="card card-body">
            <table class="table table-hover align-middle table-responsive">
                <thead class="table-success">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['projects'] as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->g_name }}</td>
                            <td>{{ $project->year }}</td>
                            <td>
                                <form action="{{ route('delete') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $project['capstone_id'] }}">
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        style="position: relative; z-index: 999;">Delete</button>
                                </form>

                            </td>
                            <td>
                                <a href="{{ route('download', ['id' => $project['capstone_id']]) }}"
                                    class="btn btn-success btn-sm" style="position: relative; z-index: 999;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-download" viewBox="0 0 16 16">
                                        <path
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                        <path
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    
    </div>

</x-adminbase>