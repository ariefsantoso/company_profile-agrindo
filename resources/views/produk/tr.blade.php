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
              <li class="active">Turangga</li>
            </ul>
            <h2>Turangga</h2>
          
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
             <img src="{{ asset('assets/img/product/detail_tr/TR4-min.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h2><strong>4"</strong></h2></li>
                <li><i class="icon-ok"></i> Kapasitas giling gabah 36 ton</li>
                <li><i class="icon-ok"></i> Digunakan mesin <a href="hc600"><strong>HC 600</strong></a>, <a href="hc6bv"><strong>HC 6 BV</strong></a>
              </ul>
            </div>
          
          </div>
        </div>
    
               <div class="span4">
          <div class="pricing-box-wrap special">
          
            <div>
             <img src="{{ asset('assets/img/product/detail_tr/TR6-min.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h2><strong>6"</strong></h2></li>
                <li><i class="icon-ok"></i> Kapasitas giling gabah 54 ton</li>
                <li><i class="icon-ok"></i> Digunakan mesin <a href="hc600"><strong>HC 600</strong></a>, <a href="hc6bv"><strong>HC 6 BV</strong></a>
              
            
               
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