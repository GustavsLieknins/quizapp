<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Your Past Scores</h1>
        
        <!-- Display the average, min, and max scores -->
        <div class="mb-4 flex justify-between">
            <p class="flex items-center"><strong>Average Score:</strong> <span class="ml-2">{{ $averageScore ?? '0' }}</span></p>
            <p class="flex items-center"><strong></strong> <span class="ml-2"></span></p>
            <p class="flex items-center"><strong></strong> <span class="ml-2"></span></p>
        </div>

        @if (count($scores) > 0)
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-t border-b border-gray-300">Quiz Name</th>
                    <th class="px-4 py-2 border-t border-b border-gray-300">Score</th>
                    <th class="px-4 py-2 border-t border-b border-gray-300">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scores as $score)
                    <tr>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $score->quiz_name }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $score->score }} / {{ $score->total_questions }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $score->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p class="text-center text-lg font-semibold text-gray-600">You haven't done any quizzes yet.</p>
        @endif
    </div>
</x-app-layout>

