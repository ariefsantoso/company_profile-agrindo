@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="pengering-biji-bijian">Produk</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin Pengering</li>
            </ul>
            <h2> Mesin Pengering Padi</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/adl.jpg') }}"/>
            </div>
            <div class="pricing-content">
              <ul>
              <li><h4><strong>ADL Series</strong></h4></li>
              <li> Untuk mengeringkan biji-bijian</li>
                <li> Input padi, jagung, dan kedelai</li>
                <li> Laju pengeringan 1 - 2.5 %/jam</li>
                <li> Sumber pemanas dari Burner gas/tungku sekam</li>
                <li> Panel dilengkapi HMI, Sensor Kadar Air, Operasional Otomatis</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="adlseries" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
              
         <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/vrd.jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>VRD Series</strong></h4></li>
               <li> Untuk mengeringkan biji-bijian</li>
                <li> Input padi, jagung, kedelai, dll</li>
                <li> Laju pengeringan 0.8 - 1.3 %/jam</li>
                <li> Sumber pemanas dari Burner gas/tungku sekam</li>
                 <li> Panel dilengkapi HMI, Sensor Kadar Air, Operasional Otomatis</li>
              </ul>
            </div>
            
            <div class="pricing-action">
             <a href="vrdseries" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        
          <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/abd3200m(gas).jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>ABD 3200M</strong></h4></li>
              <li> Untuk mengeringkan biji-bijian</li>
                <li> Input padi, jagung, kedelai, dll</li>
                 <li> Laju pengeringan 0.5 - 1 %/jam</li>   
                 <li> Sumber pemanas dari Tungku Sekam</li>
                 <li> Dilengkapi pengaduk untuk membalik material secara otomatis</li>
              </ul>
            </div>
            
            <div class="pricing-action">
              <a href="abd3200m_gas" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        
            <div class="span4">
          <div class="pricing-box-wrap special">
          
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/abd3200m(ahf).jpg') }}"/>
            </div>

           <div class="pricing-content">
              <ul>
              <li><h4><strong>ABD 3200M (AHF)</strong></h4></li>
              <li>Untuk mengeringkan biji-bijian</li>
                <li>Input padi, jagung, kedelai, dll</li>
                 <li>Laju pengeringan 0.8 - 1.2 %/jam</li>   
                 <li>Sumber pemanas dari Tungku Sekam</li>
                 <li>Dilengkapi pengaduk untuk membalik material secara otomatis</li>
              
              </ul>
            </div>
            
            <div class="pricing-action">
              <a href="abd3200m_ahf" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="pricing-box-wrap special">
          
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/fluidized.jpg') }}"/>
            </div>

           <div class="pricing-content">
              <ul>
              <li><h4><strong>FLUIDIZED</strong></h4></li>
              <li>Untuk mengeringkan biji-bijian (padi, jagung, kedelai, dll)</li>
                 <li>Laju pengeringan 4 - 6 %/jam</li>   
                 <li>Sumber pemanas dari Tungku Sekam</li>
                 <li>Terdapat 2 Blower injeksi panas</li>
              <li>Kutu gabah akan mati karena injeksi panas tinggi</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="fluidized" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
               <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/cyclonic.jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>CYCLONIC HUSK FURNACE</strong></h4></li>
              <li>Terdapat 5 jenis model</li>
              <li>Untuk mengeringkan biji-bijian</li>   
              <li>Input padi, jagung, kedelai, dll</li>
                 <li>Temperature Udara Panas 70-300 C</li>   
                 <li>Volume Arang Sekam 30-50 C</li>
                 <li>&nbsp;</li>
              </ul>
            </div>
            <div class="pricing-action">
             <a href="cyclonic" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
         <div class="span4">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/indirect.jpg') }}"/>
            </div>
           <div class="pricing-content">
              <ul>
              <li><h4><strong>INDIRECT (AHF 100i)</strong></h4></li>
              <li>Untuk mengeringkan biji-bijian (padi, jagung, kedelai, dll)</li>
              <li>Temperature Udara Panas 70-200 C</li>
              <li>Kebutuhan Sekam 25-40 Kg/Jam</li>
              <li>Volume Arang Sekam 30-50 C</li>
              </ul>
            </div>
            
            <div class="pricing-action">
              <a href="indirect" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
             </div>
          </div>
        </div>
  
        
      </div>

    </div>
  </section>

@endsection