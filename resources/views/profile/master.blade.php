<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمرین‌ها</title>
    <link rel="stylesheet" href="/homestyles/Pstyles.css">
</head>

<body class="missions-page">
    <div class="overlay">
        @yield('content')
    </div>
    <script>
        function toggleCompleted(checkbox) {
            if (checkbox.checked) {
                checkbox.parentElement.parentElement.parentElement.style.backgroundColor = '#d3d3d3';
                checkbox.parentElement.parentElement.parentElement.style.textDecoration = 'line-through';
            } else {
                checkbox.parentElement.parentElement.parentElement.style.backgroundColor = '';
                checkbox.parentElement.parentElement.parentElement.style.textDecoration = 'none';
            }
        }
    </script>

    @include('sweetalert::alert')

</body>

</html>
