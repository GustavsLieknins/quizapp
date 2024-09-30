<x-app-layout>
    <div class="container">
        <h1>Leaderboard for {{ $quiz->name }}</h1>
        <table class="border border-gray-400 border-collapse w-full content-center">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Rank</th>
                    <th class="border border-gray-400 px-4 py-2">User</th>
                    <th class="border border-gray-400 px-4 py-2">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scores as $index => $score)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $score->username }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $score->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>