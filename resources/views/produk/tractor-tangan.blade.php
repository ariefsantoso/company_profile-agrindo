@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="tractor-tangan">Our Produk</a> <i class="icon-angle-right"></i></li>
              <li class="active">Traktor Tangan</li>
            </ul>
            <h2> Traktor Tangan</h2>
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
             <img src="{{ asset('assets/img/product/KAI-711.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h4><strong>KAI 711</strong></h4></li>
             <li><i class="icon-ok"></i> Konstruksi Sederhana</li>
                <li><i class="icon-ok"></i> Ringan dan Mudah Pengoperasiannya</li>
                <li><i class="icon-ok"></i> Cocok digunakan di sawah, ladang lereng pegunungan</li>
              </ul>
            </div>
            
            <div class="pricing-action">
               <a href="kai711" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
             <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/trg1a.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h4><strong>TRG 1A</strong></h4></li>
             <li><i class="icon-ok"></i> Konstruksi Sederhana</li>
                <li><i class="icon-ok"></i> Ringan dan Mudah Pengoperasiannya</li>
                <li><i class="icon-ok"></i> Cocok digunakan di sawah, ladang lereng pegunungan</li>
              </ul>
            </div>
            
            <div class="pricing-action">
               <a href="trg1a" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
               <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/trg700.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h4><strong>TRG 700</strong></h4></li>
             <li><i class="icon-ok"></i> Konstruksi Sederhana</li>
                <li><i class="icon-ok"></i> Ringan dan Mudah Pengoperasiannya</li>
                <li><i class="icon-ok"></i> Cocok digunakan di sawah, ladang lereng pegunungan</li>
              </ul>
            </div>
            
            <div class="pricing-action">
               <a href="trg700" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>

    
      </div>

    </div>
  </section>

@endsection