@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="pemecah-kulit">Mesin Pemecah Kulit</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin HC 600</li>
            </ul>
            <h2> Mesin HC 600</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="content">
    <div class="container">
<div class="row">
         <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/hc600.jpg') }}"/>
            </div>
          </div>
        </div>
        <div class="span8">
        <table class="table table-bordered">
        <tr style="background-color:#04145e; color:white">
        <td>Spesifikasi</td>
        <td style="text-align:center;">A2</td>
        <td style="text-align:center;">A4</td>
        </tr>
          <tr>
        <td>Ukuran Roll Karet</td>
        <td colspan="2" style="text-align:center;">6 x 8.75</td>
        </tr>
         <tr>
        <td>Kapasitas</td>
        <td colspan="2" style="text-align:center;">1200 - 1500 kg/jam</td>
        </tr>
         <tr>
        <td>Putaran poros utama</td>
        <td colspan="2" style="text-align:center;">1050 rpm</td>
        </tr>
          <tr>
        <td>Daya Mesin</td>
        <td style="text-align:center;">7 Hp</td>
        <td style="text-align:center;">6.5 Hp</td>
        </tr>
          <tr>
        <td>Dimensi</td>
        <td style="text-align:center;">820 mm x 890 mm x 1600 mm</td>
        <td style="text-align:center;">890 mm x 925 mm x 1600 mm</td>
        </tr>
        <tr>
        <td>Berat Tanpa Penggerak</td>
        <td style="text-align:center;">190 Kg</td>
        <td style="text-align:center;">174 Kg</td>
        </tr>
        </table>
        </div>
        <div class="span12">
       <strong>FUNGSI & KEISTIMEWAAN</strong><br>
       1. Mesin Pecah Kulit HC 600 ini dirancang secara khusus oleh ISEKI - JAPAN guna mengupas kulit gabah sesuai varietas padi yang di tanam di Indonesia.<br>
       2. Konstruksinya kokoh dan tahan terhadap beban yang berubah - ubah (fluktuaktif).<br>
       3. Bentuknya sederhana sehingga pengoperasian & perawatannya mudah. <br>
       4. Dilengkapi katup penutup corong masuk yang bekerja secara otomatis, bila putaran mesin turun hingga 850 rpm.<br>
       5. Bodi mesin ini dibuat kompak, sehingga menjamin tingkat kebersihan beras pecah kulit. <br>
       6. Sangat cocok dipakai untuk penggilingan padi baik yang berskala kecil, menengah maupun besar.
       
        </div>
        <div class="span4">
            <img src="{{ asset('assets/img/arsitektur_mesin/komponen_utama.jpg') }}"/>
        </div>
        <div class="span4">
            <img src="{{ asset('assets/img/arsitektur_mesin/proses_pengupasan.jpg') }}"/>
        </div>
    
          <div class="span12">
            <a href="hc600" class="btn btn-medium btn-theme">Download Brosur</a>
        </div>
        
      </div>
    </div>
  </section>
@endsection