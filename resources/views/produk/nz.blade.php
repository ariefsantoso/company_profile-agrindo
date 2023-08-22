@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="rubber-roll">Our Product</a> <i class="icon-angle-right"></i></li>
              <li class="active">Detail New Zebra</li>n
            </ul>
            <h2>New Zebra</h2>
          
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
        
            <div align="center">
              <img src="{{ assset('assets/img/product/detail_nz/NZ6-min.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>6"</strong></h2></li>
                 <li><i class="icon-ok"></i> Kapasitas giling 100-107 ton</li>
                 <li><i class="icon-ok"></i> Digunakan mesin <a href="hc600"><strong>HC 600</strong></a> <a href="hc6bv"><strong>HC 6 BV</strong></a></li>

              </ul>
            </div>
          
          </div>
        </div>
     
      
         <div class="span4">
          <div class="pricing-box-wrap special">
          
            <div align="center">
             <img src="{{ assset('assets/img/product/detail_nz/NZ10-min.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>10"</strong></h2></li>
                <li><i class="icon-ok"></i> Kapasitas giling gabah 170-190 ton</li>
             <li><i class="icon-ok"></i> Digunakan mesin <a href="hu10pp"><strong>HU10PP</strong> </a></li>
               
              </ul>
            </div>
          
          </div>
        </div>
    
      

      </div>

      
      <!-- end divider -->

       <div class="row">
        <div class="span12">
          <div class="solidline"></div>
        </div>
      </div>


    </div>
  </section>

@endsection