<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Planning Project</title>
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    <!--inline CSS-->
    <style type="text/css">
        html,
        body {
            height: 100%;
            padding: 0px;
            margin: 0px;
            overflow: hidden;
        }
    </style>
    <!--END-inline CSS-->
    <!--navbar-->
    @include('includes.navbar')
    <!--end-navbar-->
    <!--section1-->
    @include('includes.section1')
    <!--end-section1-->

    <hr />

    <!--section2-->
    <div class="container">
        <div class="mt-5">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <a href="{{ route('planning.show', $project->slug) }}"><img
                            src="{{ asset('frontend/images/arrow-left-circle.svg') }}" alt=""
                            class="ms-0"></a>
                    <h5 class="mb-0 mx-3">Planning Details</h5>
                </div>
                <div class="col-auto m-0">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle px-4 py-2" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Export As
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="{{ route('export.man-power-planning', $project->slug) }}">Excel</a></li>
                            <li><a class="dropdown-item" href="#">PDF</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-section2-->

    {{-- <!--gantt-chart-date-->
    <div class="container mt-5">
        <div class="gantt-chart-container">
            <div class="p-4 d-flex">
                <a href="#"><img src="{{ asset('frontend/images/arrow-left.png') }}" alt="" /></a>
                <div class="d-flex justify-content-center mx-auto align-items-center">
                    <p class="my-auto">September 2023</p>
                </div>
                <a href="#"><img src="{{ asset('frontend/images/arrow-right.png') }}" alt="" /></a>
            </div>
            <div class="p-4 d-flex justify-content-between m-auto">
                <a href="#"><img src="{{ asset('frontend/images/arrow-left.png') }}" alt="" /></a>
                @foreach ($planning as $item)
                    <p class="date" id="tanggal1">{{ $item->date_started }}</p>
                    <p class="date" id="tanggal2">{{ $item->date_finished }}</p>
                @endforeach
                <a href="#"><img src="{{ asset('frontend/images/arrow-right.png') }}" alt="" /></a>
            </div>
        </div>
    </div>
    <!--end-gantt-chart-date-->

    <!--progress-bar-->
    <div class="container mt-4">
        <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100" style="height: 30px;  width: 300px; margin-left: 175px;">
            <div class="progress-bar" style="width: 100%; ">

            </div>
        </div>
        <div class="mt-4"></div>
        <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100" style="height: 30px;  width: 320px; margin-left: 39rem;">
            <div class="progress-bar" style="width: 100%; ">

            </div>
        </div>
        <div class="mt-4"></div>
    </div>
    <!--end-progress-bar--> --}}


    <div id="gantt_here" style='width:100%; height:100%; margin-top:2rem;'></div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    <script type="text/javascript">
        gantt.config.date_format = "%Y-%m-%d %H:%i:%s";

        gantt.config.task_duration_func = function(start_date, task_name) {
            var startDate = moment(start_date);
            var endDate = moment(end_date);
            var duration = endDate.diff(startDate, 'days'); // Adjust this line to match the duration format you need
            return duration;
        };

        gantt.init("gantt_here");

        gantt.load("/api/data");
    </script>
</body>

</html>
