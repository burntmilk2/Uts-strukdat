<!-- resources/views/drivers/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Driver</title>
</head>
<body>
    <h1>Edit Driver</h1>

    <form method="POST" action="{{ route('drivers.update', $driver) }}">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $driver->nama }}"><br><br>

        <label>SIM:</label><br>
        <input type="text" name="sim" value="{{ $driver->sim }}"><br><br>

        <label>ID Supir:</label><br>
        <input type="text" name="idsupir" value="{{ $driver->idsupir }}"><br><br>

        <label>KTP:</label><br>
        <input type="text" name="ktp" value="{{ $driver->ktp }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('drivers.index') }}">Back</a>
</body>
</html>
