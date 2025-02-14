<link rel="stylesheet" href="/homestyles/Hstyles.css">
@extends('layouts.app')
@include('home.layout.header')
@section('content')
<body style="background-image:url('{{asset('homestyles/assets/Background.jpg')}}');padding-top: 50px;">
    <div  class="container py-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach($videos as $video)
    <div class="col">
        <div class="card shadow-sm rounded overflow-hidden">
            <div class="video-container position-relative">
                <video class="card-img-top" width="100%" height="auto" src="{{ asset('storage/' . $video->file_path) }}" controls>
                </video>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">{{ $video->title }}</h5>
            </div>
        </div>
    </div>
@endforeach

        </div>
    </div>
</body>
    
@endsection

@push('styles')
    <style>
        
        .video-container {
            position: relative;
            padding-top: 56.25%; 
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 1rem;
            }
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 1.25rem;
            }
        }
    </style>
@endpush
