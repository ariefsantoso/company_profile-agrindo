@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="pengering-biji-bijian">Mesin Pengering</a> <i class="icon-angle-right"></i></li>
              <li class="active">ADL Series</li>
            </ul>
            <h2> Mesin ADL Series</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/adl.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span6">
        <table class="table table-bordered">
        <tr>
        <td>#</td>
        <td>ADL 6</td>
         <td>ADL 10</td>
          <td>ADL 12</td>
        </tr>
          <tr>
        <td>Kapasitas Pengeringan (ton/hari)</td>
        <td>48 - 64</td>
         <td>80 - 130</td>
          <td>150 - 200</td>
        </tr>
          <tr>
        <td>Daya</td>
        <td>12.5 hp</td>
         <td>21.5 hp</td>
          <td>31.5 hp</td>
        </tr>
         <tr>
        <td>Ruang Installasi</td>
        <td>8500 x 5000 x 7800 mm</td>
         <td>8500 x 5000 x 8450 mm</td>
          <td>8500 x 5000 x 11350 mm</td>
        </tr>
         <tr>
        <td>Kapasitas tampung</td>
        <td>6 ton</td>
         <td>10 ton</td>
          <td>12 ton</td>
        </tr>
         <tr>
        <td>Temperatur</td>
        <td colspan="3">130 - 170 C</td>
        </tr>
        </table>
      
        </div>
       
      </div>

    </div>
  </section>


@endsection