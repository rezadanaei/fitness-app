@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
        <div class="mb-4">
            <h5 class="font-weight-bold">ویرایش کاربر</h5>
        </div>
        <hr>
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="name">نام</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{ $user->name }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="last_name">نام خانوادگی</label>
                    <input class="form-control" id="last_name" name="last_name" type="text" value="{{ $user->last_name }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="email">ایمیل</label>
                    <input class="form-control" id="email" name="email" type="email" value="{{ $user->email }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="password">پسورد</label>
                    <input class="form-control" id="password" name="password" type="password">
                </div>
                <div class="form-group col-md-3">
                    <label for="role">نوع کاربر</label>
                    <select class="form-control" id="role" name="role">
                        <option value="coach">مربی</option>
                        <option value="student">شاگرد</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="phone">شماره تلفن</label>
                    <input class="form-control" id="phone" name="phone" type="text" value="{{ $user->phone }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kodemeli">کدملی</label>
                    <input class="form-control" id="kodemeli" name="kodemeli" type="text" value="{{ $user->kodemeli }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="weight">وزن</label>
                    <input class="form-control" id="weight" name="weight" type="text" value="{{ $user->weight }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="height">قد</label>
                    <input class="form-control" id="height" name="height" type="text" value="{{ $user->height }}">
                </div>
            </div>
            <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
        </form>
    </div>
</div>
@endsection
