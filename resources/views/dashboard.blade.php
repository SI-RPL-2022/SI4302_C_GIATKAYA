
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard</title>

    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6de6e67382.js" crossorigin="anonymous"></script>
    
    <style>
        
        body {
            padding-top: 50px;
        }



        .sub-header {
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .navbar-fixed-top {
            border: 0;
            color: #fff;
            background-color: #11CDEF;
        }


        .sidebar {
            
        }
        @media (min-width: 768px) {
            .sidebar {
                position: fixed;
                top: 51px;
                bottom: 0;
                left: 0;
                z-index: 1000;
                display: block;
                padding: 15px;
                overflow-x: auto;
                overflow-y: auto;
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
                width: 240px;
                color: #11CDEF;
            }
        }

        
        .nav-sidebar {
            margin-right: -21px;
            margin-bottom: 20px;
            margin-left: -10px;
        }
        .nav-sidebar > li > a {
            padding-right: 20px;
            padding-left: 20px;
            color: #495057;
            
        }
        .nav-sidebar > .active > a,
        .nav-sidebar > .active > a:hover,
        .nav-sidebar > .active > a:focus {
            color: #fff;
            background-color: #11CDEF;
            font-style: bold;
        }
        .list-group-item-lights {
            color: #11CDEF;
            background-color: #fefefe;
        }
            .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
            color: #11CDEF;
            background-color: #F2F4F6;
            border-left: solid #11CDEF 5px;
        }
            .list-group-item-light.list-group-item-action.active {
            color: #11CDEF;
            background-color: #F2F4F6;
            border-left: solid #11CDEF 5px;
        }


        .main {
            padding: 20px;
        }

        @media (min-width: 768px) {
            .main {
                padding-right: 40px;
                padding-left: 270px;
            }
        }
        .main .page-header {
            margin-top: 0;
        }



        .placeholders {
            margin-bottom: 30px;
            text-align: center;
        }
        .placeholders h4 {
            margin-bottom: 0;
        }
        .placeholder {
            /* margin-bottom: 20px; */
        }
        .placeholder img {
            display: inline-block;
            border-radius: 50%;
        }
    </style>

  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GIATKAYA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                    <div class="container-fluid">
                        <img src="{{ asset('image/user.png') }}" alt="" height="18" class="rounded-circle me-1"><small class="text-muted">{{ Auth::user()->name }}</small>
                    </div>
                </a>
            </li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="sidebar">
          <ul class="nav nav-sidebar">
          <a class="list-group-item list-group-item-lights mt-2 fw-bold" style="background-color: #11CDEF; color: white">MENU</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href=""><i class="fa fa-dashboard me-2"></i>&nbsp; Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                     
                    href="/training"><i class="fa-solid fa-book-open-reader me-2"></i>&nbsp; Training Skill
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                 
                    href=""><i class="fas fa-regular fa-coins me-2"></i>&nbsp; Pinjaman Modal 
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-briefcase me-2"></i>&nbsp; Lapangan Kerja
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-user me-2"></i>&nbsp; Profile
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fa-solid fa-file-pen me-2"></i>&nbsp; Create Certificate
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fa-solid fa-list-check me-2"></i>&nbsp; Validation User
                </a>
          </ul>
          <ul class="nav nav-sidebar">
          <a class="list-group-item list-group-item-lights mt-2 fw-bold" style="background-color: #11CDEF; color: white">OTHER</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">
                    <i class="fas fa-regular fa-address-card me-2"></i>&nbsp; About Us
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">
                    <i class="fas fa-regular fa-gear me-2"></i>&nbsp; Setting
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt me-2"></i>&nbsp; Logout            
                </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
          </ul>
        </div>
        @yield('content')
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>

<!-- Cadangan kalo pengen pake yg Bootstrap 5 -->
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6de6e67382.js" crossorigin="anonymous"></script>
    <style>
        body {
            padding-top: 50px;
        }


        .sub-header {
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .navbar-fixed-top {
            border: 0;
            color: #fff;
            background-color: #11CDEF;
        }

        .sidebar {
            
        }
        @media (min-width: 768px) {
            .sidebar {
                position: fixed;
                top: 60px;
                bottom: 0;
                left: 0;
                z-index: 1000;
                display: block;
                padding: 15px;
                overflow-x: auto;
                overflow-y: auto;
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
                width: 240px;
                color: #11CDEF;
            }
        }

        .nav-sidebar {
            margin-right: -21px; 
            margin-bottom: 20px;
            margin-left: -10px;
        }
        .nav-sidebar > li > a {
            padding-right: 20px;
            padding-left: 20px;
            color: #495057;
            
        }
        .nav-sidebar > .active > a,
        .nav-sidebar > .active > a:hover,
        .nav-sidebar > .active > a:focus {
            color: #fff;
            background-color: #11CDEF;
            font-style: bold;
        }
        .list-group-item-lights {
            color: #11CDEF;
            background-color: #fefefe;
        }
            .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
            color: #11CDEF;
            background-color: #F2F4F6;
            border-left: solid #11CDEF 5px;
        }
            .list-group-item-light.list-group-item-action.active {
            color: #11CDEF;
            background-color: #F2F4F6;
            border-left: solid #11CDEF 5px;
        }


        .main {
            padding: 20px;
        }

        @media (min-width: 768px) {
            .main {
                padding-right: 40px;
                padding-left: 270px;
            }
        }
        .main .page-header {
            margin-top: 0;
        }



        .placeholders {
            margin-bottom: 30px;
            text-align: center;
        }
        .placeholders h4 {
            margin-bottom: 0;
        }
        .placeholder {
            margin-bottom: 20px;
        }
        .placeholder img {
            display: inline-block;
            border-radius: 50%;
        }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <a class="navbar-brand" href="#">Project name</a>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                    <div class="container-fluid">
                        <img src="{{ asset('image/user.png') }}" alt="" height="18" class="rounded-circle me-1"><small class="text-muted">{{ Auth::user()->name }}</small>
                    </div>
                </a>
            </li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="sidebar">
          <ul class="nav nav-sidebar">
          <a class="list-group-item list-group-item-lights mt-2 fw-bold" style="background-color: #11CDEF; color: white">MENU</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href=""><i class="fa fa-dashboard me-2"></i>&nbsp; Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                     
                    href=""><i class="fa-solid fa-book-open-reader me-2"></i>&nbsp; Training Skill
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                 
                    href=""><i class="fas fa-regular fa-coins me-2"></i>&nbsp; Pinjaman Modal 
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-briefcase me-2"></i>&nbsp; Lapangan Kerja
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-user me-2"></i>&nbsp; Profile
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fa-solid fa-file-pen me-2"></i>&nbsp; Create Certificate
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fa-solid fa-list-check me-2"></i>&nbsp; Validation User
                </a>
          </ul>
          <ul class="nav nav-sidebar">
          <a class="list-group-item list-group-item-lights mt-2 fw-bold" style="background-color: #11CDEF; color: white">OTHER</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">
                    <i class="fas fa-regular fa-address-card me-2"></i>&nbsp; About Us
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">
                    <i class="fas fa-regular fa-gear me-2"></i>&nbsp; Setting
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt me-2"></i>&nbsp; Logout            
                </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
          </ul>
        </div>
        
        <div class="col-sm-12 main">
          <div class="row">
            <h1 class="page-header">Dashboard</h1>

            <div class="row placeholders">
              <div class="col-xs-6 col-sm-3 placeholder">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Label</h4>
                <span class="text-muted">Something else</span>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Label</h4>
                <span class="text-muted">Something else</span>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Label</h4>
                <span class="text-muted">Something else</span>
              </div>
              <div class="col-xs-6 col-sm-3 placeholder">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Label</h4>
                <span class="text-muted">Something else</span>
              </div>
            </div>

            <h2 class="sub-header">Section title</h2>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GiatKaya</title>        

    <link href = "{{asset('css/auth.css')}}" rel="stylesheet">   
    <link href ="{{ asset('image/logo/tecch.png') }}" rel="shortcut icon"> 
        
    <script src="https://kit.fontawesome.com/f1223f01a6.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6de6e67382.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>        
    <script src="{{ asset('js/scripts.js') }}"></script>     
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.esm.min.js" integrity="sha512-SaY95UIbYlNfmc6tZOtqEWMyDHpIKJwXCPfDZNvgudlFZiJjMU3XJNrSnkVCL/3b7szsoU3hDXpUz6+TdLY1ag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    @yield('javascipt-text')
</head>
<body style="background-color:rgb(245,245,245);">
    <div class="d-flex" id="wrapper"> 
        <div class="border-end" id="sidebar-wrapper" style="background-color: rgb(255,255,255);">
            <div class="sidebar-heading border-bottom" style="background-color: #149BFC;">
                <a href="" class="list-group-item list-group-item-light text-center"><img src="" alt="" width="140px;" height="20px" class="img-fluid"></a>                
            </div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-lights mt-2 fw-bold" style="background-color: #149BFC; color: white">MENU</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href=""><i class="fa fa-dashboard me-2"></i>Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                     
                    href=""><i class="fa-solid fa-book-open-reader me-2"></i>Training Skill
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                 
                    href=""><i class="fas fa-regular fa-coins me-2"></i>Pinjaman Modal <i class=""></i>
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-briefcase me-2"></i>Lapangan Kerja
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-user me-2"></i>Profile
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-file-lines me-2"></i>Certification <i class=""></i>
                </a>
                <a class="list-group-item list-group-item-lights mt-2 fw-bold" style="background-color: #149BFC; color: white">OTHERS</a>                
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">
                    <i class="fas fa-regular fa-address-card me-2"></i>About Us
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">
                    <i class="fas fa-regular fa-gear me-2"></i>Setting
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">
                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                </a>
                <form id="logout-form" action="" method="POST" class="d-none">
                    @csrf
                </form> 
            </div>                        
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: rgb(255,255,255);">
                <div class="container-fluid">
                    <button class="btn btn-info" id="sidebarToggle">
                        <i class="fas fa-sliders-h"></i>
                    </button>              
                </div>
                <div class="container-fluid">
                    <input type="text" placeholder="Search..">
                    <img src="{{ asset('image/user.png') }}" alt="" height="30" class="rounded-circle me-1"><small class="text-muted">Steven</small></p>
                </div>           
            </nav>
            <div class="container">
                <p>jbdajbsdkad</p>
            </div>
            <footer class="text-center text-lg-start mt-auto" style="background-color:#149BFC; color:white;">    
                <div class="container p-4">        
                    <div class="row">            
                        <div class="col-4 col-md-4 col-lg-4 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Navigasi</h5>
                            <a href="" style="text-decoration:none; color:white;">Beranda</a><br>                
                            <a href="" style="text-decoration:none; color:white;">Pinjaman Modal</a><br>         
                            <a href="" style="text-decoration:none; color:white;">Lapangan Kerja</a><br>                
                            <a href="" style="text-decoration:none; color:white;">Training Skill</a><br>                               
                        </div>            
                        <div class="col-4 col-md-4 col-lg-4 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Sosial Media</h5>
                            <a href="" class="btn-facebook"><i class="fab fa-facebook fs-3" ></i></a>
                            <a href="" class="btn-twitter"><i class="fab fa-twitter fs-3 ps-3"></i></a>
                            <a href="" class="btn-instagram"><i class="fab fa-instagram fs-3 ps-3"></i></a>
                            <a href="" class="btn-linkedin"><i class="fab fa-linkedin-in fs-3 ps-3"></i></a>
                            <a href="" class="btn-telegram"><i class="fab fa-telegram fs-3 ps-3"></i></a>                
                        </div>            
                        <div class="col-4 col-md-4 col-lg-4 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Sponsor Kami</h5>                                    
                            <img src="" class="img-fluid me-2 mb-2" width="100px">                                                        
                            <img src="https://indonesiabutuhanakmuda.narasi.tv/logo-primary.png" class="img-fluid me-2 mb-2" width="100px">
                            <img src="" class="img-fluid" width="150px">                     
                        </div>            
                    </div>        
                </div>        
                <div class="text-center p-3" style="color:white;">
                    &copy; 2022 GiatKaya. All Rights Reserved         
                </div>    
            </footer>
            <div style="font-size:14px;">
            </div>            
        </div>
    </div>         
</body>

</html> -->