<html>
<head>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
        .gradient-custom {

        background: #cba011;

        background: -webkit-linear-gradient(to right, rgb(255, 216, 77), rgb(254, 255, 215));

        background: linear-gradient(to right,rgb(255, 216, 77), rgb(254, 255, 215));
        }

        body {
            background: url({{ asset('Landing Page.png') }});
            background-size: cover;
        }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    hi
    @include('sweetalert::alert')
</body>
</html>