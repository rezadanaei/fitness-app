@extends('profile.auth.app-login')
@section('content')

    <body class="teacher">
        <div class="container">
            <a href="/"><img src="/homestyles/assets/Logo.png" alt="Logo" class="logo"></a>
            <div class="form-container register">
                <h1>ثبت نام</h1>

                <form id="registerForm" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-header">
                        <label>
                            <input type="radio" name="role" value="coach" checked> مربی
                        </label>
                        <label>
                            <input type="radio" name="role" value="student"> شاگرد
                        </label>
                    </div>
                    <input type="text" name="name" placeholder="نام">
                    <input type="text" name="last_name" placeholder="نام خانوادگی">
                    <input type="email" name="email" placeholder="ایمیل">
                    <input type="password" name="password" placeholder="رمز عبور">
                    <button type="submit">ثبت نام</button>
                </form>
                <p>قبلاً حساب کاربری دارید؟ <a href="{{ route('login') }}">ورود</a></p>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                // Ensure one of the radio buttons is checked
                const radioButtons = document.querySelectorAll('input[name="role"]');
                radioButtons.forEach(radio => {
                    radio.addEventListener('change', function() {
                        if (this.checked) {
                            document.querySelectorAll('.form-header label').forEach(label => {
                                label.classList.remove('active');
                            });
                            this.parentElement.classList.add('active');
                        }
                    });
                });

                document.getElementById('registerForm').addEventListener('submit', function(event) {
                    const selectedRole = document.querySelector('input[name="role"]:checked');
                    if (!selectedRole) {
                        event.preventDefault();
                        alert('لطفا نقش خود را انتخاب کنید.');
                    }
                });
            });
        </script>
        <style>
            .form-header label {
                cursor: pointer;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-right: 5px;
            }

            .form-header .active {
                background-color: #ff6600;
                color: #fff;
            }
        </style>
    </body>
@endsection
