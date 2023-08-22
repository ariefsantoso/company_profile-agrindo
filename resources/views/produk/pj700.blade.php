@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="perontokpadi">Perontok Jagung </a> <i class="icon-angle-right"></i></li>
              <li class="active">PJ 700 BR</li>
            </ul>
            <h2> Mesin PJ 700 BR</h2>
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
             <img src="{{ asset('assets/img/product/pasca-panen/PJ700BR-NEW-min.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span7">
        <table class="table table-bordered">
        <tr>
        <td><strong>#</strong></td>
        <td><strong>Spesifikasi</strong></td>
        </tr>
        <tr>
        <td>Model</td>
        <td>PJ 700 BR(S)</td>
        </tr>
        <tr>
        <td>Kapasitas pemasukan</td>
        <td>1500 - 2100 kg/jam</td>
        </tr>
        <tr>
        <td>Kebutuhan tenaga</td>
        <td>7-8 Hp</td>
        </tr>
        <tr>
        <td>Putaran poros utama</td>
        <td>650 - 700 rpm</td>
        </tr>
        <tr>
        <td>Dimensi</td>
        <td>1753 mm x 1140 mm x 1568 mm</td>
        </tr>
        <tr>
        <td>Berat tanpa penggerak</td>
        <td>173 Kg</td>
        </tr>
        </table>
          
        </div>
       
       
          <div class="span12">
              <a href="brosur_pj700br" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>

    </div>
  </section>

@endsection