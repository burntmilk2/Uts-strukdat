<!-- resources/views/drivers/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Driver</title>
</head>
<body>
    <h1>Add New Driver</h1>

    <form method="POST" action="{{ route('drivers.store') }}">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>SIM:</label><br>
        <input type="text" name="sim"><br><br>

        <label>ID Supir:</label><br>
        <input type="text" name="idsupir"><br><br>

        <label>KTP:</label><br>
        <input type="text" name="ktp"><br><br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('drivers.index') }}">Back</a>
</body>
</html>
