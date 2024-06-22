@extends('profile.master')
@section('content')
    <div class="container">
        @if ($user->role == 'student')
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
                        @foreach ($trainingPrograms as $trainingProgram)
                            <tr>
                                <td>{{ verta($trainingProgram->date)->formatWord('l dS F') }}</td>
                                <td>{{ $trainingProgram->train_number }}</td>
                                <td>{{ $trainingProgram->train_title }}</td>
                                <td><label><input type="checkbox" onclick="toggleCompleted(this)"></label></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    <div class="right">
        <div class="navbar">
            <button onclick="window.location.href='{{ route('profile.edit') }}'" class="nav-button">جزئیات
                پروفایل</button>
            <button onclick="window.location.href='{{ route('profile.show') }}'" class="nav-button active">تمرین‌ها</button>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-button">خروج</button>
            </form>
        </div>
    </div>
    </div>
@endsection
