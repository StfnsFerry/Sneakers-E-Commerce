<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\UserModel;
use App\Models\KeranjangModel;

class Pembeli extends BaseController
{
    public $keranjangModel;
    public $produkModel;
    public $userModel;


    public function __construct()
    {
        $this->keranjangModel = new KeranjangModel();
        $this->produkModel = new ProdukModel();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $data = [
            "title"=> "Home",
        ];
        return view('dashboard-pembeli/index', $data);
    }

    public function keranjang()
    {
        // $data  = [
        //     'title' => 'keranjang',
        //     'keranjang' => $this->keranjangModel->getKeranjang(),
            
        // ];
        return view('dashboard-pembeli/keranjang');
    }

    // public function store()
    // {
    //     $this->keranjangModel->saveKeranjang([
    //         'id_produk' => $this->request->getVar('id_produk'),
    //         'alamat' => $this->request->getVar('alamat'),
    //     ]);
    //     return redirect()->to('/user/keranjang');
    // }

    public function destroy($id)
    {
        $result = $this->keranjangModel->deleteKeranjang($id);
        if (!$result){
            return redirect()->back()->with('error', "Gagal Menghapus Data");
        }
    
        return redirect()->to(base_url('/user/keranjang'))
        ->with('success', 'Berhasil Menghapus Data');
    }

    public function pemesanan()
    {
        return view('dashboard-pembeli/pemesanan');
    }

    public function pengembalian()
    {
        return view('dashboard-pembeli/pengembalian');
    }

    public function profile()
    {
        return view('dashboard-pembeli/profile');
    }

    public function edit_profile()
    {
        return view('dashboard-pembeli/edit_profile');
    }



    // public function store()
    // {
    //     $path = 'assets\img\undraw_profile_1.svg';
    //     $user_image = $this->request->getFile('user_image');
    //     $username = $user_image->getRandomName();
    //     if ($user_image->move($path, $username)) {
    //     $user_image = base_url($path . $username);
    //     }
    //     return redirect()->to('/user/profile');
    // }


}
