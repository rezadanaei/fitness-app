@extends('profile.master')
@section('content')
<div class="container">
    <div class="left">
        <div class="header">
            <a href="Home.html">
                <img src="/homestyles/assets/Logo.png" alt="لوگو" class="header-logo">
            </a>
            <h1>ویرایش پروفایل</h1>
            <img src="/homestyles/assets/profile.png" alt="تصویر پروفایل" class="header-img">
        </div>
        <div class="profile-edit">
            <form class="card" action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="column">
                        <label for="last_name">نام خانوادگی</label>
                        <input type="text" id="last_name" name="last_name" placeholder="نام خانوادگی" dir="rtl" value="{{ $user->last_name }}">
                    </div>
                    <div class="column">
                        <label for="name">نام</label>
                        <input type="text" id="name" name="name" placeholder="نام" dir="rtl" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="kodemeli">کد ملی</label>
                        <input type="text" id="kodemeli" name="kodemeli" placeholder="کد ملی" dir="rtl" value="{{ $user->kodemeli }}">
                    </div>
                    <div class="column">
                        <label for="phone">شماره تلفن</label>
                        <input type="text" id="phone" name="phone" placeholder="شماره تلفن" dir="rtl" value="{{ $user->phone }}">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="height">قد</label>
                        <input value="{{ $user->height }}" type="text" id="height" name="height" placeholder="قد" dir="rtl">
                    </div>
                    <div class="column">
                        <label for="weight">وزن</label>
                        <input value="{{ $user->weight }}" type="text" id="weight" name="weight" placeholder="وزن" dir="rtl">
                    </div>
                </div>
                <input type="submit" value="ارسال">
            </form>
        </div>
    </div>
    <div class="right">
        <div class="navbar">
            <a onclick="window.location.href='{{ route('profile.edit') }}'" class="nav-button active">جزئیات پروفایل</a>
            <a onclick="window.location.href='{{ route('profile.show') }}'" class="nav-button">بازگشت به تمرین‌ها</a>
        </div>
    </div>
</div>
@endsection
