<!-- resources/views/drivers/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Driver List</title>
</head>
<body>
    <h1>Drivers</h1>
    <a href="{{ route('drivers.create') }}">Add New Driver</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>SIM</th>
            <th>ID Supir</th>
            <th>KTP</th>
            <th>Actions</th>
        </tr>

        @foreach ($drivers as $driver)
        <tr>
            <td>{{ $driver->id }}</td>
            <td>{{ $driver->nama }}</td>
            <td>{{ $driver->sim }}</td>
            <td>{{ $driver->idsupir }}</td>
            <td>{{ $driver->ktp }}</td>
            <td>
                <a href="{{ route('drivers.show', $driver) }}">View</a> |
                <a href="{{ route('drivers.edit', $driver) }}">Edit</a> |
                <form action="{{ route('drivers.destroy', $driver) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this driver?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
