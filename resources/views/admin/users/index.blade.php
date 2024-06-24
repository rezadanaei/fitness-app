@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
        <div class="d-flex justify-content-between mb-4">
            <h5 class="font-weight-bold">لیست کاربران ({{ $users->total() }})</h5>
            <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.users.create') }}">
                <i class="fa fa-plus"></i>
                ایجاد کاربر
            </a>
        </div>
        <div>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>ایمیل</th>
                        <th>نوع کاربر</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <th>
                                {{ $users->firstItem() + $key }}
                            </th>
                            <th>
                                {{ $user->name }}
                            </th>
                            <th>
                                {{ $user->last_name }}
                            </th>
                            <th>
                                {{ $user->email }}
                            </th>
                            <th>
                                @if ($user->role == 'coach')
                                <span class="text-success">
                                    مربی
                                </span>
                                @else
                                <span class="text-success">
                                    شاگرد
                                </span>
                                @endif
                            </th>
                            <th>
                                <a class="btn btn-sm btn-outline-success" href="{{ route('admin.users.show', ['user' => $user->id]) }}">نمایش</a>
                                <a class="btn btn-sm btn-outline-info mr-3" href="{{ route('admin.users.edit', ['user' => $user->id]) }}">ویرایش</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{ $users->render() }}
        </div>
    </div>
</div>
@endsection
