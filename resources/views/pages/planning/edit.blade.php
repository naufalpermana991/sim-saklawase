<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0" />
    <title>Edit Planning</title>
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    @include('includes.navbar')
    @include('includes.script')

    <!--section1-->
    <div class="container mb-3">
        <form action="{{ route('planning.update', $planning->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Update Planning Task</h3>
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt=""
                            class="btn-icon me-3" />Save
                        Planning Task
                    </button>
                </div>
            </div>

            <!--form-->
            <div class="mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form action="{{ route('planning.update', $planning->id) }}">
                            <!-- Main Task Input -->
                            <div class="mb-3">
                                <label for="task_name" class="form-label">Main Task</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="task_name" placeholder="Enter your main task"
                                    value="{{ old('task_name', $planning->task_name) }}" />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!--Sub Task Choice-->
                            <div class="my-5" id="app">
                                <div class="d-flex justify-content-between">
                                    <label for="choice">Is Your Main Task has Sub Task?
                                    </label>
                                    <section>
                                        <input type="radio" v-model="userChoice" value="yes" />
                                        Yes
                                    </section>
                                    <section>
                                        <input type="radio" v-model="userChoice" value="no" />
                                        No
                                    </section>
                                </div>
                                <!--If User Say Yes, Then Input Your Sub Task-->
                                <transition name="form-animation">
                                    <div v-if="userChoice== 'yes'" key="yes">
                                        <div class="mt-4"></div>
                                        <form>
                                            <label for="sub_task">Sub Task</label>
                                            <input type="text"
                                                class="form-control @error('title') is-invalid @enderror"
                                                name="sub_task" placeholder="Enter Sub Task" v-model="subTaskValue"
                                                value="{{ old('sub_task', $planning->sub_task) }}" />
                                            @error('title')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </form>
                                        <div class="mt-5"></div>
                                    </div>
                                </transition>
                                <!--end-->
                            </div>
                            <!--end-->

                            <!--volume-->
                            <div class="mt-4">
                                <div class="col">
                                    <label for="volume" class="form-label">Volume</label>
                                    <input type="text" class="form-control" name="volume" placeholder="Enter Volume"
                                        value="{{ old('volume', $planning->volume) }}" />
                                </div>
                            </div>

                            <!--unit-->
                            <div class="mt-4">
                                <div class="col">
                                    <label for="unit">Unit</label>
                                    <select name="unit" id="unit" v-model="unit">
                                        <option value="m2">m2</option>
                                        <option value="m1">m1</option>
                                        <option value="kg">Kg</option>
                                        <option value="lbr">Lbr</option>
                                        <option value="pcs">Pcs</option>
                                    </select>
                                </div>
                            </div>
                            <!--date-unit-->

                            <!-- Date Group Input -->
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="start_date" class="form-label">Date Started</label>
                                        <input type="date" class="form-control @error('title') is-invalid @enderror"
                                            name="start_date" placeholder="Enter Date Started"
                                            value="{{ old('start_date', $planning->start_date) }}" />
                                        @error('title')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="end_date" class="form-label">Date Finished</label>
                                        <input type="date" class="form-control @error('title') is-invalid @enderror"
                                            name="end_date" placeholder="Enter Date Finished"
                                            value="{{ old('end_date', $planning->end_date) }}" />
                                        @error('title')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="duration" class="form-label">Duration</label>
                                        <input type="number" class="form-control" name="duration"
                                            placeholder="Enter Duration" id="edit_duration"
                                            value="{{ old('duration', $planning->duration) }}" />
                                    </div>
                                </div>
                            </div>

                            <!--Man of Power Planning-Input-->
                            <div class="mt-4">
                                <label for="mop" class="form-label">How Many Person (MOP) Want to be Assigned
                                    to your Project?</label>
                                <input type="number"class="form-control @error('title') is-invalid @enderror"
                                    name="mop" placeholder="Enter your person's number"
                                    value="{{ old('mop', $planning->mop) }}" />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!--Percentage-Input-->
                            <div class="mt-4">
                                <label for="percentage" class="form-label">Percentage Progress</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="percentage" placeholder="Enter your project persentage"
                                    value="{{ old('percentage', $planning->percentage) }}" />
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end-form-->
        </form>
    </div>
    <!--end-section1-->



</body>

</html>
