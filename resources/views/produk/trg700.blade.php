@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="tractor-tangan">Traktor Tangan</a> <i class="icon-angle-right"></i></li>
              <li class="active">Traktor KAI-711</li>
            </ul>
            <h2> Traktor KAI 711</h2>
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
             <img src="{{ asset('assets/img/product/trg700.jpg') }}"/>
            </div>
          </div>
        </div>
        
        <div class="span6">
        <table class="table table-bordered">
        <tr>
        <td>#</td>
        <td>Spesifikasi</td>
        </tr>
        <tr>
        <td>Model</td>
        <td>KAI-711</td>
        </tr>
        <tr>
        <td>Mesin</td>
        <td>Diesel Engine ( 10-11hp)</td>
        </tr>
        
        <tr>
        <td>Ukuran Dimensi</td>
        <td>2390 x 930 x 1150 mm</td>
        </tr>
        <tr>   
        <td>Sistem Kopling</td>      
        <td>Belt, Tension</td>
        </tr>
        <tr>
        <td>Sistem Kemudi</td>
        
        <td>Dog-Clutch</td>
        </tr>
        <tr>
        <td>Sistem Transmisi</td>
        <td>2 V-belt</td>
        </tr>
        <tr>
        <td>Putaran Mesin</td>
        <td>2400 rpm</td>
        </tr>
              <tr>
        <td>Gear Box Transmisi Utama</td>
        <td>Full Gear</td>
        </tr>
              <tr>
        <td>Berat Tanpa Mesin</td>
        <td>254,8 Kg</td>
        </tr>
              <tr>
        <td>Lebar Kerja Rotary</td>
        <td>254,8 Kg</td>
        </tr>
              <tr>
        <td>Jumlah Pisau</td>
        <td>18</td>
        </tr>
              <tr>
        <td>Kecepatan Rotary</td>
        <td>200-300 rpm</td>
        </tr>
        </table>
        </div>
        <div class="span12">
          <p><strong>Deskripsi</strong></p>
          <p>Traktor Tangan (Hand Tractor) KAI - 711 memiliki konstruksi yang sederhana dengan menggunakan motor diesel 4 langkah. Mesin ini cukup ringan dan mudah dikemudikan karena menggunakan sistem Gear Dog Clutch sehingga cocok digunakan di sawah, ladang di 
lereng-lereng pegunungan.</P>
          <div class="span12">
              <div class="row">
                  <div class="span2">
               <img src="{{ asset('assets/img/product/detail_tractor/bajak-ganda.jpg') }}"/>
          </div>
              <div class="span2">
               <img src="{{ asset('assets/img/product/detail_tractor/roda-apung.jpg') }}"/>
          </div>
              <div class="span2">
               <img src="{{ asset('assets/img/product/detail_tractor/roda-bajak.jpg') }}"/>
          </div>
              <div class="span2">
               <img src="{{ asset('assets/img/product/detail_tractor/roda-sangkar.jpg') }}"/>
          </div>
              <div class="span2">
               <img src="{{ asset('assets/img/product/detail_tractor/roda-tanah-basah.jpg') }}"/>
          </div>
              <div class="span2">
               <img src="{{ asset('assets/img/product/detail_tractor/pengapung.jpg') }}"/>
          </div>
              </div>
              
              
          </div>
          
        </div>

      </div>
    </div>
  </section>

@endsection