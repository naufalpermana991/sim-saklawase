@extends('layouts.welcome')

@section('content')
    <!--section1-->
    @foreach ($project as $data)
        <div class="container mb-3">
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Project {{ $data->initial_project }}</h3>
                    <a href="#" class="btn btn-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/settings.png') }}" alt="" class="btn-icon me-3" />Project
                        Settings
                    </a>
                </div>
            </div>
        </div>
    @endforeach
    <!--end-section1-->

    <!--nav-tabs-->
    @include('includes.nav-tabs')
    <!--end-nav-tabs-->

    <hr>

    <!--section2-->
    <div class="container">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <h5 class="align-self-center">Planning</h5>
                <div class="right-div">
                    <a href="planning/create" class="btn btn-outline-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt=""
                            class="btn-icon me-3" />Add Planning
                    </a>
                    <a href="#" class="tertiary-link ps-4">
                        See Schedule Details
                    </a>
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
                    <th class="text-center p-4" scope="col">Date Started</th>
                    <th class="text-center p-4" scope="col">Date Finished</th>
                    <th class="text-center p-4" scope="col">Man Power Planning</th>
                    <th class="text-center p-4" scope="col">Percentage (%)</th>
                    <th class="text-end p-4" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($planning as $data)
                    <tr>
                        <td class="p-3" scope="row">{{ $data->task_name }}</td>
                        <td class="text-center p-3">{{ $data->date_started }}</td>
                        <td class="text-center p-3">{{ $data->date_finished }}</td>
                        <td class="text-center p-3">
                            <img src="{{ asset('frontend/images/users.png') }}" alt="" class="me-3"
                                style="max-height: 24px" />{{ $data->mop }}
                        </td>
                        <td class="text-center p-3">{{ $data->percentage }}%</td>
                        <form onsubmit="return confirm('Are you sure to delete task?')"
                            action="{{ route('planning.destroy', $data->id) }}" method="POST">
                            <td class="text-end p-3">
                                <div class="action d-flex justify-content-end">
                                    <a class="btn btn-primary" href="{{ route('planning.edit', $data->id) }}">Edit</a>
                                    <div class="me-3"></div>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </form>
                    </tr>
                @empty
                    <div class="alert alert-danger text-center mt-4">
                        <i data-feather="x" class="me-3"></i>Data Kosong
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
    <!--end-table-section-->
@endsection
