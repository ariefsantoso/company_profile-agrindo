@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="#">Pages</a> <i class="icon-angle-right"></i></li>
              <li class="active">Milling Unit</li>
            </ul>
            <h2> RMP 5TPH </h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/RMP-5TON.jpg') }}"/>
            </div>

          </div>
        </div>
        
  
            <div class="span6">
                <strong>Rice Milling Plant (5 TON)</strong><br>
                <p>Rice Milling Plant (RMP) Merupakan rangkaian dari beberapa unit mesin pemroses beras yang bekerja secara otomatis dan terpadu, 
                yang digunakan untuk memproses padi atau gabah menjadi beras putih berkualitas tinggi sesuai dengan kapasitas yang dikendaki yaitu mencapai 4,5 - 5 ton beras per jam.</p>
       
        </div>
        <div class="span6">
         <table class="table table-bordered">
           <tr>
           <td><strong>#</strong></td>
           <td><strong>Spesifikasi</strong></td>
           </tr>
           <tr>
           <td>Model</td>
           <td>RMP-5TPH</td>
           </tr>
           <tr>
           <td>Kapasitas</td>
           <td>4,5 - 5 Ton/jam</td>
           </tr>
           <tr>
           <td>Daya yang dibutuhkan</td>
            <td>3312,5 kW </td>
           </tr>
           
           </table>
      
        </div>
       
       
      </div>

    </div>
  </section>


@endsection