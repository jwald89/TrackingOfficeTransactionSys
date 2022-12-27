@extends('layouts.app')

@section('content')

        <form action="{{ route('update.transaction', $transId->obr_no )}}" method="POST">
            @csrf
            @method("PUT")

            <div class="card mt-4 mx-auto d-flex">
                <div class="p-4">
                    <div class="row mb-2">
                        <div class="form-group col-lg-6">
                            <label for="">OBR No.</label>
                            <input type="text" class="form-control form-control-md mb-2" name="obr_no" value="{{ old('obr_no') ?? $transId->obr_no }}" readonly>
                            @error('obr_no')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Dv No.</label>
                            <input type="text" class="form-control form-control-md mb-2" name="dv_no" value="{{ old('dv_no') ?? $transId->dv_no }}" readonly>
                            @error('dv_no')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control mb-2" name="particular" id="floatingTextarea" style="text-transform: uppercase; height: 100px">
                            {{ old('particular') ?? $transId->particular }}
                        </textarea>
                        <label for="floatingTextarea">Particular</label>
                        @error('particular')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="">Amount</label>
                            <input type="number" class="form-control form-control-md mb-2" name="amount" value="{{ old('amount') ?? $transId->amount }}" id="amt">
                            @error('amount')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Total Amt</label>
                            <input type="number" class="form-control form-control-md mb-4" name="total_amt" value="{{ old('total_amt') ?? $transId->total_amt }}" id="totalAmt">
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
