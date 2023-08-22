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
              <li class="active">Cleaner Plant</li>
            </ul>
            <h2> Cleaner Plant</h2>
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
             <img src="{{ asset('assets/img/product/dryer-plant/CLEANER-PLANT.jpg') }}"/>
            </div>
          </div>
        </div>
        <div class="span6">
            <h5>Spesifikasi Produk</h5>
        <table class="table table-bordered">
        <tr>
        <td>Description</td>
        <td>Type</td>
        <td>Power (Hp)</td>
        <td>Qty</td>
        </tr>
        <tr>
        <td>Input Screen</td>
        <td>-</td>
        <td>-</td>
        <td>3</td>
        </tr>
        <tr>
        <td>Belt Elevator</td>
        <td>AE 10"</td>
        <td>5</td>
        <td>3</td>
        </tr>
        <tr>
        <td>Cleaner</td>
        <td>ASC 250</td>
        <td>20.5</td>
        <td>3</td>
        </tr>
        <tr>
        <td>Belt Conveyor</td>
        <td>BC 3</td>
        <td>2</td>
        <td>3</td>
        </tr>
        <tr>
        <td>Panel Distribusion</td>
        <td>-</td>
        <td>-</td>
        <td>1</td>
        </tr>
              <tr>
        <td colspan ="2"><strong>Total Power</strong></td>
        <td><strong>82,5 HP</strong></td>
        <td></td>
        </tr>
        </table>
        </div>
       
      </div>

    </div>
  </section>
@endsection