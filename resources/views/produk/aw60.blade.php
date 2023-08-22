@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="pemecah-kulit">Mesin Pemecah Kulit</a> <i class="icon-angle-right"></i></li>
              
              <li class="active">Mesin HC 600</li>
            </ul>
            <h2> Mesin AW 60</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/AW-60.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span8">
              <table class="table table-bordered">
        <tr>
        <td>Spesifikasi</td>
        <td>A2</td>
        <td>A4</td>
        </tr>
          <tr>
        <td>Ukuran Roll Karet</td>
        <td colspan="2" style="text-align:center;">6 x 8.75</td>
        </tr>
         <tr>
        <td>Kapasitas</td>
        <td colspan="2" style="text-align:center;">1200 - 1500 kg/jam</td>
        </tr>
         <tr>
        <td>Putaran poros utama</td>
        <td colspan="2" style="text-align:center;">1050 rpm</td>
        </tr>
          <tr>
        <td>Daya Mesin</td>
        <td>7 Hp</td>
        <td>6.5 Hp</td>
        </tr>
          <tr>
        <td>Dimensi</td>
        <td>735 mm x 675 mm x 1570 mm</td>
        <td>850 mm x 700 mm x 1600 mm</td>
        </tr>
        <tr>
        <td>Berat Tanpa Penggerak</td>
        <td>180 Kg</td>
        <td>155 Kg</td>
        </tr>
        </table>
        
        </div>
         <div class="span12">
              <a href="brosur_AW60" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>

    </div>
  </section>


@endsection