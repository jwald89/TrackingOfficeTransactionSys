@extends('layouts.app')

@section('content')
    <div class="card mx-auto mt-5 p-4 shadow col-lg-12 col-md-12 col-sm-12">

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <h5>{{ Session::get('success') }}</h5>
            </div>
        @endif

        <div class="mt-2 mb-1">
            <a href="{{ route('store.transaction') }}" class="btn btn-sm btn-success float-end">Create</a>
        </div>
            <hr>
        <table class="table text-center table-hover">
            <tr>
                <thead>
                    <th>OBR NO</th>
                    <th>DV NO</th>
                    <th>PARTICULAR</th>
                    <th>AMOUNT</th>
                    <th>TOTAL AMOUNT</th>
                    <th scope="row">ACTION</th>
                </thead>
                @foreach ($data as $d)
                <tbody>
                    <tr>
                        <td>{{ $d->obr_no }}</td>
                        <td>{{ $d->dv_no }}</td>
                        <td>{{ strtoupper($d->particular) }}</td>
                        <td>{{ $d->amount }}</td>
                        <td>{{ $d->total_amt }}</td>
                        <td rowspan="2">
                            <a href="{{ route('edit.transaction', $d->obr_no) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('delete.transaction', $d->obr_no) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteBtn">Delete</button>

                                <div class="modal fade" id="deleteBtn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Read</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body mb-5">
                                        <h3 class="lead fw-bold">Are you sure you want to delete?</h3>
                                        </div>
                                        <div class="container mb-4">
                                            <button type="submit" class="btn btn-md btn-outline-success float-end">Yes</button>
                                            <button type="button" class="btn btn-md btn-outline-secondary float-end me-2" data-bs-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </tr>
        </table>
    </div>


    {{-- <center>
        <video width="500" height="340" controls>
            <source src="{{ asset('assets/videos/vids.mp4') }}" type="video/mp4">
        </video>
    </center> --}}

    {{-- <a href="https://www.youtube.com/watch?v=zuzodcBCMWA"><img src="{{ asset('assets/images/img.jpg') }}" width="100px" height="100px"></a> --}}

    @push('page-scripts')

    @endpush


@endsection
