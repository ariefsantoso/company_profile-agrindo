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
              <li class="active">Mesin SB1000</li>
            </ul>
            <h2> Mesin SB1000</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/SB1000-REV.jpg') }}"/>
             
            </div>
          </div>
        </div>
        
        <div class="span7">
        <table class="table table-bordered">
        <tr style="background-color:#04145e; color:white">
        <td ><b>#</b></td>
        <td><b>Spesifikasi</b></td>
        </tr>
        <tr>
        <td>Model</td>
        <td>SB1000</td>
        </tr>
        <tr>
        <td>Kapasitas Masukan</td>
        <td>900-1100 kg/jam</td>
        </tr>
        
        <tr>
        <td>Tenaga yang di butuhkan</td>
        <td>17,2 - 19,4 kW / 23 - 26 HP</td>
        </tr>
        <tr>   
        <td>Dimensi Rubber Roll</td>      
        <td>6" x 8.75"</td>
        </tr>
        <tr>
        <td>Putaran poros utama</td>
        
        <td>950 rpm</td>
        </tr>
        <tr>
        <td>Dimensi</td>
        <td>1210 mm x 965 mm x 1730 mm</td>
        </tr>
        <tr>
        <td>Berat</td>
        <td>238 kg</td>
        </tr>
        </table>
        </div>
        <div class="span12">
          <p><strong>Deskripsi</strong></p>
          <p>Mesin SB1000 merupakan mesin integrasi antara mesin pengupas kulit gabah dan mesin pemutih beras yang did esain dengan konstruksi yang kokoh, praktis, dan mudah di operasikan.
          
            <p><strong>Keistimewaan</strong></p>
           <p>1. Kapasitas giling lebih besar<br>
           2. Pengoperasiannya mudah<br>
           3. Daya yang digunakan lebih efisien <br>
           4. Tingkat beras broken rendah            
           </p>
        </div>

        <div class="span12">
              <a href="brosur_sb1000" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>
    </div>
  </section>

@endsection