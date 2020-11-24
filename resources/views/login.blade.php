<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 13:21:17 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AIMS Agri Ventures, Inc. | Login</title>

    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="admin/css/animate.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <img class="animated rotateIn" src="{{ secure_asset('img/aims-agri-ventures-transparent.png') }}" height="300px" width="300px" alt="AIMS Logo">

            </div>
            <h3>Welcome to AIMS</h3>
            <!-- <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                
            </p> -->
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="{{ secure_url('dashboard') }}">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-success block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                {{-- <p class="text-muted text-center"><small>Do not have an account?</small></p> --}}
                {{-- <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> --}}
            </form>
            <p class="m-t"> <small>AIMS Agri Ventures, Inc. &copy; {{ date('Y') }}</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="admin/js/jquery-3.1.1.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 13:21:17 GMT -->
</html>
