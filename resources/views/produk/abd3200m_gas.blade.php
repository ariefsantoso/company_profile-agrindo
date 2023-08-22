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
              <li class="active">ABD 3200 M (GAS)</li>
            </ul>
            <h2> Mesin ABD 3200 M (GAS)</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/abd3200m(gas).jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span8">
        <table class="table table-bordered">
      <p style="text-align:justify">Mesin ABD 3200 M (GAS) Merupakan mesin pengering yang digunakan untuk mengeringkan biji-bijian (padi, jagung, kedelai, dll) dengan model bak datar dan sumber pemanas berasal dari gas. Berikut ini adalah spesifikasi produk dari mesin tersebut :</p>
        
        <tr>
        <td>Tipe</td>
        <td>ABD 3200</td>   
        </tr>
        <tr>
        <td>Daya</td>
        <td>4-6 HP</td>
        </tr>
        <tr>
            <td>Kapasitas</td>
            
        <td>3-3,5 TON</td>
        </tr>
        </table>
     
        </div>
       
      </div>

    </div>
  </section>

@endsection