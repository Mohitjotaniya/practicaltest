<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin')}}/images/favicon.png">
    <link href="{{asset('admin')}}/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                     
        @if(Session::has('error'))
        <div class="alert alert-danger">
        
        <strong role="alert" class="">{!! Session::get('error') !!}</strong>
        
        </div>
     

        @endif
                                    <form action="{{ url('/adminlogin')}}" method="post">
                                    @csrf 
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                      
                                        <input type="submit" name="submit" class="btn btn-default">
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin')}}/vendor/global/global.min.js"></script>
    <script src="{{asset('admin')}}/js/quixnav-init.js"></script>
    <script src="{{asset('admin')}}/js/custom.min.js"></script>

</body>

</html>