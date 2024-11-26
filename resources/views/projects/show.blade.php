@extends('layouts.app')

@section('content')
    <div class="project-detail py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="project-item">
                        <img src="{{ asset( $project->image_path) }}" alt="{{ $project->title }}" class="img-fluid rounded">
                        <div class="project-info p-3">
                            <h3 class="project-title">{{ $project->title }}</h3>
                            <p class="project-description">{{ $project->description }}</p>
                            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Geri</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

