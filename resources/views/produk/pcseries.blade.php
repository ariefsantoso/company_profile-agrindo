@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
   <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="pembersih-gabah">Mesin Pembersih Gabah</a> <i class="icon-angle-right"></i></li>
              
              <li class="active">PC Series</li>
            </ul>
            <h2> Mesin PC Series</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container">
<div class="row">
        <div class="span6">
          <div class="pricing-box-wrap special">
        
            <div>
              <img src="{{ asset('assets/img/product/milling-unit/pc150.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>PC 150</strong></h2></li>
                <li><i class="icon-ok"></i> Kapasitas input 4-6 Kg/Jam</li>
                 <li><i class="icon-ok"></i> Tenaga yang dibutuhkan 4-6 Hp</li>
                <li><i class="icon-ok"></i> Include Blower</li>
          
              </ul>
            </div>
          </div>
        </div>
        
    <div class="span6">
          <div class="pricing-box-wrap special">
        
            <div>
              <img src="{{ asset('assets/img/product/milling-unit/pc200.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>PC 200</strong></h2></li>
                <li><i class="icon-ok"></i> Kapasitas input 8-10 Kg/Jam</li>
                 <li><i class="icon-ok"></i> Tenaga yang dibutuhkan 10-11 Hp</li>
                 <li><i class="icon-ok"></i> Tidak include blower</li>
          
              </ul>
            </div>
          </div>
        </div>
       
      </div>

    </div>
  </section>
@endsection