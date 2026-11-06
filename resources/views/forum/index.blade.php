<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Simple Forum</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Simple Forum</h1>
    <p>Welkom op het forum!</p>

    <a href="/create" class="button">Nieuw onderwerp</a>

    <h2>Onderwerpen</h2>

    @forelse($topics as $topic)

        <div class="topic">
            <h3>
                <a href="/topic/{{ $topic->id }}">
                    {{ $topic->title }}
                </a>
            </h3>

            <p>{{ $topic->content }}</p>

            <small>Geplaatst door {{ $topic->author }}</small>
        </div>

    @empty

        <p>Er zijn nog geen onderwerpen geplaatst.</p>

    @endforelse

</div>

</body>
</html>