<x-app-layout>
    <div class="container">
        <h1>Your Past Scores</h1>
        
        <!-- Display the average, min, and max scores -->
        <div class="mb-4">
            <p><strong>Average Score:</strong> {{ $averageScore }}</p>
            <p><strong>Minimum Score:</strong> {{ $minScore }}</p>
            <p><strong>Maximum Score:</strong> {{ $maxScore }}</p>
        </div>

        <table class="border border-gray-400 border-collapse w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Quiz Name</th>
                    <th class="border border-gray-400 px-4 py-2">Score</th>
                    <th class="border border-gray-400 px-4 py-2">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scores as $score)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $score->quiz_name }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $score->score }} / {{ $score->total_questions }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $score->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
