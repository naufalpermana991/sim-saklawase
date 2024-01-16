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
        <form action="{{ route('planning.store') }}" method="post">
            @csrf
            <!-- Input untuk project_id -->

            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Add Planning Task</h3>
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
                        <!-- Main Task Input -->
                        <div class="mb-3">
                            <label for="task_name" class="form-label">Main Task</label>
                            <input type="text" class="form-control" name="task_name"
                                placeholder="Enter your main task" />
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
                                <div v-if="userChoice == 'yes'" key="yes">
                                    <div class="mt-4"></div>
                                    <label for="sub_task">Sub Task</label>
                                    <input type="text" class="form-control" name="sub_task"
                                        placeholder="Enter Sub Task" v-model="subTaskValue" />
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
                                <input type="text" class="form-control" name="volume" placeholder="Enter Volume" />
                            </div>
                        </div>

                        <div class="mt-4" id="app">
                            <enum-form></enum-form>
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
                                <div class="col">
                                    <label for="start_date" class="form-label">Date Started</label>
                                    <input type="date" class="form-control" name="start_date"
                                        placeholder="Enter Date Started" />
                                </div>
                                <div class="col">
                                    <label for="end_date" class="form-label">Date Finished</label>
                                    <input type="date" class="form-control" name="end_date"
                                        placeholder="Enter Date Finished" />
                                </div>
                            </div>
                        </div>

                        <!--Man of Power Planning-Input-->
                        <div class="mt-4">
                            <label for="mop" class="form-label">How Many Person (MOP) Want to be Assigned to your
                                Project?</label>
                            <input type="number" class="form-control" name="mop"
                                placeholder="Enter your person's number" />
                        </div>

                        <!--Percentage-Input-->
                        <div class="mt-4">
                            <label for="percentage" class="form-label">Percentage Progress</label>
                            <input type="text" class="form-control" name="percentage"
                                placeholder="Enter your project percentage" />
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
