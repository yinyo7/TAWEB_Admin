<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use CodeIgniter\HTTP\Request;

class Admin extends BaseController
{
   protected $pegawaiModel;
   public function __construct()
   {
      $this->pegawaiModel = new pegawaiModel();
   }
   public function index()
   {
      $pegawai = $this->pegawaiModel->findAll();
      $data = [
         'judul' => 'Dashboard',
         'pegawai' => $pegawai
      ];
      return view('admin/dashboard', $data);
   }
   public function tambah()
   {
      $data = [
         'judul' => 'Form tambah data Pegawai'
      ];
      return view('admin/tambah', $data);
   }

   public function ubah($id)
   {
      $data = [
         'judul' => 'Form ubah data pegawai',
         'pegawai' => $this->pegawaiModel->getPegawai($id)
      ];
      return view('admin/ubah', $data);
   }

   public function detail($id)
   {
      $data = [
         'judul' => 'Detail pegawai',
         'pegawai' => $this->pegawaiModel->getPegawai($id)
      ];
      return view('admin/detail', $data);
   }

   public function save()
   {
      // ambil foto
      $foto = $this->request->getFile('foto');
      // buat nama random untuk foto
      $namaFoto = $foto->getRandomName();
      //pindahkan file ke folder images
      $foto->move('images', $namaFoto);
      $this->pegawaiModel->save([
         'nama' => $this->request->getVar('nama'),
         'tempat_lahir' => $this->request->getVar('tempat_lahir'),
         'alamat' => $this->request->getVar('alamat'),
         'agama' => $this->request->getVar('agama'),
         'no_tlp' => $this->request->getVar('no_tlp'),
         'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
         'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
         'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
         'foto' => $namaFoto
      ]);

      session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

      return redirect()->to('/');
   }

   public function hapus($id)
   {
      // cari gambar berdasarkan id
      $pegawai = $this->pegawaiModel->find($id);
      // hapus gambar di direktori
      unlink('images/' . $pegawai['foto']);
      $this->pegawaiModel->delete($id);
      session()->setFlashdata('pesan', 'Data berhasil dihapus');
      return redirect('/');
   }

   public function update($id)
   {
      $foto = $this->request->getFile('foto');
      // buat nama foto random
      $namaFoto = $foto->getRandomName();
      // pindahkan gambar
      $foto->move('images', $namaFoto);

      $this->pegawaiModel->save([
         'id' => $id,
         'nama' => $this->request->getVar('nama'),
         'tempat_lahir' => $this->request->getVar('tempat_lahir'),
         'alamat' => $this->request->getVar('alamat'),
         'agama' => $this->request->getVar('agama'),
         'no_tlp' => $this->request->getVar('no_tlp'),
         'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
         'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
         'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
         'foto' => $namaFoto
      ]);

      session()->setFlashdata('pesan', 'Data berhasil diubah');

      return redirect('/');
   }
}
