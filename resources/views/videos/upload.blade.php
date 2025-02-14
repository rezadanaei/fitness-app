@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow-lg rounded-4 p-4">
                    <h2 class="text-center text-primary mb-4">Upload Your Video</h2>

                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label fs-5">Video Title</label>
                            <input type="text" name="title" class="form-control p-3" id="title" placeholder="Enter video title" required>
                        </div>

                        <div class="mb-3">
                            <label for="video" class="form-label fs-5">Choose Video File</label>
                            <input type="file" name="video" class="form-control p-3" id="video" accept="video/*" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 fs-5">Upload Video</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #f1f5f9;
        }

        .card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
            transform: translateY(-2px);
        }

        .alert {
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
        }

        .container {
            margin-top: 50px;
        }
    </style>
@endsection
