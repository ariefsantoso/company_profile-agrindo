@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
         
            <h2>Quality Control</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container">
      <div class="row">
        <div class="span12">
                 
           <div class="span3">
            <div class="pricing-box-wrap special"><img src="{{ asset('assets/img/fasilitas/laboratorium/Spectrometer.jpg') }}" alt="" /></div>
            <div align="center"><h6><strong><p>Spectometer</p></strong></h6></div>
          </div>
          <div class="span3">
            <div class="pricing-box-wrap special"><img src="{{ asset('assets/img/fasilitas/laboratorium/CE-Meter.jpg') }}" alt="" /></div>
            <div align="center"><h6><strong><p>CE-Meter</p></strong></h6></div>
          </div>
          <div class="span3">
            <div class="pricing-box-wrap special"><img src="{{ asset('assets/img/fasilitas/laboratorium/GrainFines-Number.jpg') }}" alt="" /></div>
            <div align="center"><h6><strong><p>Grain Fines Number</p></strong></h6></div>
          </div>
      <div class="span3">
            <div class="pricing-box-wrap special"><img src="{{ asset('assets/img/fasilitas/laboratorium/CMM.jpg') }}" alt="" /></div>
            <div align="center"><h6><strong><p>CMM</p></strong></h6></div>
          </div>
              <div class="span3">
            <div class="pricing-box-wrap special"><img src="{{ asset('assets/img/fasilitas/laboratorium/Microscope.jpg') }}" alt="" /></div>
            <div align="center"><h6><strong><p>Microscope</p></strong></h6></div>
          </div>
      </div>
      </div>
    </div>
  </section>

@endsection