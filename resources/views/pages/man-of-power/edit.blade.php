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
        <form action="{{ route('mop.update', $manOfPower->id) }}" method="post">
            @csrf
            @method('PUT')
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
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="planning_id" class="form-label">Task Name</label>
                                    <select id="planning-dropdown" name="planning_id" class="form-select">
                                        <option value="">-- Select Task --</option>
                                        @foreach ($plannings as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $manOfPower->planning_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->task_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="start_date" class="form-label">Date</label>
                                    <select id="date-dropdown" name="start_date" class="form-select">
                                        <option value="">-- Select Started Date --</option>
                                        @foreach ($plannings as $item)
                                            <option value="{{ $item->start_date }}"
                                                {{ $manOfPower->start_date == $item->start_date ? 'selected' : '' }}>
                                                {{ $item->start_date }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5"></div>
                        <div class="row">
                            <div class="col">
                                <label for="worker_name1" class="form-label">Worker 1</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror
                                    name="worker_name1" placeholder="Enter Worker 1 name"
                                    value={{ old('worker_name1', $manOfPower->worker_name1) }} />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="worker_responsibility1" class="form-label">Responsibility</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror
                                    name="worker_responsibility1" placeholder="Enter Worker 1 responsibility"
                                    value={{ old('worker_responsibility1', $manOfPower->worker_responsibility1) }} />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4"></div>
                        <div class="row">
                            <div class="col">
                                <label for="worker_name2" class="form-label">Worker 2</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror
                                    name="worker_name2" placeholder="Enter Worker 2 name"
                                    value={{ old('worker_name2', $manOfPower->worker_name2) }} />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="worker_responsibility2" class="form-label">Responsibility</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror
                                    name="worker_responsibility2" placeholder="Enter Worker 2 responsibility"
                                    value={{ old('worker_responsibility2', $manOfPower->worker_responsibility2) }} />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4"></div>
                        <div class="row">
                            <div class="col">
                                <label for="worker_name3" class="form-label">Worker 3</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror
                                    name="worker_name3" placeholder="Enter Worker 3 name"
                                    value={{ old('worker_name3', $manOfPower->worker_name3) }} />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="worker_responsibility3" class="form-label">Responsibility</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror
                                    name="worker_responsibility3" placeholder="Enter Worker 3 responsibility"
                                    value={{ old('worker_responsibility3', $manOfPower->worker_responsibility3) }} />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4"></div>
                        <div class="row">
                            <div class="col">
                                <label for="worker_name4" class="form-label">Worker 4</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror
                                    name="worker_name4" placeholder="Enter Worker 4 name"
                                    value={{ old('worker_name4', $manOfPower->worker_name4) }} />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="worker_responsibility4" class="form-label">Responsibility</label>
                                <input type="text" class="form-control" @error('title') is-invalid @enderror
                                    name="worker_responsibility4" placeholder="Enter Worker 4 responsibility"
                                    value={{ old('worker_responsibility4', $manOfPower->worker_responsibility4) }} />
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
            <!--end-of-general-task-->
        </form>
    </div>
    <!--end-of-section1-->



</body>

</html>
