<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>{{ $topic->title }}</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <a href="/">Terug naar forum</a>

    <h1>{{ $topic->title }}</h1>

    <p>{{ $topic->content }}</p>

    <small>Geplaatst door {{ $topic->author }}</small>

    <hr>

    <h2>Reacties</h2>

    @foreach($topic->replies as $reply)

        <div class="topic">
            <strong>{{ $reply->author }}</strong>
            <p>{{ $reply->content }}</p>
        </div>

    @endforeach

    <h2>Reageren</h2>

    <form method="POST" action="/topic/{{ $topic->id }}/reply">
        @csrf

        <input name="author" placeholder="Je naam" required>

        <textarea name="content" placeholder="Je reactie..." required></textarea>

        <button type="submit">Reageren</button>
    </form>

</div>

</body>
</html>