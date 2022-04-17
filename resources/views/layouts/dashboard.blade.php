
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6de6e67382.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <style>
        /*
        * Base structure
        */

        /* Move down content because we have a fixed navbar that is 50px tall */
        body {
            padding-top: 50px;
        }


        /*
        * Global add-ons
        */

        .sub-header {
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        /*
        * Top navigation
        * Hide default border to remove 1px line.
        */
        .navbar-fixed-top {
            border: 0;
            color: #fff;
            background-color: #11CDEF;
        }

        /*
        * Sidebar
        */

        /* Hide for mobile, show later */
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
                overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
                width: 240px;
                color: #11CDEF;
            }
        }

        /* Sidebar navigation */
        .nav-sidebar {
            margin-right: -21px; /* 20px padding + 1px border */
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


        /*
        * Main content
        */
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


        /*
        * Placeholder dashboard ideas
        */

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="#">GIAT KAYA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                    <div class="container-fluid">
                        <img src="{{ asset('image/user.png') }}" alt="" height="18" class="rounded-circle me-1"><small class="text-muted">Steven</small>
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
                    href=""><i class="fas fa-regular fa-coins me-2"></i>&nbsp; Pinjaman Modal <i class=""></i>
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-briefcase me-2"></i>&nbsp; Lapangan Kerja
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-user me-2"></i>&nbsp; Profile
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-file-lines me-2"></i>&nbsp; Certification <i class=""></i>
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
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="">
                    <i class="fas fa-sign-out-alt me-2"></i>&nbsp; Logout
                </a>
          </ul>
        </div>
        
        <div class="col-sm-12 main">
          <div class="row">
            <h1 class="page-header">Dashboard</h1>

            @yield('content')
            <!-- <div class="table-responsive">
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
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>