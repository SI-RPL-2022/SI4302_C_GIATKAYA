<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Dotenv\Loader\Loader;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        return view('Masyarakat.loan.index');
    }

    public function create(Request $request)
    {
        $instalment = $request->amount / $request->duration;
        return view('Masyarakat.loan.create', compact('instalment', 'request'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric',
            'duration' => 'required|numeric',
            'instalment' => 'required|numeric',
            'file_nik' => 'required|image|mimes:jpg,png,jpeg',
            'file_profesi' => 'required|image|mimes:jpg,png,jpeg',
            'file_pembiayaan' => 'required|image|mimes:jpg,png,jpeg',
            'file_foto_usaha' => 'required|image|mimes:jpg,png,jpeg',
            'file_skt' => 'required|image|mimes:jpg,png,jpeg',
            'file_sku' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $loan = new Loan();
        $loan->amount = $request->amount;
        $loan->duration = $request->duration;
        $loan->instalment = $request->instalment;
        $loan->file_nik = $request->file_nik->move('image/loan', $request->file_nik->hashName());
        $loan->file_profesi = $request->file_profesi->move('image/loan', $request->file_profesi->hashName());
        $loan->file_pembiayaan = $request->file_pembiayaan->move('image/loan', $request->file_pembiayaan->hashName());
        $loan->file_foto_usaha = $request->file_foto_usaha->move('image/loan', $request->file_foto_usaha->hashName());
        $loan->file_skt = $request->file_skt->move('image/loan', $request->file_skt->hashName());
        $loan->file_sku = $request->file_sku->move('image/loan', $request->file_sku->hashName());
        $loan->user_id = auth()->user()->id;
        $loan->save();

        return redirect()->route('masyarakat.loan.index')->with('success', 'Pengajuan pinjaman berhasil dikirim');
    }
}
