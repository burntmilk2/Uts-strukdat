<!-- resources/views/drivers/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Driver Detail</title>
</head>
<body>
    <h1>Driver Detail</h1>

    <p><strong>Nama:</strong> {{ $driver->nama }}</p>
    <p><strong>SIM:</strong> {{ $driver->sim }}</p>
    <p><strong>ID Supir:</strong> {{ $driver->idsupir }}</p>
    <p><strong>KTP:</strong> {{ $driver->ktp }}</p>

    <a href="{{ route('drivers.index') }}">Back</a>
</body>
</html>
