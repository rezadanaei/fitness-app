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
        <div class="container">
            <div class="left">
                <div class="header">
                    <a href="Home.html">
                        <img src="/homestyles/assets/Logo.png" alt="لوگو" class="header-logo">
                    </a>
                    <h1>نمایش تمرین‌ها</h1>
                    <img src="/homestyles/assets/sports_image.jpg" alt="تصویر ورزشی" class="header-img">
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>تاریخ اجرا</th>
                            <th>تعداد تمرین‌ها</th>
                            <th>نام تمرین</th>
                            <th>تکمیل شده</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>شنبه 26 خرداد</td>
                            <td>ده بار</td>
                            <td>Barbell Squat حرکت</td>
                            <td><label><input type="checkbox" onclick="toggleCompleted(this)"></label></td>
                        </tr>
                        <tr>
                            <td>شنبه 26 خرداد</td>
                            <td>هشت بار</td>
                            <td>Barbell Step Up حرکت</td>
                            <td><label><input type="checkbox" onclick="toggleCompleted(this)"></label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="right">
                <div class="navbar">
                    <button onclick="window.location.href='information.html'" class="nav-button">جزئیات پروفایل</button>
                    <button onclick="window.location.href='profile.html'" class="nav-button active">تمرین‌ها</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-button">خروج</button>
                    </form>
                </div>
            </div>
        </div>
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
</body>

</html>
