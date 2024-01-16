<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0" />
    <title>Create Planning Task</title>
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    @include('includes.navbar')

    <!--section1-->
    <div class="container mb-3">
        <form action="{{ route('mop.store') }}" method="post">
            @csrf
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Add Man of Power</h3>
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt=""
                            class="btn-icon me-3" />Save
                        Man of Power
                    </button>
                </div>
            </div>
            <!--general-task-->
            <div class="mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        {{-- <div class="row">
                            <div class="col">
                                <label for="task_name" class="form-label">Planning Task</label>
                                <input type="text" class="form-control" name="task_name"
                                    placeholder="Enter Planning Task" />
                            </div>
                            <div class="col">
                                <label for="project_name" class="form-label">Project Name</label>
                                <input type="text" class="form-control" name="project_name"
                                    placeholder="Enter Project Name" />
                            </div>
                        </div> --}}
                        <h5 class="my-4">Add Workers</h5>
                        <div class="row">
                            <div class="col">
                                <label for="worker_name1" class="form-label">Worker 1 </label>
                                <input type="text" class="form-control" name="worker_name1"
                                    placeholder="Enter Worker 1" />
                            </div>
                            <div class="col">
                                <label for="worker_name2" class="form-label">Worker 2</label>
                                <input type="text" class="form-control" name="worker_name2"
                                    placeholder="Enter Worker 2" />
                            </div>
                        </div>
                        <div class="mt-4"></div>
                        <div class="row">
                            <div class="col">
                                <label for="worker_name3" class="form-label">Worker 3 </label>
                                <input type="text" class="form-control" name="worker_name3"
                                    placeholder="Enter Worker 3" />
                            </div>
                            <div class="col">
                                <label for="worker_name4" class="form-label">Worker 4</label>
                                <input type="text" class="form-control" name="worker_name4"
                                    placeholder="Enter Worker 4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-of-general-task-->
        </form>
    </div>
    <!--end-of-section1-->



</body>

</html>
