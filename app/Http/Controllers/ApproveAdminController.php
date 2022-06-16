<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
use App\Models\Loan;
use App\Models\LoanBills;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ApproveAdminController extends Controller
{
    public function approveadmin(){
        $approve_loan = DB::table('loans')
                        ->select('users.name', 'users.email', 'loans.amount', 'loans.duration', 'loans.instalment',
                                'loans.status', 'loans.file_nik', 'loans.file_profesi', 'loans.file_pembiayaan',
                                'loans.file_foto_usaha', 'loans.file_skt', 'loans.file_sku', 'loans.id', 'loans.user_id')
                        ->join('users', 'users.id', '=', 'loans.user_id')
                        ->orderBy('loans.status', 'DESC')
                        ->get();

        $refund_loan = DB::table('loan_bills')
                        ->select('loan_bills.invoice', 'loan_bills.invoice_date', 'loan_bills.due_date', 'loan_bills.total',
                                'loan_bills.full_name', 'loan_bills.phone', 'loan_bills.email', 'loan_bills.payment_method',
                                'loan_bills.ammount', 'loan_bills.payment_proof', 'loan_bills.status', 'loans.instalment',
                                'loan_bills.id', 'loan_bills.user_id', 'loan_bills.loan_id', 'loan_bills.status_cicilan',
                                'loan_bills.status_pinjaman')
                        ->join('users', 'users.id', '=', 'loan_bills.user_id')
                        ->join('loans', 'loans.id', '=', 'loan_bills.loan_id')                        
                        ->get();

        return view('approve.adminapprove', [
            "approve_loan" => $approve_loan,
            "refund_loan" => $refund_loan,
        ]);
    }

    public function search(Request $request){
        $nama_lengkap = $request->nama_lengkap;
        $data = DB::table('pengembalian')->where('nama_lengkap', 'like', "%".$nama_lengkap."%")->get();
        return view('approve.adminapprove', [
            "data_user" => $data,
        ]);
    }

    public function update(Request $request){
        if (isset($request->accept)){
            $data2 = Pengembalian::find($request->accept);
            $data2->status_bayar = '1';
            $data2->save();
        }
       

        // $data = ProfileUser::all();

        // return view('verif-adm', [
        //     "data_user" => $data,
        // ]);
        return redirect('approve');
    }

    public function approveLoanSuccess(Request $request, $id)
    {
        $model = Loan::find($id);
        $model->status = 1;        
        $model->save();        
        
        $time_now = Carbon::now();
        $due_date = Carbon::now()->addMonth($model->duration);
                            
        $addLoanBills = new LoanBills;        
        $addLoanBills->user_id = $request->user_id;
        $addLoanBills->loan_id  = $request->loan_id;
        $addLoanBills->invoice = random_int(1000000000, 9999999999);
        $addLoanBills->invoice_date = $time_now;
        $addLoanBills->due_date = $due_date;
        $addLoanBills->total = $model->amount;        
        $addLoanBills->save();
        
        return redirect(url('approve'));
    }

    public function approveLoanFailed($id)
    {
        $model = Loan::find($id);
        $model->delete();

        return redirect(url('approve'));
    }

    public function approveLoanBillSuccess(Request $request, $id)
    {
        $model = LoanBills::find($id);
        $model->total = ($model->total) - ($request->ammount);
        $model->status = 1;               
        $model->status_cicilan = "Validated";               
        $model->save();

        return redirect(url('approve'));
    }

    public function approveLoanBillFailed($id)
    {
        $model = LoanBills::find($id);
        $model->full_name = NULL;
        $model->phone = NULL;
        $model->email = NULL;
        $model->payment_method = NULL;
        $model->ammount = NULL;
        $model->payment_proof = NULL;
        $model->status_cicilan = "Failed";
        $model->save();

        return redirect(url('approve'));
    }

    public function beriKeteranganLoanBill(Request $request, $id)
    {
        $model = LoanBills::find($id);        
        $model->full_name = NULL;
        $model->phone = NULL;
        $model->email = NULL;
        $model->payment_method = NULL;
        $model->ammount = NULL;
        $model->payment_proof = NULL;
        $model->status = 0;
        $model->status_cicilan = "Check";
        $model->keterangan = $request->keterangan;        
        $model->save();

        return redirect(url('approve'));
    }

    public function validasiLunasLoanBill(Request $request, $id)
    {        
        $model = LoanBills::find($id); 
        $model->status_pinjaman = $request->status_pinjaman;      
        $model->keterangan = NULL;    
        $model->save();

        return redirect(url('approve'));
    }

}
