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
                            src="{{ asset('frontend/images/arrow-left-circle.svg') }}" alt="" class="ms-0"></a>
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

    <!--table-section-->
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th class="p-4" scope="col">Task</th>
                    <th class="text-center p-4" scope="col">Sub-Task</th>
                    <th class="text-center p-4" scope="col">Volume</th>
                    <th class="text-center p-4" scope="col">Unit</th>
                    <th class="text-center p-4" scope="col">Date</th>
                    <th class="text-center p-4" scope="col">
                        Man Power Planning
                    </th>
                    <th class="text-center p-4" scope="col">
                        Percentage(%)
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($planning as $data)
                    <tr href="#collapse">
                        <td class="align-middle p-4" scope="row">{{ $data->task_name }}</td>
                        <td class="align-middle text-center p-4" scope="row">{{ $data->sub_task }}</td>
                        <td class="align-middle text-center p-4">{{ $data->volume }}</td>
                        <td class="align-middle text-center p-4">{{ $data->unit }}</td>
                        <td class="align-middle text-center p-4">
                            <div class="card border-0">
                                <div class="p-1 timeline">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-text p-1 d-flex align-items-center justify-content-center">
                                            {{ $data->date_started }}
                                        </p>
                                        <p class="card-text p-1 d-flex align-items-center justify-content-center">
                                            {{ $data->date_finished }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle text-center p-4">
                            <img src="{{ asset('frontend/images/users.png') }}" alt="" class="me-3"
                                style="max-height: 24px" />5
                        </td>
                        <td class="align-middle text-center p-4">{{ $data->percentage }}</td>
                    </tr>
                @empty
                    <td class="text-center p-3 block align-middle">Data Kosong</td>
                @endforelse
                <!--sub-task-->
            </tbody>
        </table>
    </div>
    <!--end-table-section-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('frontend/scripts/script.js') }}"></script>
</body>

</html>
