@extends('layout.main')

@section('content')
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="inner-heading">
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
            <li><a href="#">Product</a> <i class="icon-angle-right"></i></li>
            <li class="active">Mesin Pemoles</li>
          </ul>
          <h2> Mesin Pemoles </h2>
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
           <img src="{{ asset('assets/img/product/milling-unit/KB40G.jpg') }}"/>
          </div>

          <div class="pricing-content">
            <ul>
    <li><h4><strong>SATAKE KB 40</strong></h4></li>
           <li><i class="icon-ok"></i> Kapasitas 2,5 - 3,5 Ton/Jam</li>
              <li><i class="icon-ok"></i> Mesin pemoles dengan air</li>
            </ul>
          </div>
    
          <div class="pricing-action">
            <a href="akb40" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
          </div>
        </div>
      </div>
      

  
    </div>

  </div>
</section>

@endsection