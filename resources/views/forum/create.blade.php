<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuw onderwerp</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Nieuw onderwerp</h1>

    <form method="POST" action="/create">
        @csrf

        <input
            type="text"
            name="author"
            placeholder="Je naam"
            required
        >

        <input
            type="text"
            name="title"
            placeholder="Titel"
            required
        >

        <textarea
            name="content"
            placeholder="Je bericht..."
            required
        ></textarea>

        <button type="submit">Plaatsen</button>
    </form>

    <a href="/">Terug naar forum</a>

</div>

</body>
</html>