<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('transaction.create');
    }

    public function store(Request $request)
    {
        $data = new Transaction();

        // $data->user_id = "1";
        $data->obr_no = $request['obrNo'];
        $data->dv_no = $request['dvNo'];
        $data->particular = $request['particular'];
        $data->amount = $request['amount'];
        $data->total_amt = $request['totalAmt'];
        $data->pr_no = "1";
        $data->save();

        return "Success";
    }
}
