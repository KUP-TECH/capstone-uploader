<x-adminbase>

    <div class="card card-body">
        <table class="table table-hover align-middle table-responsive">
            <thead class="table-success">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody class="text-center text-wrap">
                @foreach ($data['users'] as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                    <tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-adminbase>