@extends('layouts.welcome')

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
        <table class="table">
            <thead>
                <tr>
                    <th class="p-4" scope="col">Task</th>
                    <th class="text-center p-4" scope="col">
                        Date Started
                    </th>
                    <th class="text-center p-4" scope="col">Status</th>
                    <th class="text-center p-4" scope="col">
                        Number of Person(s)
                    </th>
                    <th class="text-end p-4" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-4" scope="row">Persiapan</td>
                    <td class="text-center p-4">01/11/2023</td>
                    <td class="text-center p-4">
                        <span class="badge rounded-pill text-bg-warning px-3 py-2">Pending</span>
                    </td>
                    <td class="text-center p-4">
                        <img src="images/users.png" alt="" class="me-3" style="max-height: 24px" />5
                        <a href="#" class="action text-decoration-none ms-2">View Details</a>
                    </td>
                    <td class="text-end p-4">
                        <div class="action d-flex justify-content-end">
                            <a href="#">Edit</a>
                            <p class="mx-2">|</p>
                            <a href="#" class="text-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--end-table-section-->
@endsection
