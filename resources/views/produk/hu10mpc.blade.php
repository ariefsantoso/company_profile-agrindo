@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="pemecah-kulit">Mesin Pemecah Kulit</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin HU10PP</li>
            </ul>
            <h2> Mesin HU10PP</h2>
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
            
             <img src="{{ asset('assets/img/product/milling-unit/HU10PP.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span8">
        <p>Mesin HU10PP digunakan untuk mengupas kulit gabah menjadi beras pecah kulit (BPK) dengan hasil sempurna dan 
        rasio pengupasan yang tinggi</p>
        <table class="table table-bordered">
        <tr>
        <td><strong>#</strong></td>
        <td><strong>Spesifikasi</strong></td>
        </tr>
        <tr>
        <td>Model</td>
        <td>HU10PP</td>
        </tr>
        <tr>
        <td>Kapasitas</td>
        <td>3,5 - 5,0 Ton/Jam</td>
        </tr>
        <tr>
        <td>Daya yang dibutuhkan</td>
        <td>7,5 kW / 10 HP - 4P</td>
        </tr>
        <tr>
        <td>Putaran poros utama</td>
        <td>1020 rpm</td>
        </tr><tr>
        <td>Ukuran Roll Karet</td>
        <td>10 x 10 inch</td>
        </tr>
        <tr>
        <td>Berat</td>
        <td>350 Kg</td>
        </tr>
        </table>
          
        </div>
        <div class="span12">
              <a href="brosur_hu10mpc" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>

    </div>
  </section>


@endsection