<!DOCTYPE html>
<html>
<head>
    <title>Scam Reporter</title>
</head>
<body>
    <h1>Report a Scam Phone Number</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('report.store') }}" method="POST">
        @csrf
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required>
        <button type="submit">Report</button>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
