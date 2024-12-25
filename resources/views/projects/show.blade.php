@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: {{url("public/img/breadcrumbs-bg.jpg")}};">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Projelerimiz</h2>

        </div>
    </div><!-- End Breadcrumbs -->
    <div class="project-detail py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="project-item">
                        <img src="{{ asset( $project->image_path) }}" alt="{{ $project->title }}" class="img-fluid rounded" style="width: 100%; height: auto;">
                        <div class="project-info p-3">
                            <h3 class="project-title">{{ $project->title }}</h3>
                            <p class="project-description">{{ $project->description }}</p>
                            <a href="{{ route('projects.index') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" style="color: var(--color-primary)">Geri</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

