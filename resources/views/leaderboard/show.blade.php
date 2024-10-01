<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Leaderboard for {{ $quiz->name }}</h1>
        
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-t border-b border-gray-300">Rank</th>
                    <th class="px-4 py-2 border-t border-b border-gray-300">User</th>
                    <th class="px-4 py-2 border-t border-b border-gray-300">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scores as $index => $score)
                    <tr>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $score->username }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $score->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
