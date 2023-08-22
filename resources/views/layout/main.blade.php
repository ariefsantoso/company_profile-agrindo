<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PT. AGRINDO | Pabrik Mesin Dan Alat Pertanian</title>
  <meta name="description" content="Pabrik Mesin dan Alat Pertanian" />
  <meta name="author" content="" />
  <meta name="viewport">

  <!-- css -->
 <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/camera.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/jquery.bxslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/color/default.css') }}" rel="stylesheet" />
 <link href="{{ asset('assets/css/multislider.css') }}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="{{ asset('assets/img/AGRINDO xs.jpg') }}" />
<style>
body.modal-open {
  height: 100vh;
  overflow-y: hidden;
}
</style>

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<!--Start of Tawk.to Script-->
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6281130537888", // WhatsApp number
            call_to_action: "Hubungi kami", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<!--End of Tawk.to Script-->
<body>


  <div id="wrapper">

    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
        
            <div class="span12">

              <ul class="social-network">
           
              </ul>

            </div>
          </div>
        </div>
      </div>
 @include('layout.navbar');
 
 @yield('content')

     <footer>
     
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; PT. AGRINDO. All right reserved 2019</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                -->
                Designed by <a href="https://agrindo.com/">Agrindo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
 <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

  <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('assets/js/toucheffects.js') }}"></script>
  <script src="{{ asset('assets/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
  <script src="{{ asset('assets/js/camera/camera.js') }}"></script>

  <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('assets/js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('assets/js/portfolio/setting.js') }}"></script>

  <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('assets/js/animate.js') }}"></script>
  <script src="{{ asset('assets/js/inview.js') }}"></script>
  <script src="{{ asset('assets/js/util.js') }}"></script>
  <!-- Template Custom JavaScript File -->
  <script src="/assets/js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<!-- Latest compiled and minified JavaScript --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/js/multislider.js') }}"></script> 

</body>
</html>


<script>

		$('#mixedSlider').multislider({
			duration: 750,
			interval: 30000
		});
		$( document ).ready(function() {
    $('.modal').modal('show');
});
		
</script>