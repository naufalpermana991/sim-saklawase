<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Projects</title>
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    @include('includes.navbar')

    <!--section1-->
    <div class="container mb-3">
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Edit Project</h3>
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt=""
                            class="btn-icon me-3" />Save
                        Projects
                    </button>
                </div>
                <section class="card-section mt-5">
                    <div class="row">
                        <div class="col-md-7 offset-md-2">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="project_name" class="form-label">Project Name</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Project Name" name="project_name"
                                            value="{{ old('project_name', $project->project_name) }}" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="wo_number" class="form-label">Work Order Number</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Work Order Number" aria-label="Last name" name="wo_number"
                                            value="{{ old('wo_number', $project->wo_number) }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5"></div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="cost_center" class="form-label">Cost Center</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Cost Center" name="cost_center"
                                            value="{{ old('cost_center', $project->cost_center) }}" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Location" name="location"
                                            value="{{ old('location', $project->location) }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5"></div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="project_value" class="form-label">Project Value</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Project Value " name="project_value"
                                            value="{{ old('project_value', $project->project_value) }}" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="initial" class="form-label">Initial Project</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Initial Project" aria-label="Last name" name="initial_project"
                                            value="{{ old('initial_project', $project->initial_project) }}" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="initial" class="form-label">Initial Project</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Customer Name" aria-label="Last name" name="customer"
                                            value="{{ old('customer', $project->customer) }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
        </section>
    </div>
    </div>
    <!--end-section1-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
