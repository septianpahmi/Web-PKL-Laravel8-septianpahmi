<?php

namespace App\Http\Controllers;

use App\Models\Datasiswa;
use App\Models\Srtbalsan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Models\Nilai;
use App\Models\Pembimbing;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Cloner\Data;

class AdminController extends Controller
{
    function index(){
        $data = Datasiswa::count();
        return view('component.index', compact('data'));
    }

    function datasiswa(){
        $data = Datasiswa::all();
        return view('component.datasiswa', compact('data'));
    }

    function addsiswa(){
        return view('component.addsiswa');
    }

    function postsiswa(Request $request){
        $data = new Datasiswa;
        $data->nis = $request->nis;
        $data->name = $request->name;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->gender = $request->gender;
        $data->instansi = $request->instansi;
        $data->alamat = $request->alamat;
        $data->satatus = 'In Progres';
        $data->save();
        return redirect('/datasiswa');

    }

    function delsiswa($id){
        $data = Datasiswa::find($id);
        $data->delete();
        return redirect()->back();
    }

    function editsiswa($id){
        $data = Datasiswa::find($id);
        return view('component.editsiswa', compact('data'));
    }

    function editpostsiswa(Request $request, $id){
        $data = Datasiswa::find($id);
        $data->nis = $request->nis;
        $data->name = $request->name;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->gender = $request->gender;
        $data->instansi = $request->instansi;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('/datasiswa');
    }

    function pengantar(){
        $data = Datasiswa::count();
        return view('component.index', compact('data'));
    }
    function suratpengantar(){
        $data = Datasiswa::all();
        return view('component.suratpengantar', compact('data'));
    }

    function download(){
        $data = Datasiswa::all();
        $pdf = PDF::loadView('component.download', ['data' => $data])->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->download('Surat-Pengantar.pdf');
    }

    function print(){
        $data = Datasiswa::all();
        $pdf = PDF::loadView('component.download', ['data' => $data])->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->stream();
    }

    function balasancount(){
        $srtbalasan = Srtbalsan::count();
        return view('component.index', compact('srtbalasan'));
    }
    function balasan(){
        $data = Srtbalsan::all();
        return view('component.balasan', compact('data'));
    }

    function addbalasan(){
        return view('component.addbalasan');
    }

    function postbalasan(Request $request){
        $data = new Srtbalsan;
        $data->no_surat = $request->no_surat;
        $data->tanggal = $request->tanggal;
        $image=$request->file('file');
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('balasan', $imagename);
        $data->image=$imagename;
        $data->save();

        return redirect('/balsan');

    }

    function delbalasan($id){
        $data = Srtbalsan::find($id);
        $data->delete();
        return redirect()->back();
    }

    function rekapcount(){
        $rekap = Datasiswa::count();
        return view('component.index', compact('data'));
    }
    function rekap(){
        $data = Datasiswa::all();
        return view('component.rekap', compact('data'));
    }

    function terima($id){
        $data = Datasiswa::find($id);
        $data->satatus="Diterima";
        $data->save();
        return redirect()->back();
    }
    function tolak($id){
        $data = Datasiswa::find($id);
        $data->satatus="Ditolak";
        $data->save();
        return redirect()->back();
    }

    function pembimbingcount(){
        $oembimbing = Pembimbing::count();
        return view('component.index', compact('data'));
    }
    function pembimbing(){
        $data = Pembimbing::all();
        return view('component.pembimbing', compact('data'));
    }
    function addpembimbing(){
        return view('component.addpembimbing');
    }
    function postpembimbing(Request $request){
        $data = new Pembimbing;
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->Pemb_siswa = $request->Pemb_siswa;
        $data->temp_pkl = $request->temp_pkl;
        $data->save();
        return redirect('/pembimbing');
    }

    function editpembimbing($id){
        $data = Pembimbing::find($id);
        return view('component.editpembimbing', compact('data'));
    }

    function posteditpembimbing(Request $request, $id){
        $data = Pembimbing::find($id);
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->Pemb_siswa = $request->Pemb_siswa;
        $data->temp_pkl = $request->temp_pkl;
        $data->save();
        return redirect('/pembimbing');
    }

    function delpembimbing($id){
        $data = Pembimbing::find($id);
        $data->delete();
        return redirect()->back();
    }

    function sertifikatcount(){
        $sertif = Datasiswa::count();
        return view('component.index', compact('data'));
    }

    function sertifikat(){
        $data = Datasiswa::all();
        return view('component.sertifikat', compact('data'));
    }

    function savepdf($id){
        $data = Datasiswa::find($id);
        $pdf = PDF::loadView('component.savesertif', ['data' => $data])->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->download('sertifikat.pdf');
    }

    function printpdf($id){
        $data = Datasiswa::find($id);
        $pdf = PDF::loadView('component.savesertif', ['data' => $data])->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->stream();
    }

    function nilaicount(){
        $data = Nilai::count();
        return view('component.index', compact('data'));
    }
    function nilai(){
        $data = Nilai::all();
        return view('component.nilai', compact('data'));
    }

    function addnilai(){
        return view('component.addnilai');
    }

    function postnilai(Request $request){
        $data = new Nilai;
        $data->nis = $request->nis;
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->disiplin = $request->disiplin;
        $data->kerjasama = $request->kerjasama;
        $data->save();
        return redirect('/nilai');
    }

    function editnilai($id){
        $data = Nilai::find($id);
        return view('component.editnilai', compact('data'));
    }

    function editpostnilai(Request $request, $id){
        $data = Nilai::find($id);
        $data->nis = $request->nis;
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->disiplin = $request->disiplin;
        $data->kerjasama = $request->kerjasama;
        $data->save();
        return redirect('/nilai');
    }

    function delnilai($id){
        $data = Nilai::find($id);
        $data->delete();
        return redirect()->back();
    }
}
