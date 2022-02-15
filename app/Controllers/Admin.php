<?php

namespace App\Controllers;

// use App\Database\Migrations\Obat;
use App\Models\ObatModel;

class Admin extends BaseController
{
    protected $obatModel;

    public function __construct()
    {
        $this->obatModel = new ObatModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Apotek Sederhana',
            'obat' => $this->obatModel->findAll()
        ];
        return view('admin/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Obat',
            'obat' => $this->obatModel->getObat($id)
        ];
        return view('admin/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Produk|Apotek Sederhana',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'nama' => [
                'rules'     => 'required|is_unique[obat.nama_obat]',
                'errors'    => [
                    'required'  => '{field} produk tidak boleh kosong.',
                    'is_unique' => '{field} produk sudah terdaftar, silahkan cek kembali.'
                ]
            ],
            'jenis' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} produk tidak boleh kosong'
                ]
            ],
            'harga' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} produk tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} produk tidak boleh kosong'
                ]
            ]
        ])) {
            return redirect()->to('/admin/create')->withInput();
        }

        //mengambil data dari form dan save data
        $this->obatModel->save([
            'nama_obat'     => $this->request->getVar('nama'),
            'jenis_obat'    => $this->request->getVar('jenis'),
            'harga'         => $this->request->getVar('harga'),
            'deskripsi'     => $this->request->getVar('deskripsi'),
            'sampul'        => $this->request->getVar('sampul')
        ]);

        //buat session untuk message bahwa data berhasil di tambahkan
        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan');

        //kembali ke
        return redirect()->to('/admin');
    }
}
