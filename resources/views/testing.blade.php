
<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <form method="POST" action="{{ route('search') }}">
        @csrf
        <input type="text" name="searchId" placeholder="Enter ID">
        <button type="submit">Search</button>
    </form>

    @php
      $result = 'Hello, World!';
      $searchId = 'Hello, World!';
    @endphp

   @foreach($result as $results)
    @if ($results)
        <h2>Result Found for ID: {{ $searchId }}</h2>
        <table>
            <tr>
                <th>Type</th>
                <th>Subject Code</th>
                <th>Roll</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td>{{ $results->type }}</td>
                <td>{{ $results->subject_code }}</td>
                <td>{{ $results->roll }}</td>
                <td>{{ $results->grade }}</td>
            </tr>
        </table>
    @else
        <p>No result found for ID: {{ $searchId }}</p>
  @endif

  @endforeach
</body>
</html>
