@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="#">Mesin Integrasi</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin ARM 1000</li>
            </ul>
            <h2> Mesin ARM 1000</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container">
<div class="row">
         <div class="span5">
          <div class="pricing-box-wrap special">
            <div align="center">
             <img src="{{ asset('assets/img/product/milling-unit/ARM1000.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span6">
        <table class="table table-bordered">
         <tr style="background-color:#04145e; color:white">
        <td ><b>#</b></td>
        <td><b>Spesifikasi</b></td>
        </tr>
        <tr>
        <td>Model</td>
        <td>ARM 1000</td>
        </tr>
        <tr>
        <td>Kapasitas</td>
        <td>1250 kg/jam</td>
        </tr>
        <tr>
        <td>Daya mesin</td>
        <td>27 - 32 hp</td>
        </tr>
        <tr>
        <td>Dimensi Rubber Roll</td>
        <td>6" x 8.75"</td>
        </tr>
        <tr>
        <td>Putaran poros utama</td>
        <td>900 - 950 rpm</td>
        </tr>
        <tr>
        <td>Dimensi</td>
        <td>1525 mm x 1155 mm x 1930 mm</td>
        </tr>
        <tr>
        <td>Berat tanpa penggerak</td>
        <td>317 kg</td>
        </tr>
        </table>
    
        </div>
        
        <div class="span12">
          <strong>FEATURE MESIN</strong><br>      
            1. Mekanisme pemecahan gabah & pemolesan dibuat secara terpadu untuk menjamin kelancaran operasi.<br>
            2. Dengan penampi yang sangat efisien mampu memisahkan semua kotoran, sekam & katul.<br>
            3. Hasil beras putih dan mengkilap.<br>
            4. Pemasangan dan pengoperasian mesin sangat mudah.
            
        </div>
       
         <div class="span12">
             <br>
              <a href="brosur_arm" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>

    </div>
  </section>

@endsection