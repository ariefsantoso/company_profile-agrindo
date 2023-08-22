@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="">Produk</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin Pembersih Gabah</li>
            </ul>
            <h2> Mesin Pembersih Gabah </h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/SCA-2H.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h4><strong>Seed Cleaner A2H</strong></h4></li>
              <li>Dapat digunakan untuk padi, shorgum, jagung, dll</li>
             <li>Efisiensi tinggi</li>
                <li>Konstruksi yang sederhana namun kokoh</li>
                <li>Pengoperasian dan pemeliharaan yang sangat mudah</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="sca2h" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
         <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/pc-series.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h4><strong>PC Series</strong></h4></li>
              <li>Untuk membersihkan biji-bijian</li>
             <li>Terdapat 2 tipe mesin</li>
             <li>&nbsp;</li>
             <li>&nbsp;</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="pcseries" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
         <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/ASC.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h4><strong>ASC Series</strong></h4></li>
              <li>Untuk membersihkan biji-bijian</li>
             <li>Terdapat 2 tipe mesin</li>
             <li>Dapat digunakan untuk padi kering dan basah</li>
             <li>&nbsp;</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="ascseries" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
               <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/APC-3.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h4><strong>APC 3</strong></h4></li>
              <li>Kapasitas 3 Ton/jam</li>
             <li>Daya yang di butuhkan 2,2 kW / 3HP - 4P</li>
             <li>Putaran Poros Utama 470-480 rpm</li>
             <li>&nbsp;</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="apc3" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
                 <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/APC-5.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h4><strong>APC 5</strong></h4></li>
              <li>Kapasitas 5 Ton/jam</li>
             <li>Daya yang di butuhkan 2,2 kW / 3HP - 4P</li>
             <li>Putaran Poros Utama 440 rpm</li>
             <li>&nbsp;</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="apc5" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection