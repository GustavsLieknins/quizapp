<x-app-layout>
    <div class="container">
        <h1>Your Past Scores</h1>
        <table>
            <thead>
                <tr>
                    <th>Quiz Name</th>
                    <th>Score</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scores as $score)
                    <tr>
                        <td>{{ $score->quiz_name }}</td>
                        <td>{{ $score->score }}</td>
                        <td>{{ $score->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>