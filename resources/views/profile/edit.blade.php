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
                        <input value="{{ $user->kodemeli }}" type="text" id="kodemeli" name="kodemeli" placeholder="کد ملی" dir="rtl" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                    </div>
                    <div class="column">
                        <label for="phone">شماره تلفن</label>
                        <input value="{{ $user->phone }}" type="text" id="phone" name="phone" placeholder="شماره تلفن" dir="rtl" maxlength="11" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="height">قد</label>
                        <input value="{{ $user->height }}" type="number" id="height" name="height" min="130" max="210" placeholder="قد" dir="rtl">
                    </div>
                    <div class="column">
                        <label for="weight">وزن</label>
                        <input value="{{ $user->weight }}" type="number" id="weight" name="weight" min="40" max="140" placeholder="وزن" dir="rtl">
                    </div>
                </div>
                <input type="submit" value="ارسال">
            </form>
        </div>
    </div>
    <div class="right">
        <div class="navbar">
            <button onclick="window.location.href='information.html'" class="nav-button active">جزئیات پروفایل</button>
            <button onclick="window.location.href='profile.html'" class="nav-button">بازگشت به تمرین‌ها</button>
        </div>
    </div>
</div>
@endsection
