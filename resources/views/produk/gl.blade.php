@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="rubber-roll">Pages</a> <i class="icon-angle-right"></i></li>
              <li class="active">Our Product</li>
            </ul>
            <h2>Gladiator</h2>
          
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container">
<div class="row">
        <div class="span4">
          <div class="pricing-box-wrap special">
        
            <div>
              <img src="{{ asset('assets/img/product/detail_gl/Gladiator-6.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>6"</strong></h2></li>
                <li><i class="icon-ok"></i> Kapasitas giling gabah 35-40 ton</li>
                 <li><i class="icon-ok"></i> Digunakan mesin <a href="hc600"><strong>HC 600</strong></a>, <a href="hc6bv"><strong>HC 6 BV</strong></a>
               
              </ul>
            </div>
          
          </div>
        </div>
         <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/detail_gl/Gladiator-10.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h2><strong>10"</strong></h2></li>
              <li><i class="icon-ok"></i> Kapasitas giling gabah 50-58 ton</li>  
              <li><i class="icon-ok"></i> Digunakan mesin  <a href="hu10pp"><strong>HU10PP</strong></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="span12">
          <div class="solidline"></div>
        </div>
      </div>


    </div>
  </section>

@endsection