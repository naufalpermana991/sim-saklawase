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
                    <th class="align-middle p-4" scope="col">Task</th>
                    <th class="text-center align-middle p-4" scope="col">
                        Date Started
                    </th>
                    <th class="text-center align-middle p-4" scope="col">Status</th>
                    <th class="text-center align-middle p-4" scope="col">
                        Number of Person(s)
                    </th>
                    <th class="text-end align-middle p-4" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $jumlahKolom = count($mop[0]->toArray());
                @endphp
                @forelse($mop as $data)
                    <tr>
                        <td class="p-4 align-middle" scope="row">Persiapan</td>
                        <td class="text-center align-middle p-4">01/11/2023</td>
                        <td class="text-center align-middle p-4">
                            <span class="badge rounded-pill rounded-pill-warning px-3 py-2">Pending</span>
                        </td>
                        <td class="text-center align-middle p-4">
                            <img src="{{ asset('frontend/images/users.png') }}" alt="" class="me-3"
                                style="max-height: 24px" />{{ $jumlahKolom }}
                            <a href="#" class="action text-decoration-none ms-2">View Details</a>
                        </td>
                        <td class="text-end align-middle p-4">
                            <div class="action d-flex justify-content-end">
                                <form onsubmit="return confirm('Are you sure to delete the data?');" action="#"
                                    method="POST">
                                    <div class="action d-flex justify-content-end">
                                        <a class="btn btn-primary" href="#">Edit</a>
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
                    <td class="text-center p-3 block align-middle"></td>
                    <td class="text-center p-3 block align-middle"></td>
                    <td class="text-center p-3 block align-middle"></td>
                    <td class="text-center p-3 block align-middle">Data Kosong</td>
                    <td class="text-center p-3 block align-middle"></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!--end-table-section-->
@endsection
