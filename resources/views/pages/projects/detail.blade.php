@extends('layouts.welcome')

@section('content')
    <!--section1-->
    <div class="container mb-3">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <h3>Project {{ $project->initial_project }}</h3>
                <a href="#" class="btn btn-primary py-2 px-4">
                    <img src="{{ asset('frontend/images/settings.png') }}" alt="" class="btn-icon me-3" />Project
                    Settings
                </a>
            </div>
        </div>
    </div>

    <!--end-section1-->

    <!--nav-tabs-->
    @include('includes.nav-tabs')
    <!--end-nav-tabs-->

    <hr>

    <!--section-1-->
    <div id="tabContent" class="container mb-3">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <p class="location-details">
                    {{ $project->location }}
                </p>

                <p class="value-text">
                    <span>Project Value</span> : {{ $project->project_value }}
                </p>
            </div>
        </div>
    </div>

    <!--end-section-1-->

    <!--section2-->
    <div class="container">

    </div>
    <!--end-section2-->

    <!--section3-->

    <div class="container mb-3">
        <div class="row justify-content-between">
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Project Name</p>
                    <h5>{{ $project->project_name }}</h5>
                </div>
            </div>
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Work Order Number</p>
                    <h5>{{ $project->wo_number }}</h5>
                </div>
            </div>
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Cost Center</p>
                    <h5>{{ $project->cost_center }}</h5>
                </div>
            </div>
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Location</p>
                    <h5>{{ $project->location }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
