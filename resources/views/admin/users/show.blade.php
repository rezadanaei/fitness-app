@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4">
                <h5 class="font-weight-bold">کاربر : {{ $user->name }}</h5>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-md-3">
                    <label>نام</label>
                    <input class="form-control" type="text" value="{{ $user->name }}" disabled>
                </div>

                <div class="form-group col-md-3">
                    <label>نام خانوادگی</label>
                    <input class="form-control" type="text" value="{{ $user->last_name }}" disabled>
                </div>

                <div class="form-group col-md-3">
                    <label>ایمیل</label>
                    <input class="form-control" type="text" value="{{ $user->email }}" disabled>
                </div>

                <div class="form-group col-md-3">
                    <label>نوع کاربر</label>
                    @if ($user->role == 'coach')
                        <input class="form-control" type="text" value="مربی" disabled>
                    @else
                        <input class="form-control" type="text" value="شاگرد" disabled>
                    @endif
                </div>

                <div class="form-group col-md-3">
                    <label>شماره تلفن</label>
                    <input class="form-control" type="text" value="{{ $user->phone }}" disabled>
                </div>

                <div class="form-group col-md-3">
                    <label>کدملی</label>
                    <input class="form-control" type="text" value="{{ $user->kodemeli }}" disabled>
                </div>

                <div class="form-group col-md-3">
                    <label>وزن</label>
                    <input class="form-control" type="text" value="{{ $user->weight }}" disabled>
                </div>

                <div class="form-group col-md-3">
                    <label>قد</label>
                    <input class="form-control" type="text" value="{{ $user->height }}" disabled>
                </div>

                <div class="form-group col-md-3">
                    <label>تاریخ پیوستن</label>
                    <input class="form-control" type="text" value="{{ verta($user->created_at)->formatJalaliDate() }}"
                        disabled>
                </div>
            </div>
            <a href="{{ route('admin.users.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
        </div>
    </div>
@endsection
