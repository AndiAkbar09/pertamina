<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PendaftaranController extends Controller{

    public function __construct()

    {
        $this->pendaftaran = new Pendaftaran();
    }

    public function index()
    {
        return view('pendaftaran.index');
    }

    public function create()
    {
        $getid  = $this->pendaftaran->temukanId();

        return view('pendaftaran.create', compact('getid'));
    }
    public function store()
    {
        $pendaftaran = Pendaftaran::create($this->validateRequest());
        $this->storeImage($pendaftaran);
        return redirect()->back()->with(['success' => 'Pendaftaran Sukses']);
    }
        private function validateRequest(){
            return tap(request()->validate([
                'user_id'           => 'required',
                'nama_lengkap'      => 'required',
                'nik'               => 'required',
                'tanggal'           => 'required',
                'status'            => 'required',
                'no_telp'           => 'required',
                'map_laring'        => 'file|image|max:5000',
            ]), function(){
                if(request()->hasFile('map_laring')){
                    request()->validate([
                        'map_laring'    => 'file|image|max:5000',
                    ]);
                }
            }); 
        }

        private function storeImage($pendaftaran){
            if(request()->has('map_laring')){
                $pendaftaran->update([
                    'map_laring' => request()->map_laring->store('uploads','public'),
                ]);
                $image = Image::make(public_path('storage/'. $pendaftaran->map_laring))->fit(300,300,null, 'top-left');
                $image->save();
            }
        }
    }

