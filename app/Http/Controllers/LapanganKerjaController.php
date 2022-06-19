<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoKerja;
use App\Models\ApplyKerja;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;
use Response;

class LapanganKerjaController extends Controller
{
    public function showAllLapanganKerja()
    {
        $data = DB::table('infokerja')
                ->select('infokerja.id', 'infokerja.name_perusahaan', 'infokerja.foto', 'infokerja.gaji', 'infokerja.lokasi',
                        'infokerja.jabatan', 'infokerja.created_at', \DB::raw('SUBSTRING(infokerja.deskripsi, 1, 200) as deskripsi_singkat'))            
                ->orderBy('infokerja.name_perusahaan', 'ASC')
                ->paginate(4); 

        return view('Masyarakat.ApplyKerja.show_all_lapangan_kerja', compact('data'));
    }

    public function cariAllLapanganKerja(Request $request)
    {
        $kategori = $request->kategori;
        $keyword = $request->search;

        $data = DB::table('infokerja')
                ->select('infokerja.id', 'infokerja.name_perusahaan', 'infokerja.foto', 'infokerja.gaji', 'infokerja.lokasi',
                        'infokerja.jabatan', 'infokerja.created_at', \DB::raw('SUBSTRING(infokerja.deskripsi, 1, 200) as deskripsi_singkat'))            
                ->where($kategori, 'like', "%". $keyword . "%")
                ->orderBy('infokerja.name_perusahaan', 'ASC')
                ->paginate(4); 

        return view('Masyarakat.ApplyKerja.show_all_lapangan_kerja', compact('data'));
    }

    public function showDetailLapanganKerja($id)
    {
        $data = InfoKerja::find($id);

        return view('Masyarakat.ApplyKerja.show_detail_lapangan_kerja', compact('data'));
    }

    public function lamarLapanganKerja($id)
    {
        $data = InfoKerja::find($id);

        return view('Masyarakat.ApplyKerja.tambah_lamar_lapangan_kerja', compact('data'));
    }

    public function postLamarLapanganKerja(Request $request)
    {
        $model = new ApplyKerja;

        $berkas_lamaran = time().'.'.$request->berkas_lamaran->extension();        
        $request->berkas_lamaran->move(public_path('berkas_lamaran'), $berkas_lamaran);

        $model->id_lapangan_kerja = $request->id_lapangan_kerja;        
        $model->id_user = $request->id_user;        
        $model->berkas_lamaran = $berkas_lamaran;              
        $model->save();

        return redirect(url('masyarakat/lapangan-kerja'));
    }

    public function riwayatLamaran()
    {
        $model = DB::table('apply_kerja')
                ->select('apply_kerja.id', 'apply_kerja.created_at', 'apply_kerja.berkas_lamaran',
                        'infokerja.name_perusahaan')
                ->join('users', 'users.id', '=', 'apply_kerja.id_user')
                ->join('infokerja', 'infokerja.id', '=', 'apply_kerja.id_lapangan_kerja')
                ->where('apply_kerja.id_user', Auth::user()->id)
                ->orderBy('apply_kerja.created_at', 'DESC')
                ->paginate(5);        

        return view('Masyarakat.ApplyKerja.riwayat_lamaran', compact('model'));
    }

    public function hapusriwayatLamaran($id)
    {
        $model = ApplyKerja::find($id);
        $model->delete();

        return redirect(url('masyarakat/lapangan-kerja/riyawat-lamaran'));
    }

    public function downloadBerkasRiwayatLamaran($id)
    {
        $model = ApplyKerja::find($id);

        $filepath = public_path('berkas_lamaran/'.$model->berkas_lamaran);
        return Response::download($filepath); 
    }

    public function dataRiwayatLamaran()
    {
        $model = DB::table('apply_kerja')
                ->select('apply_kerja.id', 'apply_kerja.created_at', 'apply_kerja.berkas_lamaran',
                        'infokerja.name_perusahaan')
                ->join('users', 'users.id', '=', 'apply_kerja.id_user')
                ->join('infokerja', 'infokerja.id', '=', 'apply_kerja.id_lapangan_kerja')                
                ->orderBy('apply_kerja.created_at', 'DESC')
                ->paginate(5);   

        return view('InfoKerja.data_riwayat_lamaran', compact('model'));
    }

    public function caridataRiwayatLamaran(Request $request)
    {
        $keyword = $request->search;

        $model = DB::table('apply_kerja')
                ->select('apply_kerja.id', 'apply_kerja.created_at', 'apply_kerja.berkas_lamaran',
                        'infokerja.name_perusahaan')
                ->join('users', 'users.id', '=', 'apply_kerja.id_user')
                ->join('infokerja', 'infokerja.id', '=', 'apply_kerja.id_lapangan_kerja')     
                ->where('infokerja.name_perusahaan', 'like', "%". $keyword . "%")           
                ->orderBy('apply_kerja.created_at', 'DESC')
                ->paginate(5);   

        return view('InfoKerja.data_riwayat_lamaran', compact('model'));
    }

    public function deletedataRiwayatLamaran($id)
    {
        $model = ApplyKerja::find($id);
        $model->delete();

        return redirect(url('data-riyawat-lamaran'));
    }

    public function downloaddataRiwayatLamaran($id)
    {
        $model = ApplyKerja::find($id);

        $filepath = public_path('berkas_lamaran/'.$model->berkas_lamaran);
        return Response::download($filepath); 
    }
}
