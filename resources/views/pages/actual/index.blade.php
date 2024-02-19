@extends('layouts.welcome')

@section('content')
    <!--section1-->

    @include('includes.section1')

    <!--end-section1-->

    <!--nav-tabs-->
    @include('includes.nav-tabs')
    <!--end-nav-tabs-->

    <hr>

    <!--section1-->
    <div class="container">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <h5 class="align-self-center">Actual</h5>
                <div class="right-div">
                    <a href="{{ route('actual.create', $project->id) }}" class="btn btn-outline-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt="" class="btn-icon me-3" />Add
                        Actual
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end-section1-->

    <!--section2-->
    <div class="container mt-4">
        <section class="card-section d-flex flex-row ">
            {{-- @forelse($project as $projects) --}}
            <div class="card border-0  me-3" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3">Project 1 </h5>
                    <div class="container location-wrapper">
                        <div class="row mt-4">
                            <div class="col-md-2 align-self-center">
                                <img src="{{ asset('frontend/images/map-pin.png') }}" alt="" />
                            </div>
                            <div class="col align-self-center">
                                <p class="card-text">Location</p>
                                <h6 class="mt-0">Tes</h6>
                            </div>
                        </div>
                        <div class="mt-4"></div>
                        <div class="row">
                            <div class="col-md-2 align-self-center">
                                <img src="{{ asset('frontend/images/briefcase.png') }}" alt="" />
                            </div>
                            <div class="col align-self-center">
                                <p class="card-text">Project Name</p>
                                <h6 class="mt-0">Tes</h6>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!--end-section2-->

    <!--section3-->
    <div class="container">
        <div class="my-5">
            <div class="title-section-1 d-flex justify-content-between">
                <h5 class="align-self-center">Actual Timeline</h5>
            </div>
        </div>
    </div>
    <!--end-section3-->
@endsection
