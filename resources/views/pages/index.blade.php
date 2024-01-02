@extends('layouts.welcome')

@section('content')
    <!--section1-->
    <div class="container mb-3">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <h3>Project</h3>
                <a href="projects/create" class="btn btn-primary py-2 px-4">
                    <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt="" class="btn-icon me-3" />Add
                    Projects
                </a>
            </div>
            <section class="card-section mt-5 d-flex flex-row ">
                @forelse($project as $projects)
                    <div class="card border-0  me-3" style="width: 18rem">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-3">Project 1 - {{ $projects->initial_project }}</h5>
                            <div class="container location-wrapper">
                                <div class="row mt-4">
                                    <div class="col-md-2 align-self-center">
                                        <img src="{{ asset('frontend/images/map-pin.png') }}" alt="" />
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="card-text">Location</p>
                                        <h6 class="mt-0">{{ $projects->location }}</h6>
                                    </div>
                                </div>
                                <div class="mt-4"></div>
                                <div class="row">
                                    <div class="col-md-2 align-self-center">
                                        <img src="{{ asset('frontend/images/briefcase.png') }}" alt="" />
                                    </div>
                                    <div class="col align-self-center">
                                        <p class="card-text">Project Name</p>
                                        <h6 class="mt-0">{{ $projects->project_name }}</h6>
                                        <a href="{{ route('projects.show', $projects->slug) }}" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger text-center mt-4">
                        <i data-feather="x" class="me-3"></i>Data Kosong
                    </div>
            </section>
        </div>
    </div>
    @endforelse
    <!--end-section1-->
@endsection
