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
        <form action="{{ route('actual.store') }}" method="POST">
            @csrf
            <!-- Input untuk project_id -->
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Add Actual Task</h3>
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt=""
                            class="btn-icon me-3" />Save
                        Actual Task
                    </button>
                </div>
            </div>

            <!--form-->
            <div class="mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <!-- Main Task Input -->
                        <div class="mb-3">
                            <label for="task_name" class="form-label">Main Task</label>
                            <input type="text" class="form-control" name="task_name"
                                placeholder="Enter your main task" />
                        </div>

                        <!--volume-->
                        <div class="mt-4">
                            <div class="col">
                                <label for="start_date" class="form-label">Date Started</label>
                                <input type="date" class="form-control" name="start_date" />
                            </div>
                        </div>

                        <!-- Date Group Input -->
                        <div class="mt-4">
                            <div class="row">
                                <div class="col">
                                    <label for="activities" class="form-label">Activities</label>
                                    <input type="text" class="form-control" name="activities"
                                        placeholder="Enter Your Activities" />
                                </div>
                                <div class="col">
                                    <label for="results" class="form-label">Results</label>
                                    <input type="text" class="form-control" name="results"
                                        placeholder="Enter Your Result" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-form-->
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        new Vue({
            el: "#app",
            data: {
                userChoice: "no", // Default: No
                subTaskValue: "",
            },
        });
    </script>

</body>

</html>
