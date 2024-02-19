<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0" />
    <title>Edit Actual</title>
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    @include('includes.navbar')

    <!--section1-->
    <div class="container mb-3">
        <form action="{{ route('actual.update', $actual->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Edit Actual</h3>
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt=""
                            class="btn-icon me-3" />Edit Actual
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
                                placeholder="Enter your main task" value={{ old('task_name', $actual->task_name) }} />
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!--volume-->
                        <div class="mt-4">
                            <div class="col">
                                <label for="start_date" class="form-label">Date Started</label>
                                <input type="date" class="form-control" name="start_date"
                                    value={{ old('start_date', $actual->start_date) }} />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Date Group Input -->
                        <div class="mt-4">
                            <div class="row">
                                <div class="col">
                                    <label for="activities" class="form-label">Activities</label>
                                    <input type="text" class="form-control" name="activities"
                                        placeholder="Enter Your Activities"
                                        value={{ old('activities', $actual->activities) }} />
                                    @error('title')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="results" class="form-label">Results</label>
                                    <input type="text" class="form-control" name="results"
                                        placeholder="Enter Your Result" value={{ old('results', $actual->results) }} />
                                    @error('title')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-form-->
        </form>
    </div>

</html>
