@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Halaman Utama</a><i class="icon-angle-right"></i></li>
              <li><a href="pemecah-kulit">Produk</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin Pemecah Kulit</li>
            </ul>
            <h2> Mesin Pemecah Kulit </h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/hc600.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h4><strong>HC-600</strong></h4></li>
              <li>Menggunakan Rubber Roll 6"</li>
             <li> Kuat dan tahan lama</li>
                <li> Kapasitas Besar</li>
                <li> Bodi mesin lebih compact</li>
                <li> Dilengkapi oleh katup penutup corong masuk</li>
              </ul> 
            <div class="pricing-action">
              <a href="hc600" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        </div>
         <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/hc6bv.jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>HC 6BV</strong></h4></li>
              
              <li> Menggunakan Rubber Roll 6"</li>
          <li>Kuat dan Tahan Lama</li>
             <li> Konstruksi Sederhana</li>
                <li> Kapasitas Besar</li>
                <li> Bodi mesin dilengkapi blower</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="hc6bv" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
           <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/AW-60.jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>AW 60</strong></h4></li>
              <li> Menggunakan Rubber Roll 6"</li>
              <li> Kapasitas pengolahan besar</li>
              <li> Derajat pengupasan tinggi</li>
              <li> Desain Corong dibuat bulat</li>
             <li> Bodi mesin dibuat lebih compact</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="aw60" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
 
      </div>
      <div class ="row">
                       <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/HU10MPC.jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>HU10MPC</strong></h4></li>
              <li> Rasio pengupasan > 80%</li>
              <li> Menggunakan Rubber Roll ukuran 10"</li>
              <li> Teknologi otomatis dengan sistem sensor & pneumatic</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="hu10mpc" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        
                     <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/HU10PP.jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>HU10PP</strong></h4></li>
              <li> Rasio pengupasan > 95%</li>
              <li> Menggunakan Rubber Roll ukuran 10"</li>
              <li> Teknologi otomatis dengan sistem sensor & pneumatic</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="hu10pp" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </section>

@endsection