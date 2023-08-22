@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
             <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="dryer-plant">Produk</a> <i class="icon-angle-right"></i></li>
              
              <li class="active">Dryer Plant</li>
            </ul>
            <h2> Dryer Plant </h2>
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
             <img src="{{ asset('assets/img/product/dryer-plant/CORN-DRYER-PLANT.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h4><strong>Corn Dryer Plant</strong></h4></li>
             <li> Type ADL</li>
                <li>Kapasitas produksi 10-200 ton/hari</li>
                <li>Total Power 132 HP</li>
              </ul>
            </div>
            
            <div class="pricing-action">
              <a href="corn-dryer-plant" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            
            </div>
          </div> 
        </div>
              
         <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/dryer-plant/PADDY-DRYER-PLANT.jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>Paddy Drying Plant</strong></h4></li>
             <li> Type VRD</li>
                <li> Kapasitas produksi 10-500 ton/hari</li>
                <li>Total Power 298 HP</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="paddy-dryer-plant" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
       
          <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/dryer-plant/CLEANER-PLANT.jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>Cleaner Plant</strong></h4></li>
             <li> Kapasitas input 10-100 ton/jam</li>
             <li>Total Power 82,5 HP</li>
              
              </ul>
            </div>
            <div class="pricing-action">
              <a href="cleaner-plant" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        
      </div>

    </div>
  </section>

@endsection