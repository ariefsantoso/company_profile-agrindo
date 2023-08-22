@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="#">Our Product</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin Perontok</li>
            </ul>
            <h2> Mesin Pemerontok Padi & Jagung</h2>
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
             <img src="{{ asset('assets/img/product/pasca-panen/TPA1000MG-NEW-min.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h4><strong>TPA 1000 MG</strong></h4></li>
                <li><i class="icon-ok"></i>Mesin yang digunakan pada padi, jagung, dan kedelai</li>
              
              </ul>
            </div>
            
            <div class="pricing-action">
               <a href="tp1000mg" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
              
         <div class="span4">
          <div class="pricing-box-wrap special">
          
            <div>
             <img src="{{ asset('assets/img/product/pasca-panen/TP1000-NEW-min.jpg') }}"/>
            </div>

           <div class="pricing-content">
              <ul>
              <li><h4><strong>TPA 1000</strong></h4></li>
                <li><i class="icon-ok"></i> Mesin khusus padi dan kedelai</li>
              </ul>
            </div>
            
            <div class="pricing-action">
             <a href="tp1000" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            
            </div>
          </div>
        </div>
        
          <div class="span4">
          <div class="pricing-box-wrap special">
          
            <div>
             <img src="{{ asset('assets/img/product/pasca-panen/PJ700BR-NEW-min.jpg') }}"/>
            </div>

           <div class="pricing-content">
              <ul>
              <li><h4><strong>PJ 700 BR</strong></h4></li>
                <li><i class="icon-ok"></i> Mesin Khusus Jagung </li>
              </ul>
            </div>
            
            <div class="pricing-action">
              <a href="pj700" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
           
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection