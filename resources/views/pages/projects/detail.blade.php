@extends('layouts.welcome')

@section('content')
    @include('includes.section1')

    <!--end-section1-->

    <!--nav-tabs-->
    @include('includes.nav-tabs')
    <!--end-nav-tabs-->

    <hr>


    <!--section1-->
    <div class="container">

    </div>
    <!--end-section1-->

    <!--section2-->

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
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Project Value</p>
                    <h5>{{ $project->project_value }}</h5>
                </div>
            </div>
        </div>
    </div>
    <!--endsection2-->
@endsection
