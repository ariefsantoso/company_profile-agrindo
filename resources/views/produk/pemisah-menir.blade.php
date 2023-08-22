@extends('layout.main')

@section('content')

<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="inner-heading">
          <ul class="breadcrumb">
           <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
            <li><a href="pemisah-menir">Produk</a> <i class="icon-angle-right"></i></li>
            <li class="active">Mesin Pemisah</li>
          </ul>
          <h2> Mesin Pemisah Gabah & Beras </h2>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
<div class="row">
      <div class="span12">
  
      </div>
    
  

      
   <div class="span4">
        <div class="pricing-box-wrap special">
          <div>
           <img src="{{ asset('assets/img/product/milling-unit/RPS10A.jpg') }}"/>
          </div>
         <div class="pricing-content">
            <ul>
    <li><h4><strong>RPS 10A</strong></h4></li>
           <li>Mudah dioperasikan</li>
              <li> Perawatan mudah</li>
              <li> Hasil pemisahan beras pecah kulit dan gabah lebih sempurna</li>
            </ul>
          </div>
          <div class="pricing-action">
            <a href="rps10a" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
          </div>
        </div>
      </div>
     
        <div class="span4">
        <div class="pricing-box-wrap special">
          <div>
           <img src="{{ asset('assets/img/product/milling-unit/ARS-3000.jpg') }}"/>
          </div>
         <div class="pricing-content">
            <ul>
    <li><h4><strong>ARS 3000</strong></h4></li>
           <li>Konstruksi mesin kokoh dan sederhana</li>
              <li> Pengoperasian dan perawatan mudah</li>
              <li> Akurasi proses pemisahan tinggi</li>
            </ul>
          </div>
          <div class="pricing-action">
            <a href="ars3000" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
          </div>
        </div>
      </div>
        <div class="span4">
        <div class="pricing-box-wrap special">
          <div>
           <img src="{{ asset('assets/img/product/milling-unit/avs.jpg') }}"/>
          </div>
         <div class="pricing-content">
            <ul>
    <li><h4><strong>AVS-1</strong></h4></li>
           <li>Kapasitas hingga 2,5 ton </li>
              <li> Daya yang dibutuhkan rendah</li>
              <li> Akurasi proses pemisahan tinggi</li>
            </ul>
          </div>
          <div class="pricing-action">
            <a href="avs" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection