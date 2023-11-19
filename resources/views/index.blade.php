<!DOCTYPE html>
<html>

<head>
    <title>WordCraft Hub</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('build/assets/main-5ffef9fa.css') }}">
</head>

<body>
    <div class="container">
        <h1>WordCraft Hub</h1>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Word</th>
                    <th>Translation</th>
                    <th>Usage Count</th>
                    <th>Usage %</th>
                </tr>
            </thead>
            <tbody>
                @php
                // Получите слова, отсортированные по убыванию usage_count
                $sortedWords = $words->sortByDesc('usage_count');

                $totalWords = count($sortedWords);
                @endphp

                @foreach($sortedWords as $index => $word)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $word->word }}</td>
                    <td>{{ $word->translation }}</td>
                    <td>{{ $word->usage_count }}</td>
                    <td>{{ number_format(($word->usage_count / $totalWords) / 100, 2) }} %</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>