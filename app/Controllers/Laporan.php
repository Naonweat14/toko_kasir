<?php

namespace App\Controllers;
use App\Models\ModelProduk;
use App\Models\ModelKategori;
use App\Models\ModelSatuan;
use App\Models\ModelAdmin;

use App\Controllers\BaseController;

class Laporan extends BaseController
{
    public function __construct()
    {
        $this-> ModelProduk= new ModelProduk();
        $this-> ModelKategori= new ModelKategori();
        $this-> ModelSatuan= new ModelSatuan();
        $this-> ModelAdmin= new ModelAdmin();
    }
   public function PrintDataProduk()
   {
    $data = [
        'judul' => 'Laporan Data Produk',
        'produk' => $this->ModelProduk->AllData(),
        'web' => $this->ModelAdmin->DetailData(),
     ];
     return view('laporan/v_template_print_laporan', $data);
    }
    
    public function LaporanHarian()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Harian',
            'menu' => 'laporan',
            'submenu' => 'laporan-harian',
            'page' => 'laporan/v_laporan_harian',
         ];
         return view('v_template', $data); 
    }
}
