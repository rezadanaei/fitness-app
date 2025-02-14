@extends('profile.master')
@section('content')
    <div class="container">
        <div class="left">
            <div class="header">
                <a href="Home.html">
                    <img src="/homestyles/assets/Logo.png" alt="لوگو" class="header-logo">
                </a>
                <h1>نمایش تمرین‌ها</h1>
                <img src="/homestyles/assets/sports_image.jpg" alt="تصویر ورزشی" class="header-img">
            </div>

            <div class="table-container">
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
                        <!-- @foreach ($trainingPrograms as $trainingProgram)
                            @php
                                $userExercises = auth()->user()->userExercise->exercises ?? [];
                                $isChecked = isset($userExercises[$trainingProgram->id]) ? $userExercises[$trainingProgram->id] : false;
                            @endphp
                            <tr>
                                <td>{{ verta($trainingProgram->date)->formatWord('l dS F') }}</td>
                                <td>{{ $trainingProgram->train_number }}</td>
                                <td>{{ $trainingProgram->train_title }}</td>
                                <td>
                                    <label>
                                        <input type="checkbox" class="exercise-checkbox" 
                                               data-exercise-id="{{ $trainingProgram->id }}" 
                                               {{ $isChecked ? 'checked' : '' }}>
                                    </label>
                                </td>
                            </tr>
                        @endforeach -->

                        
        @foreach([
            ['id' => 1, 'title' => 'شنا سوئدی'],
            ['id' => 2, 'title' => 'دویدن'],
            ['id' => 3, 'title' => 'وزنه‌برداری'],
            ['id' => 4, 'title' => 'یوگا']
        ] as $exercise)
        @php
            $exerciseStatus = isset($exercisesStatus[$exercise['id']]) ? $exercisesStatus[$exercise['id']] : 0;
        @endphp
    
        <tr>
            <td></td>
            <td>۳ ست ۸ تایی</td>
            <td>{{ $exercise['title'] }}</td>
            <td>
                <label>
                    <input type="checkbox" class="exercise-checkbox {{ $exerciseStatus == 1 ? 'true' : '' }}" 
                        data-exercise-id="{{ $exercise['id'] }}" 
                        {{ $exerciseStatus == 1 ? 'checked' : '' }}>
                </label>
            </td>
        </tr>
    @endforeach



                    </tbody>
                </table>
            </div>
        </div>

        <div class="right">
            <div class="navbar">
                <a href="{{ route('profile.edit') }}" class="nav-button" style="text-decoration: none">جزئیات پروفایل</a>
                <a href="{{ route('profile.show') }}" class="nav-button active" style="text-decoration: none">تمرین‌ها</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-button">خروج</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.exercise-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                let exerciseId = this.dataset.exerciseId;
                let completed = this.checked ? 1 : 0;

                fetch("{{ route('exercise.update') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        exercise_id: exerciseId,
                        completed: completed
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log("تمرین به‌روزرسانی شد:", data);
                })
                .catch(error => console.error("خطا در ارسال درخواست:", error));
            });
        });
    </script>
@endsection
