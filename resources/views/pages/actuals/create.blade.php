<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0" />
    <title>Create Man of Power Task</title>
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    @include('includes.navbar')

    <hr>
    <!--section1-->
    <div class="container mb-3">
        <form action="{{ route('actuals.store') }}" method="post" enctype="multipart/form-data">
            @csrf
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
            <!--general-task-->
            <div class="mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="planning_id" class="form-label">Days</label>
                                    <input type="number" class="form-control" name="days"
                                        placeholder="Enter Day Period">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="start_date" class="form-label">Task Name</label>
                                    <select id="planning-dropdown" name="planning_id" class="form-select">
                                        <option value="">-- Select Task --</option>
                                        @foreach ($plannings as $item)
                                            <option value="{{ $item->id }}" data-mop="{{ $item->mop }}">
                                                {{ $item->task_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4"></div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="start_date" class="form-label">Date</label>
                                    <select id="date-dropdown" name="start_date" class="form-select date-dropdown">
                                        <option value="">-- Select Started Date --</option>
                                        @foreach ($plannings as $item)
                                            <option value="{{ $item->start_date }}">
                                                {{ $item->start_date }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="activities" class="form-label">Activities</label>
                                    <input type="text" class="form-control" name="activities"
                                        placeholder="Enter Task">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4"></div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="results" class="form-label">Results</label>
                                    <input type="text" class="form-control" name="results"
                                        placeholder="Enter Results">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="img" class="form-label">Image</label>
                            <input class="form-control" type="file" name="image" id="img"
                                onchange="previewImage(event)">
                            <img id="preview-image" src="" alt="Preview image"
                                style="max-width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <!--end-of-general-task-->
        </form>
        @include('includes.script')
</body>

</html>
