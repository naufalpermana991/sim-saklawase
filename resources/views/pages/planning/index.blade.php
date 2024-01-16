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
                <h5 class="align-self-center">Planning</h5>
                <div class="right-div">
                    <a href="{{ route('planning.create', $project->slug) }}" class="btn btn-outline-primary py-2 px-4">
                        <img src="{{ asset('frontend/images/plus-circle 1.png') }}" alt="" class="btn-icon me-3" />Add
                        Planning
                    </a>
                    <a href="{{ route('detailplanning.index', $project->slug) }}" class="tertiary-link ps-4">
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
                    <th class="text-center p-4" scope="col">Volume</th>
                    <th class="text-center p-4" scope="col">Unit</th>
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
                        <td class="p-3 align-middle" scope="row">{{ $data->task_name }}</td>
                        <td class="p-3 text-center align-middle" scope="row">{{ $data->volume }}</td>
                        <td class="p-3 text-center align-middle" scope="row">{{ $data->unit }}</td>
                        <td class="text-center p-3 align-middle">{{ $data->start_date }}</td>
                        <td class="text-center p-3 align-middle">{{ $data->end_date }}</td>
                        <td class="text-center p-3 align-middle">
                            <img src="{{ asset('frontend/images/users.png') }}" alt="" class="me-3"
                                style="max-height: 24px" />{{ $data->mop }}
                        </td>
                        <td class="text-center p-3 align-middle">{{ $data->percentage }}%</td>
                        <td class="text-end p-3 align-middle">
                            <form onsubmit="return confirm('Are you sure to delete the data?');"
                                action="{{ route('planning.destroy', $data->id) }}" method="POST">
                                <div class="action d-flex justify-content-end">
                                    <a class="btn btn-primary" href="{{ route('planning.edit', $data->id) }}">Edit</a>
                                    <div class="me-3"></div>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</a>
                                </div>
                            </form>
                        </td>

                    </tr>
                @empty
                    <td class="text-center p-3 block align-middle"></td>
                    <td class="text-center p-3 block align-middle"></td>
                    <td class="text-center p-3 block align-middle"></td>
                    <td class="text-center p-3 block align-middle">Data Kosong</td>
                    <td class="text-center p-3 block align-middle"></td>
                    <td class="text-center p-3 block align-middle"></td>
                    <td class="text-center p-3 block align-middle"></td>
                    <td class="text-center p-3 block align-middle"></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!--end-table-section-->
@endsection
