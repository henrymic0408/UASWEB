<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getAPI()
    {
        $client = new Client(['base_uri' => 'http://localhost/koperasi/api/AnggotaAPI']);
        $response = $client->request('GET', 'OrderedAnggota');
        $result = json_decode($response->getBody()->getContents(), true);
        return view('anggota', ['anggota' => $result['data']]);
    }

    public function detail($id){
        $client = new Client(['base_uri' => 'http://localhost/koperasi/api/AnggotaAPI'.$id]);
        $response = $client->request('GET', 'OrderedAnggota');
        $result = json_decode($response->getBody()->getContents(), true);
        return view('detail', ['anggota' => $result]);
    }

    public function edit($id)
    {
        $client = new Client(['base_uri' => 'http://localhost/koperasi/api/AnggotaAPI']);
        $response = $client->request('GET', 'OrderedAnggota');
        $result = json_decode($response->getBody()->getContents(), true);
        return view('anggota', ['anggota' => $result['data']]);
    }

    public function hapus($id){
        $client = new Client(['base_uri' => 'http://localhost/koperasi/api/AnggotaAPI'.$id]);
        $response = $client->request('DELETE', 'OrderedAnggota');
        $result = json_decode($response->getBody()->getContents(), true);
        return view('anggota', ['anggota' => $result['data']]);
    }

    //public function hapus($id)
    //{
        //$client = Http::asForm()->delete('http://localhost/apotekasek1/api/Obat', [
           // 'kode_obat' => $id
        //]);

       // if ($client['status'] == 'success') {
        //    return redirect('/obat');
       // } else {
       //     return redirect('/obat');
      //  }
    //}
}
