@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="perontokpadi">Perontok padi</a> <i class="icon-angle-right"></i></li>
              <li class="active">TP 1000</li>
            </ul>
            <h2> Mesin TP 1000 </h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container">
<div class="row">
         <div class="span5">
          <div class="pricing-box-wrap special">
            <div align="center">
             <img src="{{ asset('assets/img/product/pasca-panen/TP1000-NEW-min.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span7">
           <table class="table table-bordered">
           <tr style="background-color:#04145e; color:white">
           <td><strong>#</strong></td>
           <td><strong>Spesifikasi</strong></td>
           </tr>
           <tr>
           <td>Model</td>
           <td>TP 1000</td>
           </tr>
           <tr>
           <td>Kapasitas</td>
           <td>1200 - 1400 kg/jam</td>
           </tr>
           <tr>
           <td>Putaran</td>
           <td>600 - 650 rpm</td>
           </tr>
           <tr>
           <td>Tenaga Penggerak</td>
           <td>7 Hp</td>
           </tr>
           <tr>
           <td>Dimensi</td>
           <td>1565 x 1120 x 1275 mm</td>
           </tr>
           <tr>
           <td>Berat Tanpa Penggerak</td>
           <td>135 Kg</td>
           </tr>
           <tr>
           <td>Panjang Jerami</td>
           <td>400 - 600 mm</td>
           </tr>
           
           </table>
      
        </div>
       
      </div>

    </div>
  </section>

@endsection