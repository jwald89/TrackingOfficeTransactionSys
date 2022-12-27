<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    // LOAD THE DATA INTO THE LIST TABLE
    public function index()
    {

        $data = Transaction::get();

        return view('transaction.index', [
            "data" => $data
        ]);
    }


    // VIEW IN THE FORM
    public function create()
    {
        return view('transaction.create');
    }


    // STORE THE DATA
    public function store(Request $request)
    {
        $this->validate($request, [
            'obr_no' => ['required', Rule::unique('transactions', 'obr_no')],
            'dv_no' => ['required', Rule::unique('transactions', 'dv_no')],
            'particular' => ['required'],
            'amount' => ['required'],
            'total_amt' => ['required'],
        ]);


        $data = new Transaction();

        $data->obr_no = $request['obr_no'];
        $data->dv_no = $request['dv_no'];
        $data->particular = $request['particular'];
        $data->amount = $request['amount'];
        $data->total_amt = $request['total_amt'];
        $data->pr_no = "1";
        $data->save();

        return back()->with('success', 'Succesfully Created!');
    }



    // SHOW THE EDIT FORM
    public function edit($obr_no)
    {
        $transId = Transaction::find($obr_no);

        return view('transaction.edit', [
            'transId' => $transId
        ]);
    }



    // UPDATE THE DATA
    public function update(Request $request, $obr_no)
    {

        $this->validate($request, [
            'particular' => ['required'],
            'amount' => ['required'],
            'total_amt' => ['required'],
        ]);

        $data = Transaction::find($obr_no);

        $data->obr_no = $request['obr_no'];
        $data->dv_no = $request['dv_no'];
        $data->particular = $request['particular'];
        $data->amount = $request['amount'];
        $data->total_amt = $request['total_amt'];
        $data->pr_no = "1";
        $data->save();

        return redirect()->route('transaction.index')->with('success', 'Successully Updated');
    }


    // DELETE THE DATA
    public function destroy($id)
    {
        $data = Transaction::find($id)->delete();

        return back()->with('success', "Successfully Deleted!");
    }


}
