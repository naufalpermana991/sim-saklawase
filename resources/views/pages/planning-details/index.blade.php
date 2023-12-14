<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schedule Planning Details</title>
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>

    @include('includes.navbar')
    <!--section1-->
    @foreach ($project as $data)
        <div class="container mb-3">
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Project {{ $data->initial_project }}</h3>
                    <a href="#" class="btn btn-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/settings.png') }}" alt=""
                            class="btn-icon me-3" />Project
                        Settings
                    </a>
                </div>
            </div>
        </div>
    @endforeach
    <!--end-section1-->

    <hr class="mt-5">

    <!--section2-->
    <div class="container">
        <div class="mt-5">
            <div class="title-section-1">
                <h5 class="align-self-center">Planning Details</h5>
            </div>
        </div>
    </div>
    <!--end-section2-->

    <!--table-section-->
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" rowspan="2">Task</th>
                    <th class="text-center">Sub-Task</th>
                    <th class="text-center">Volume</th>
                    <th class="text-center">Unit</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Date Started</th>
                    <th class="text-center">Man of Power Planning</th>
                    <th class="text-center">Percentage (%)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center" rowspan="2">Persiapan</td>
                    <td class="text-center">Bahan</td>
                    <td class="text-center">100</td>
                    <td class="text-center">lbr</td>
                    <td class="text-center p-3">
                        <div class="card border-0">
                            <div class="p-2 timeline">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text ps-2 d-flex align-items-center justify-content-center">
                                        04/07/2023
                                    </p>
                                    <p class="card-text pe-2 d-flex align-items-center justify-content-center">
                                        07/07/2023
                                    </p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">5</td>
                    <td class="text-center">35</td>
                    <td class="text-center">35</td>
                </tr>
                <tr>
                    <td class="text-center">Persiapan</td>
                    <td class="text-center">100</td>
                    <td class="text-center">lbr</td>
                    <td class="text-center p-3">
                        <div class="card border-0">
                            <div class="p-2 timeline">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text ps-2 d-flex align-items-center justify-content-center">
                                        04/07/2023
                                    </p>
                                    <p class="card-text pe-2 d-flex align-items-center justify-content-center">
                                        07/07/2023
                                    </p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">5</td>
                    <td class="text-center">35</td>
                    <td class="text-center">35</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <!--end-table-section-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/scripts/script.js') }}"></script>
</body>

</html>
