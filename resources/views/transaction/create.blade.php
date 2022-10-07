@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('store.transaction') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">OBR No</label>
                <input type="text" class="form-control" name="obrNo">
            </div>
            <div class="form-group">
                <label for="">DV No</label>
                <input type="text" class="form-control" name="dvNo">
            </div>
            <div class="form-group">
                <label for="">Particular</label>
                <input type="text" class="form-control" name="particular">
            </div>
            <div class="form-group">
                <label for="">Amount</label>
                <input type="number" class="form-control" name="amount">
            </div>
            <div class="form-group">
                <label for="">Total Amt</label>
                <input type="number" class="form-control" name="totalAmt">
            </div>

            <button type="submit" class="mt-2 btn btn-primary btn-sm">Submit</button>
        </form>

    </div>

@endsection
