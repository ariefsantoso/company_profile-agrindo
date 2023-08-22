@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="dryer-plant">Dryer Plant</a> <i class="icon-angle-right"></i></li>
              <li class="active">Corn Drying Plant (Type ADL)</li>
            </ul>
            <h2> Corn Drying Plant (Type ADL)</h2>
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
             <img src="{{ asset('assets/img/product/dryer-plant/CORN-DRYER-PLANT.jpg') }}"/>
            </div>

          </div>
            <div align="center"><h5>Kapasitas input 10-200 Ton/jam</h5></div>
        </div>
        
        <div class="span6">
          <h5>Spesifikasi Produk</h5>
        <table class="table table-bordered">
        <tr>
        <td>Description</td>
        <td>Type</td>
        <td>Power (HP)</td>
        <td>Qty</td>
        </tr>
        <tr>
        <td>Input Screen</td>
        <td>-</td>
        <td>-</td>
        <td>1</td>
        </tr>
        <tr>
        <td>Bucket Elevator</td>
        <td>AE 8"</td>
        <td>3</td>
        <td>6</td>
        </tr>
        <tr>
        <td>Corn Pre Cleaner</td>
        <td>ACC 200</td>
        <td>3</td>
        <td>1</td>
        </tr>
         <tr>
        <td>Fine Cleaner</td>
        <td>ASC 150</td>
        <td>8.5</td>
        <td>1</td>
        </tr>
         <tr>
        <td>Dryer</td>
        <td>ADL 10/12 TJ</td>
        <td>31.5</td>
        <td>2</td>
        </tr>
         <tr>
        <td>Conditioner</td>
        <td>ADC 12 TJ</td>
        <td>31.5</td>
        <td>1</td>
        </tr> 
        <tr>
        <td>Product Tank</td>
        <td>PT 100 T</td>
        <td>-</td>
        <td>1</td>
        </tr>
        <tr>
        <td>Cyclonic Husk Furnace</td>
        <td>AHF 3000</td>
        <td>8</td>
        <td>1</td>
        </tr>
        <tr>
        <td>Panel Distribusion</td>
        <td>-</td>
        <td>-</td>
        <td>1</td>
        </tr>
        <tr>
        <td colspan="2"><b>Total Power</b></td>
        <td><b>132 HP</b></td>
        <td></td>
        </tr>
        </table>
     
        </div>
       
      </div>

    </div>
  </section>

@endsection