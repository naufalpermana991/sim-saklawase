<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0" />
    <title>Edit Man of Power Task</title>
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
                    <h3>Edit Man of Power</h3>
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
                                                {{ $item->id == $manOfPower->planning_id ? 'selected' : '' }}>
                                                {{ $item->task_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Date -->
                                <div class="form-group">
                                    <label for="start_date" class="form-label">Date</label>
                                    <select id="date-dropdown" name="start_date" class="form-select">
                                        <option value="">-- Select Started Date --</option>
                                        @foreach ($plannings as $item)
                                            <option value="{{ $item->start_date }}"
                                                {{ $item->start_date == $manOfPower->start_date ? 'selected' : '' }}>
                                                {{ $item->start_date }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4"></div>
                        <!-- Worker Name and Responsibility -->
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="row">
                                <div class="col my-2">
                                    <div class="form-group worker-group" data-worker="{{ $i }}">
                                        <label for="worker_name{{ $i }}" class="form-label">Worker
                                            {{ $i }}</label>
                                        <input type="text" class="form-control"
                                            name="worker_name{{ $i }}"
                                            placeholder="Enter Worker {{ $i }} name"
                                            value="{{ $manOfPower->{'worker_name' . $i} }}" />
                                    </div>
                                </div>
                                <div class="col my-2">
                                    <div class="form-group worker-group" data-responsibility="{{ $i }}">
                                        <label for="worker_responsibility{{ $i }}"
                                            class="form-label">Responsibility</label>
                                        <input type="text" class="form-control"
                                            name="worker_responsibility{{ $i }}"
                                            placeholder="Enter Worker {{ $i }} responsibility"
                                            value="{{ $manOfPower->{'worker_responsibility' . $i} }}" />
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <!--end-of-general-task-->
        </form>
    </div>
    <!--end-of-section1-->
    @include('includes.script')
</body>


</html>
