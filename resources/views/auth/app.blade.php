<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Far & Beyond</title>
    <link href="css/custom_style.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
    <style>
        .font-medium.text-red-600 {
            padding: 5px;
            font-family: cursive;
            font-weight: bolder;
            color: red;
        }

        ul.mt-3.list-disc.list-inside.text-sm.text-red-600 {
            list-style: none;
            color: red;
            background: beige;
        }

        .container-fluid.h-custom {
            background: #fffdfa;
        }
    </style>
    @yield('page-css')
</head>

<body>
    @yield('page-content')
</body>
<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>

</html>