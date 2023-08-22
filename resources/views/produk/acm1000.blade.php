@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="#">Mesin Integrasi</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin ACM 1000 F</li>
            </ul>
            <h2> Mesin ACM 1000 F</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/ACM1000.png') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span6">
        <table class="table table-bordered">
         <tr style="background-color:#04145e; color:white">
        <td ><b>#</b></td>
        <td><b>Spesifikasi</b></td>
        </tr>
        <tr>
        <td>Model</td>
        <td>ACM 1000 F</td>
        </tr>
        <tr>
        <td>Kapasitas (kg/jam)</td>
        <td>1000-1200</td>
        </tr>
        <tr>
        <td>Kebutuhan Tenaga (kW/HP)</td>
        <td>26 / 35</td>
        </tr>
        <tr>
        <td>Ukuran Rubber Roll (inch)</td>
        <td>6" x 8.75"</td>
        </tr>
        <tr>
        <td>Putaran poros utama (rpm)</td>
        <td>950</td>
        </tr>
        <tr>
        <td>Dimensi (mm)</td>
        <td>2812 x 1539 x 4166</td>
        </tr>
        <tr>
        <td>Berat (kg)</td>
        <td>830</td>
        </tr>
        </table>
    
        </div>
        
        <div class="span12">
          <strong>FEATURE MESIN</strong><br>      
            1. Digunakan untuk menggiling gabah menjadi beras putih dan mengkilap.<br>
            2. Dilengkapi dengan proses pemisahan beras utuh, beras campuran dan menir.<br>
            3. Terdiri dari rangkaian Elevator, Husker & Polisher, Separator, Shifter.
            
        </div>
       
        
      </div>

    </div>
  </section>

@endsection