@extends('layouts.welcome')
@include('includes.script')

@section('content')
    <!--section1-->

    @include('includes.section1')

    <!--end-section1-->

    <!--nav-tabs-->
    @include('includes.nav-tabs')
    <!--end-nav-tabs-->

    <hr>

    <!--section2-->
    <div class="container">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <h5 class="align-self-center">Actual</h5>
                <div class="right-div">
                    <a href="{{ route('actuals.create', $project->id) }}" class="btn btn-outline-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt="" class="btn-icon me-3" />Add
                        Actual
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end-section2-->

    <!--table-section-->
    <div class="container mt-5">
        <table class="table" id='empTable'>
            <thead>
                <tr>
                    <th class="align-middle p-3" scope="col">Task Name</th>
                    <th class="text-center align-middle p-3" scope="col">
                        Activities
                    </th>
                    <th class="text-center align-middle p-3" scope="col">
                        Start Date
                    </th>
                    <th class="text-center align-middle p-3" scope="col">
                        Results
                    </th>
                    <th class="text-center align-middle p-3" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($actuals as $data)
                    <tr>
                        <td class="p-3 align-middle" scope="row">{{ $data->task_name }}</td>
                        <td class="text-center align-middle p-3">{{ $data->activities }}</td>
                        <td class="text-center align-middle p-3">{{ $data->start_date }}</td>
                        <td class="text-center align-middle p-3">{{ $data->results }}</td>
                        <td class="text-end
                                    p-3 align-middle">
                            <div class="action d-flex justify-content-center ">
                                <form onsubmit="return confirm('Are you sure to delete the data?');"
                                    action="{{ route('mop.destroy', $data->id) }}" method="POST">
                                    <div class="action d-flex justify-content-center align-middle">
                                        <a class="btn btn-primary " href="{{ route('mop.edit', $data->id) }}">Edit</a>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <td colspan="5"class="text-center p-3 block align-middle">Data Kosong</td>
                @endforelse
            </tbody>
        </table>
    </div>
    <!--end-table-section-->

    <div class="container mt-5">
        <h5>Actual Timeline</h5>
        <div id="gantt_here" style='width:100%; height:100%;'></div>
        <script type="text/javascript">
            gantt.config.date_format = "%Y-%m-%d %H:%i:%s";

            gantt.config.task_duration_func = function(start_date, task_name) {
                var startDate = moment(start_date);
                var endDate = moment(end_date);
                var duration = endDate.diff(startDate, 'days'); // Adjust this line to match the duration format you need
                return duration;
            };

            gantt.init("gantt_here");
            gantt.load("/actual");
        </script>
    </div>
@endsection
