@extends('user_layouts.app')

@section('content')
<div class="container">
    <h1>Hotel Recommendation System</h1>

    <form action="{{ url('/matrix') }}" method="GET" class="form-inline mb-3">
        <label for="method" class="mr-2">Select Method:</label>
        <select name="method" id="method" class="form-control mr-2">
            <option value="cosine" {{ $method === 'cosine' ? 'selected' : '' }}>Cosine Similarity</option>
            <option value="pearson" {{ $method === 'pearson' ? 'selected' : '' }}>Pearson Correlation</option>
        </select>
        <button type="submit" class="btn btn-primary">Update Matrix</button>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>user_id</th>
                @foreach($similarityMatrix as $userId => $similarities)
                    <th>{{ $similarities['user_name'] }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($similarityMatrix as $userId1 => $similarities)
                <tr>
                    <td>{{ $userId1 }}</td>
                    @foreach($similarityMatrix as $userId2 => $_)
                        <td>{{ number_format($similarities[$userId2], 4) }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection