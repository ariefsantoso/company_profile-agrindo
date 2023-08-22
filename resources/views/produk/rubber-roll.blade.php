@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
             <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="rubber-roll">Produk</a> <i class="icon-angle-right"></i></li>
              
              <li class="active">Rubber Roll</li>
            </ul>
            <h2>Product Rubber Roll</h2>
          
          </div>
          
        </div>
      </div>
    </div>
  </section>
<section id="content">
    <div class="container">
      <div class="row">
        <div class="span12">
         <h4 class="title"> Mengapa Rubber <strong>Roll Agrindo?</strong> </h4>
          <p>
          Kami sangat menjaga kualitas dengan selalu menggunakan bahan karet pilihan, sehingga rubber roll yang kami miliki mampu menyelesaikan gilingan dengan tetap menjaga kualitas hasil gilingan yang tidak merubah bentuk beras (tetap utuh tanpa patah) karena kami sangat menyadari bahwa bentuk beras menentukan harga.
           </p>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="service-box aligncenter flyLeft">
            <div class="icon">
              <i class="icon-circled icon-bgprimary icon-cogs icon-4x"></i>
            </div>
            <h5>Multi <span class="colored">Varian</span></h5>
            <p>
             Agrindo Rubber Roll hadir dengan berbagai macam tipe produk rubber roll dan berbagai jenis ukuran yang dapat menyesuaikan kebutuhan gilingan beras anda.
            </p>
          </div>
        </div>
        <div class="span3">
          <div class="service-box aligncenter flyIn">
            <div class="icon">
              <i class="icon-circled icon-bgsuccess icon-beaker icon-4x"></i>
            </div>
            <h5>Lebih <span class="colored">Efisien</span></h5>
            <p>
           Apapun bentuk dan kondisi biji padi yang anda miliki, semua dapat diproses dengan cepat dan hasilnya juga tepat karena hanya cukup dengan sekali gilingan saja.
            </p>
          </div>
        </div>

        <div class="span3">
          <div class="service-box aligncenter flyRight">
            <div class="icon">
              <i class="icon-circled icon-bgwarning icon-leaf icon-4x"></i>
            </div>
            <h5>Berkualitas <span class="colored">Tinggi</span></h5>
            <p>
            Terbuat dari bahan karet pilihan dan berkualitas yang sudah teruji kekuatannya sehingga tetap menjaga kualitas hasil gilingan dengan tidak merubah bentuk beras / tetap utuh tanpa patah.
            </p>
            </div>
        </div>
        <div class="span3">
          <div class="service-box aligncenter flyRight">
            <div class="icon">
              <i class="icon-circled icon-bgdanger icon-legal icon-4x"></i>
            </div>
            <h5>Produk <span class="colored">Bergaransi</span></h5>
            <p>
             Rubber Roll Agrindo dapat disimpan hingga 2 tahun. Jika terjadi kerusakan pada produk dapat dilakukan klaim dan diganti dengan produk yang baru.
            </p>
            </div>
        </div>
      </div>
     
  </section>
  <section id="content">
    <div class="container">
<div class="row">

        <div class="span12">
     <h4 class="title">Varian Product  <strong>Rubber Roll</strong> </h4>
        </div>
       <div class="span3">
          <div class="pricing-box-wrap special">
           
            <div>
              <img src="{{ asset('assets/img/product/rubber_roll/RR-XL-min.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              
                <li><h2><strong>Agrindo XL</strong></h2></li>
                <li> Berbahan Baku SBR</li>
                <li> Hardness antara 90-92 Shore A</li>
                <li> Tingkat beras patah kecil</li>
          
              </ul>
            </div>
            <div class="pricing-action">
              <a href="xl" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
  
       
         <div class="span3">
          <div class="pricing-box-wrap special">
           
            <div>
              <img src="{{ asset('assets/img/product/rubber_roll/RR-Supercamel.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>Super Camel</strong></h2></li>
                <li>Berbahan baku SBR</li>
                <li>Hardness antara 90-92 Shore A</li>
                <li>Tersedia dalam berbagai ukuran</li>
                
              </ul>
            </div>
            <div class="pricing-action">
              <a href="sc" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        <div class="span3">
          <div class="pricing-box-wrap special">
         
            <div>
             <img src="{{ asset('assets/img/product/rubber_roll/RR-Golden Tiger.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>Golden Tiger</strong></h2></li>
             <li> Berbahan baku SBR</li>
             
                <li> Hardness antara 90-92 Shore A</li>
                <li> Tersedia ukuran 6" dan 10"</li>
          
              </ul>
            </div>
            
            <div class="pricing-action">
             <a href="gt" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        <div class="span3">
          <div class="pricing-box-wrap special">
            
            <div>
              <img src="{{ asset('assets/img/product/rubber_roll/RR-Camel.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>Camel</strong></h2></li>
               <li> Berbahan Baku SBR</li>
                <li> Hardness antara 90-92 Shore A</li>
                <li> Tersedia dalam berbagai ukuran</li>
               
              </ul>
            </div>
            <div class="pricing-action">
              <a href="ca" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
 
      </div>

      <!-- divider -->
      <div class="row">
        <div class="span12">
          <div class="solidline"></div>
        </div>
      </div>
      <!-- end divider -->
<div class="row">
        <div class="span12">
        
        </div>
        
     
         
<div class="span3">
          <div class="pricing-box-wrap special">
          
            <div>
             <img src="{{ asset('assets/img/product/rubber_roll/RR-New Zebra.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>New Zebra</strong></h2></li>
                <li> Berbahan baku NBR</li>
                <li> Hardness antara 92-94 Shore A</li>
                 <li> Karet Lebih Tahan Panas</li>
                 
              </ul>
            </div>
            <div class="pricing-action">
              <a href="nz" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        <div class="span3">
          <div class="pricing-box-wrap special">
           
            <div>
              <img src="{{ asset('assets/img/product/rubber_roll/RR-Grantex.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>Grantex</strong></h2></li>
              <li> Berbahan baku SBR</li>
              <li> Hardness antara 90-92 Shore A</li>
                <li> Efisiensi Pengupasan Tinggi</li>
                
              </ul>
            </div>
            <div class="pricing-action">
             <a href="gr" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
   
         <div class="span3">
          <div class="pricing-box-wrap special">
          
            <div>
             <img src="{{ asset('assets/img/product/rubber_roll/RR-Gladiator.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>Gladiator</strong></h2></li>
            <li>Berbahan baku SBR</li>
              <li> Hardness antara 90-92 Shore A</li>
                <li> Tersedia ukuran 6" dan 10"</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="gl" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
        <div class="span3">
          <div class="pricing-box-wrap special">
          
            <div>
             <img src="{{ asset('assets/img/product/turangga-min.jpg') }}"/>
            </div>

            <div class="pricing-content">
              <ul>
              <li><h2><strong>Turangga</strong></h2></li>
            <li>Berbahan baku SBR</li>
              <li> Hardness antara 90-92 Shore A</li>
                <li> Tingkat beras patah kecil</li>
              </ul>
            </div>
            <div class="pricing-action">
              <a href="tr" class="btn btn-medium btn-theme"><i class="icon-tag"></i> Detail Product</a>
            </div>
          </div>
        </div>
      </div>
       <div class="row">
        <div class="span12">
          <div class="solidline"></div>
        </div>
      </div>
<div class="row">
        <div class="span12">
      
        </div>
       
          
  
        
        

      </div>

    </div>
  </section>@endsection