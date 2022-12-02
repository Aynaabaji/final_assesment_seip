
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('backend') }}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bracket.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bracket.dark.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-br-primary bd bd-white-1 rounded">
        <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> The Glitch <span class="tx-info">IT</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">New Here? Sign up now!</div>

        <form action="{{ route('registrate') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control form-control-dark" placeholder="Enter Full Name">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control form-control-dark" placeholder="Enter email">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control form-control-dark" placeholder="Enter password">
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control form-control-dark" placeholder="Re-enter password">
            </div>
            <input type="submit" class="btn btn-info btn-block form-control" value="Sign Up">
        </form>

        <div class="mg-t-40 tx-center">Already a member? <a href="{{ route('login') }}" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{ asset('backend') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{ asset('backend') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
