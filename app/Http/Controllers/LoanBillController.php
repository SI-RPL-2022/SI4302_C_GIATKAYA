<?php

namespace App\Http\Controllers;

use App\Models\LoanBill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoanBillController extends Controller
{
    public function index()
    {
        $bills = DB::table('loan_bills')
                ->select('loan_bills.invoice', 'loan_bills.invoice_date', 'loan_bills.due_date', 'loan_bills.total AS sisa_pembayaran',                        
                        'loans.instalment', 'loans.amount AS total_pembayaran', 'loan_bills.id', 'loan_bills.user_id', 'loan_bills.loan_id', 
                        'loan_bills.status_cicilan', 'loan_bills.status_pinjaman', 'loan_bills.status',
                        'loan_bills.full_name', 'loan_bills.phone', 'loan_bills.email', 'loan_bills.payment_method',
                        'loan_bills.ammount', 'loan_bills.payment_proof', 'loan_bills.keterangan')
                ->join('users', 'users.id', '=', 'loan_bills.user_id')
                ->join('loans', 'loans.id', '=', 'loan_bills.loan_id')   
                ->where('loan_bills.user_id', auth()->user()->id)          
                ->orderBy('loan_bills.created_at', 'desc')           
                ->get();
        
        // LoanBill::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        return view('Masyarakat.loan_bill.index', compact('bills'));
    }

    public function create(LoanBill $loan_bill)
    {
        return view('Masyarakat.loan_bill.create', compact('loan_bill'));
    }

    public function show(Request $request, LoanBill $loan_bill)
    {
        $this->validate($request, [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'payment_method' => 'required',
            'ammount' => 'required|numeric',
            'payment_proof' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $tempImage = $request->payment_proof->move('image/bill/', $request->payment_proof->hashName());
        return view('Masyarakat.loan_bill.show', compact('request', 'loan_bill', 'tempImage'));
    }

    public function update(Request $request, LoanBill $loan_bill)
    {
        $this->validate($request, [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'payment_method' => 'required',
            'ammount' => 'required|numeric',
            'payment_proof' => 'required|string'
        ]);

        if($loan_bill->total < $request->ammount){
            return redirect()->route('masyarakat.bill.index')->with('alert', 'Masukkan jumlah pembayaran sesuai dengan sisa pembayaran');
        }else{
            $loan_bill->full_name = $request->full_name;
            $loan_bill->email = $request->email;
            $loan_bill->phone = $request->phone;
            $loan_bill->payment_method = $request->payment_method;
            $loan_bill->ammount = $request->ammount;
            $loan_bill->payment_proof = $request->payment_proof;
            $loan_bill->status_cicilan = "Check";
            $loan_bill->save();

            return redirect()->route('masyarakat.bill.index')->with('success', 'Pengembalian dana berhasil dikirim');
        }           
    }
}
