<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
    <link href="/bower_resources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
</head>
<body>

@yield('content')

<!-- Scripts -->
<script src="/bower_resources/jquery/dist/jquery.min.js"></script>
<script src="/bower_resources/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>

</body>
</html>