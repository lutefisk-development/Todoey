<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link href="/css/app.css" rel="stylesheet">
    <title>Todoey</title>
</head>
<body>
    <div id="app">
        <app></app>
    </div>
</body>
<!-- Javascript -->
<script src="{{ mix('js/app.js') }}"></script>
</html>
