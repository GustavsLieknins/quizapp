<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Leaderboard for {{ $quiz->name }}</h1>
        
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-t border-b border-gray-300 text-left">Rank</th>
                    <th class="px-4 py-2 border-t border-b border-gray-300 text-left">User</th>
                    <th class="px-4 py-2 border-t border-b border-gray-300 text-left">Best score</th>
                    <th class="px-4 py-2 border-t border-b border-gray-300 text-left">Avg score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scoresMax as $index => $score)
                    <tr>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $score->username }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $score->score }}</td>
                        <td class="px-4 py-2 border-b border-gray-300">{{ $scoresAvg[$index]->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
