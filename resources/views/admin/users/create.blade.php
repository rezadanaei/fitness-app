@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
        <div class="mb-4">
            <h5 class="font-weight-bold">ایجاد کاربر</h5>
        </div>
        <hr>
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="name">نام *</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="last_name">نام خانوادگی *</label>
                    <input class="form-control" id="last_name" name="last_name" type="text" value="{{ old('last_name') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="email">ایمیل *</label>
                    <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="password">پسورد *</label>
                    <input class="form-control" id="password" name="password" type="password" value="{{ old('password') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="role">نوع کاربر *</label>
                    <select class="form-control" id="role" name="role">
                        <option value="coach">مربی</option>
                        <option value="student">شاگرد</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="phone">شماره تلفن</label>
                    <input class="form-control" id="phone" name="phone" type="text" value="{{ old('phone') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kodemeli">کدملی</label>
                    <input class="form-control" id="kodemeli" name="kodemeli" type="text" value="{{ old('kodemeli') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="weight">وزن</label>
                    <input class="form-control" id="weight" name="weight" type="text" value="{{ old('weight') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="height">قد</label>
                    <input class="form-control" id="height" name="height" type="text" value="{{ old('height') }}">
                </div>
            </div>
            <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
        </form>
    </div>
</div>
@endsection
