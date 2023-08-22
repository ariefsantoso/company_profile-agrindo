@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="dryer_plant">Dryer Plant</a> <i class="icon-angle-right"></i></li>
              <li class="active">Paddy Drying Plant (Type VRD)</li>
            </ul>
            <h2> Paddy Drying Plant (Type VRD)</h2>
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
             <img src="{{ asset('assets/img/product/dryer-plant/PADDY-DRYER-PLANT.jpg') }}"/>
             
            </div>
            

          </div>
          <div align="center"><h5>Kapasitas input 10-500 Ton/jam</h5></div>
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
        <td>Pre Cleaner</td>
        <td>PC 200</td>
        <td>3</td>
        <td>2</td>
        </tr>
        <tr>
        <td>Bucket Elevator</td>
        <td>AE 12"</td>
        <td>5</td>
        <td>11</td>
        </tr>
        <tr>
        <td>Belt Conveyor</td>
        <td>-</td>
        <td>2 - 7.5</td>
        <td>5</td>
        </tr>
        <tr>
        <td>Chain Conveyor</td>
        <td>C19</td>
        <td>7.5</td>
        <td>1</td>
        </tr>
         <tr>
        <td>Fluidized Bed Dryer</td>
        <td>AFBD12N</td>
        <td>50</td>
        <td>1</td>
        </tr>
         <tr>
        <td>Conditioner</td>
        <td>ADC 10</td>
        <td>22</td>
        <td>1</td>
        </tr>
           <tr>
        <td>Dryer</td>
        <td>VRD 300</td>
        <td>21</td>
        <td>3</td>
        </tr>
           <tr>
        <td>Product Tank</td>
        <td>PT 60 T</td>
        <td>-</td>
        <td>4</td>
        </tr>
           <tr>
        <td>Piping Furnace</td>
        <td>-</td>
        <td>25</td>
        <td>1</td>
        </tr>
           <tr>
        <td>Cyclonic Husk Furnace</td>
        <td>AHF 1000</td>
        <td>7.5</td>
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
        <td colspan ="2"><strong>Total Power</strong></td>
        <td><strong>298 HP</strong></td>
        <td></td>
        </tr>
        
        </table>
     
        </div>
       
      </div>

    </div>
  </section>

@endsection