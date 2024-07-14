@extends('layouts.welcome')

@section('content')
    <!--section1-->
    <form id="delete-form" action="{{ route('projects.deleteMultiple') }}" method="POST">
        @csrf
        <div class="container mb-3">
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Projects</h3>
                    <div class="cta">
                        <a href="projects/create" class="btn btn-primary py-2 px-4">
                            <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt=""
                                class="btn-icon me-3" />Add
                            Projects
                        </a>
                        <button type="submit" id="confirm-delete" class="btn btn-outline-primary-delete py-2 px-4 ms-3">
                            <img src="{{ asset('frontend/images/trash-2.svg') }}" alt=""
                                class="btn-icon me-3" />Delete
                            Projects
                        </button>
                    </div>
                </div>
                <section class="card-section mt-5 d-flex flex-row flex-wrap">
                    @forelse($project as $projects)
                        <div class="d-flex align-items-start mb-3">
                            <input type="checkbox" name="ids[]" value="{{ $projects->id }}"
                                class="checkbox-item me-2 hidden">
                            <div class="card border-0" style="width: 18rem">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3">Project - {{ $projects->initial_project }}</h5>
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
                                                <a href="{{ route('projects.show', $projects->slug) }}"
                                                    class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger text-center mt-4">
                            <i data-feather="x" class="me-3"></i>Data Kosong
                        </div>
                    @endforelse
                </section>
    </form>

    <script>
        document.getElementById('delete-button').addEventListener('click', function() {
            // Show checkboxes and action buttons
            const checkboxes = document.querySelectorAll('.checkbox-item');
            checkboxes.forEach(checkbox => checkbox.classList.remove('hidden'));
            const actionButtons = document.getElementById('action-buttons').querySelectorAll('button');
            actionButtons.forEach(button => button.classList.remove('hidden'));
        });

        document.getElementById('cancel-delete').addEventListener('click', function() {
            // Hide checkboxes and action buttons
            const checkboxes = document.querySelectorAll('.checkbox-item');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
                checkbox.classList.add('hidden');
            });
            const actionButtons = document.getElementById('action-buttons').querySelectorAll('button');
            actionButtons.forEach(button => button.classList.add('hidden'));
        });
    </script>
@endsection
