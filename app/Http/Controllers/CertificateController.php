<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    public function index()
    {
        return view('Masyarakat.certificate.index', [
            'keyword' => '',
            'certificates' => Certificate::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(3)
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        return view('Masyarakat.certificate.index', [
            'certificates' => Certificate::where('user_id', Auth::user()->id)
                ->whereHas('training', function ($query) use ($keyword) {
                    $query->where('name_training', 'like', '%' . $keyword . '%');
                })
                ->orderBy('created_at', 'desc')
                ->paginate(3),
            'keyword' => $keyword
        ]);
    }

    public function download(Certificate $certificate)
    {
        return response()->download($certificate->file, Auth::user()->name . ' - ' . $certificate->training->name_training . '.pdf', []);
    }
}
