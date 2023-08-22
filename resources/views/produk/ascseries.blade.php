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
              
              <li class="active">Mesin ASC Series</li>
            </ul>
            <h2> Mesin ASC Series</h2>
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
              <img src="{{ asset('assets/img/product/milling-unit/ASC-150.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>ASC-150</strong></h2></li>
                <li><i class="icon-ok"></i> <strong>Kapasitas input </strong><br>6000 kg / jam (Padi) <br> 10000 kg/jam (Jagung)</li>
                 <li><i class="icon-ok"></i> <strong>Tenaga yang dibutuhkan</strong> <br> 2,2 kW / 3 HP</li>
                <li><i class="icon-ok"></i> <strong>Dimensi</strong> <br> 2790 mm x 1940 mm x 2545 mm <br></li>
          
              </ul>
            </div>
          </div>
        </div>
        
    <div class="span6">
          <div class="pricing-box-wrap special">
        
            <div>
              <img src="{{ asset('assets/img/product/milling-unit/ASC-250.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>ASC-250</strong></h2></li>
              <li><i class="icon-ok"></i> <strong>Kapasitas input </strong><br>18000 kg / jam (Padi) <br> 20000 ton/jam (Jagung)</li>
                 <li><i class="icon-ok"></i> <strong>Tenaga yang dibutuhkan</strong> <br> 14,91 kW / 20 HP</li>
                <li><i class="icon-ok"></i> <strong>Dimensi</strong> <br> 3425 mm x 2070 mm x 3325 mm </li>
          
              </ul>
            </div>
          </div>
        </div>
         <div class="span12">
              <a href="brosur_asc" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>

    </div>
    
  
  </section>

@endsection