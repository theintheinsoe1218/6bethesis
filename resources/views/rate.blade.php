<!-- resources/views/rate.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Rate Hotels</title>
</head>
<body>
    <h1>Rate Hotels</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ url('/rate') }}" method="POST">
        @csrf
        <div>
            <label for="hotel_id">Hotel:</label>
            <select name="hotel_id" id="hotel_id" required>
                @foreach($hotels as $hotel)
                    <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="rating">Rating:</label>
            <input type="number" name="rating" id="rating" min="1" max="5" required>
        </div>
        <button type="submit">Submit Rating</button>
    </form>
</body>
</html>
