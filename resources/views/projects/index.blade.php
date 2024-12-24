@extends('layouts.app')

@section('content')
    <div class="projects-gallery py-5">
        <div class="container">
            <h2 class="text-center mb-5">Projelerimiz</h2>
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="project-item">
                            <img src="{{ asset( $project->image_path) }}" alt="{{ $project->title }}" class="img-fluid rounded">
                            <div class="project-info p-3">
                                <h3 class="project-title">{{ $project->title }}</h3>
                                <a href="{{ route('projects.show', $project->id) }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" style="color: var(--color-primary)">Detaylar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pagination justify-content-center" style="color: var(--color-default)">
            {{ $projects->links() }}
        </div>

    </div>
@endsection

