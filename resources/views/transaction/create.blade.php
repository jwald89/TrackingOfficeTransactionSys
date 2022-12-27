@extends('layouts.app')

@section('content')

        <form action="{{ route('store.transaction') }}" method="POST">
            @csrf
            <div class="card mt-4 d-flex">
                <div class="p-4">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <h5>{{ Session::get('success') }}</h5>
                        </div>
                    @endif

                    <div class="row mb-2">
                        <div class="form-group col-lg-6">
                            <label for="">OBR No.</label>
                            <input type="text" class="form-control form-control-md mb-2" name="obr_no" value="{{ old('obr_no') }}" placeholder="OBR No..">
                            @error('obr_no')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Dv No.</label>
                            <input type="text" class="form-control form-control-md mb-2" name="dv_no" value="{{ old('dv_no') }}" placeholder="DV No..">
                            @error('dv_no')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control mb-2" name="particular" placeholder="Particular.." id="floatingTextarea" style="text-transform: uppercase; height: 100px">
                            {{ old('particular') }}
                        </textarea>
                        <label for="floatingTextarea">Particular</label>
                        @error('particular')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="">Amount</label>
                            <input type="number" class="form-control form-control-md mb-2" name="amount" value="{{ old('amount') }}" placeholder="Amount..">
                            @error('amount')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Total Amt</label>
                            <input type="number" class="form-control form-control-md mb-4" name="total_amt" value="{{ old('total_amt') }}" placeholder="Total Amount..">
                            @error('total_amt')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="p-4">
                    <h6>Disbursement Voucher</h6>
                </div>
                <hr>
                <div class="p-4">

                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" class="form-control form-control-md mb-2" placeholder="DV No..">
                    </div>
                    <div class="form-group">
                        <label for="">Check No.</label>
                        <input type="text" class="form-control form-control-md mb-2" placeholder="DV No..">
                    </div>
                </div>

                <h6></h6>
                <hr>
                <div class="flex p-3">

                    <div class="float-end">
                        <button type="submit" class="btn btn-success btn-md">Submit</button>
                    </div>
                    <div class="float-end">
                        <a href="/transaction-list" class="btn btn-light btn-md me-2">Cancel</a>
                    </div>
                </div>
            </div>
        </form>


@endsection
