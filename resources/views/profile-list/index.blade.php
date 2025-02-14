<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معرفی مربیان بدنسازی</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background: #333;
            color: white;
            padding: 20px;
            font-size: 24px;
        }
        .coaches {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px;
        }
        .coach-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 15px;
            padding: 20px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s;
        }
        .coach-card:hover {
            transform: scale(1.05);
        }
        .coach-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .coach-card a {
            background: #ff5733;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
        }
        .coach-card a:hover {
            background: #c13c24;
        }
    </style>
</head>
<body>
    <header>
        <h1><i class="fas fa-dumbbell"></i> مربیان حرفه‌ای بدنسازی</h1>
    </header>
    <section class="coaches">
        <div class="coach-card">
            <img src="{{asset('/homestyles/assets/trainer2.png')}}" alt="مربی 1">
            <h2> هادی عزیزی</h2>
            <p><i class="fas fa-user"></i> سن: 35 سال</p>
            <p><i class="fas fa-ruler"></i> قد: 180 سانتی‌متر</p>
            <p><i class="fas fa-weight"></i> وزن: 85 کیلوگرم</p>
            <p><i class="fas fa-briefcase"></i> سابقه کاری: 10 سال</p>
            <p><i class="fas fa-dumbbell"></i> تخصص: فیتنس و بدنسازی حرفه‌ای</p>
            <a href="{{asset('coach2')}}">مشاهده جزئیات</a>
        </div>
        <div class="coach-card">
        <img src="{{asset('/homestyles/assets/trainer1.png')}}" alt="مربی 2">
            <h2>بهمن هاشمی</h2>
            <p><i class="fas fa-user"></i> سن: 35 سال</p>
            <p><i class="fas fa-ruler"></i> قد: 180 سانتی‌متر</p>
            <p><i class="fas fa-weight"></i> وزن: 85 کیلوگرم</p>
            <p><i class="fas fa-briefcase"></i> سابقه کاری: 10 سال</p>
            <p><i class="fas fa-dumbbell"></i> تخصص: فیتنس و بدنسازی حرفه‌ای</p>
            <a href="{{asset('coach3')}}">مشاهده جزئیات</a>
        </div>
        <div class="coach-card">
        <img src="{{asset('/homestyles/assets/trainer3.png')}}" alt="مربی 3">
            <h2>سامان نژادی</h2>
            <p><i class="fas fa-user"></i> سن: 35 سال</p>
            <p><i class="fas fa-ruler"></i> قد: 180 سانتی‌متر</p>
            <p><i class="fas fa-weight"></i> وزن: 65 کیلوگرم</p>
            <p><i class="fas fa-briefcase"></i> سابقه کاری: 10 سال</p>
            <p><i class="fas fa-dumbbell"></i> تخصص: فیتنس و بدنسازی حرفه‌ای</p>
            <a href="{{asset('coach1')}}">مشاهده جزئیات</a>
        </div>
    </section>
</body>
</html>
