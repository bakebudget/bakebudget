<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\MetodePembayaran;
use App\Models\Pembayaran;
use App\Models\RencanaPengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    //
    public function index()
    {
        $data = [
            'metode_pembayaran' => MetodePembayaran::all(),
            'pengeluaran' => RencanaPengeluaran::all(),
            'pembayaran' => Pembayaran::orderBy('tanggal_pembayaran', 'desc')->with('rencana_pengeluaran')->paginate(5)
        ];

        // dd($data);

        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view("pembayaran.index", $data);
    }

    public function tambah(){
        $data =[
            'metode' => MetodePembayaran::all('*'),
            'rencana'=> RencanaPengeluaran::all('*'),
        ];

        return view("pembayaran.tambah" , $data);
    }

    public function simpan(Request $request){
        $data = $request->validate([
            'tanggal_pembayaran' => 'required',
            'kode_metode' => 'required',
            'id_pengeluaran' => 'required',
            'nama_penerima' => 'required',
            'bukti_pembayaran' => 'mimes:png,jpg,jpeg,csv,txt,pdf',
            // 'nomor_rekening_penerima' => 'integer',
            'nominal' => 'required|integer',
        ]);

        

        // File upload location
        // $location = 'uploads';

        // Upload file
        // $file->move($location,$filename);


        if ($data):
            
            $file = $request->file('bukti_pembayaran');
            $filename = '';

            if($file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            }
            $generatedId = DB::select('SELECT procedure_kode() AS generated_id')[0]->generated_id;


            $data['id_pembayaran'] = $generatedId;
            $data['bukti_pembayaran'] = $filename;
            // dd($data);
            $dataInsert = Pembayaran::query()->create($data);
            if ($dataInsert):
                if($file){
                $file->storePubliclyAs('', $filename, 'public');
                }
                return redirect('/pembayaran')->with('success', 'Data pembayaran baru berhasil ditambah');
            else:
                return redirect('/pemayaran/tambah')->with('error', 'Data pembayaran baru Gagal ditambah');
            endif;
        endif;
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = [
            'metode_pembayaran' => MetodePembayaran::all(),
            'pengeluaran' => RencanaPengeluaran::all(),
            'pembayaran' => Pembayaran::with(['rencana_pengeluaran', 'metode_pembayaran'])->find($id)
        ];

        // dd($data['pembayaran']);

        return view('pembayaran.detail' , $data);
    }

    public function destroy(Pembayaran $pembayaran, Request $request)
    {
        $curr_pembayaran = $pembayaran->newQuery()->find($request->id);
        if (!empty($curr_pembayaran->file) && Storage::disk('public')->exists($curr_pembayaran->file)) {
            Storage::disk('public')->delete($curr_pembayaran->file);
        }
        if ($curr_pembayaran->delete()) {
            return redirect()->to('/pembayaran')->with('success','Data Pembayaran berhasil dihapus');
        } else
            return redirect()->to('/pembayaran')->with('error','Data Pembayaran gagal dihapus');
    }
}
