@extends('layouts.welcome')

@section('content')
    <!--section1-->

    @include('includes.section1')
    @include('includes.script')

    <!--end-section1-->

    <!--nav-tabs-->
    @include('includes.nav-tabs')
    <!--end-nav-tabs-->

    <hr>

    <!--section2-->
    <div class="container">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <h5 class="align-self-center">Man of Power</h5>
                <div class="right-div">
                    <a href="{{ route('mop.create', $project->id) }}" class="btn btn-outline-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt="" class="btn-icon me-3" />Add
                        Man Of Power
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
                    <th class="align-middle p-3" scope="col">Task</th>
                    <th class="text-center align-middle p-3" scope="col">
                        Date Started
                    </th>
                    <th class="text-center align-middle p-3" scope="col">
                        Person(s)
                    </th>
                    <th class="text-end align-middle p-3" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mop as $data)
                    <tr>
                        <td class="p-3 align-middle" scope="row">{{ $data->task_name }}</td>
                        <td class="text-center align-middle p-3">{{ $data->start_date }}</td>
                        <td class="text-center align-middle p-3">
                            <img src="{{ asset('frontend/images/users.png') }}" alt="" class="me-3"
                                style="max-height: 24px" />
                            <a href="#" class="action align-middle text-decoration-none viewdetails ms-2"
                                data-id="{{ $data->id }}">View Details</a>
                        </td>
                        <td class="text-end
                                p-3 align-middle">
                            <div class="action d-flex justify-content-end">
                                <form onsubmit="return confirm('Are you sure to delete the data?');"
                                    action="{{ route('mop.destroy', $data->id) }}" method="POST">
                                    <div class="action d-flex justify-content-end">
                                        <a class="btn btn-primary" href="{{ route('mop.edit', $data->id) }}">Edit</a>
                                        <div class="me-3"></div>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</a>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <td colspan="4"class="text-center p-3 block align-middle">Data Kosong</td>
                @endforelse
            </tbody>
        </table>
    </div>
    <!--end-table-section-->
@endsection
@include('includes.modal')
