<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/homestyles/Hstyles.css">
</head>
<body>
    @include('home.layout.header')
    @include('home.layout.hero')
    <div id="trainersT" class="section bg-solid content-wrapper">
        @include('home.layout.comments')
        @include('home.layout.coaches')
    </div>
    @include('home.layout.about-us')
    @include('home.layout.footer')
</body>
</html>
