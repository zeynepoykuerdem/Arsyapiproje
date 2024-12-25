@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: {{url("public/img/breadcrumbs-bg.jpg")}};">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Projelerimiz</h2>
            <ol>
                <li><a href="{{url("/")}}">AnaSayfa</a></li>
                <li>Projelerimiz</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <div class="projects-gallery py-5">
        <div class="container">
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

