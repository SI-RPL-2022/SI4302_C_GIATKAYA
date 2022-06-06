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

    <title>Dashboard | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6de6e67382.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <style type="text/css">
      .pertama {
        color: #00bfff;
       }
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
            /* margin-bottom: 20px; */
        }
        .placeholder img {
            display: inline-block;
            width: 15%;
            border-radius: 50%;
        }
        .image_upload > input{
            display:none;
        }
        /* .form {
            border: 1px solid #8cfcfc
        } */
        body{
          margin-top:20px;
          background:#FAFAFA;
        }
        .order-card {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg,#4099ff,#73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg,#2ed8b6,#59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg,#FFB64D,#ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg,#FF5370,#ff869a);
        }


        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card .card-block {
            padding: 10px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }
        #someId .thumbnail{
    display: inline-flex;
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
                        <img src="{{ asset('image/'.Auth::user()->foto_profil) }}" alt="" height="18" class="rounded-circle me-1"><small class="text-muted">{{ Auth::user()->name }}</small>
                    </div>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="sidebar">
          <ul class="nav nav-sidebar">
          <a class="list-group-item list-group-item-lights mt-2 fw-bold" style="background-color: #11CDEF; color: white">MENU</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('admin/home') }}"><i class="fa fa-dashboard me-2"></i>&nbsp; Dashboard</a>
                @if (auth()->user()->is_admin == 1)
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                     
                    href="/training"><i class="fa-solid fa-book-open-reader me-2"></i>&nbsp; Training Skill
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                 
                    href=""><i class="fas fa-regular fa-coins me-2"></i>&nbsp; Pinjaman Modal <i class=""></i>
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href="/infokerja"><i class="fas fa-regular fa-briefcase me-2"></i>&nbsp; Lapangan Kerja
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href="{{ url('/aksesdata') }}"><i class="fas fa-regular fa-user me-2"></i>&nbsp; Data Profile User
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href="/BuatSertif"><i class="fa-solid fa-file-pen me-2"></i>&nbsp; Create Certificate
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href="{{ url('/verif') }}"><i class="fa-solid fa-list-check me-2"></i>&nbsp; Validation User
                </a>

                @else
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                     
                    href="/masyarakat/training"><i class="fa-solid fa-book-open-reader me-2"></i>&nbsp; Training Skill
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"                
                    href="/pinjaman"><i class="fas fa-regular fa-coins me-2"></i>&nbsp; Pinjaman Modal 
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-briefcase me-2"></i>&nbsp; Lapangan Kerja
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href=""><i class="fas fa-regular fa-user me-2"></i>&nbsp; Profile
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href="/BuatSertif"><i class="fas fa-regular fa-file-lines me-2"></i>&nbsp; Certification
                </a>
                @endif

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

            @yield('content')
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.slim.js"
    integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
    crossorigin="anonymous">
    </script>
    </body>
    <!-- Alert delete Admin RUD data pengguna GiatKaya -->
    <script>
        $('.delete').click(function(){
            var idpegawai = $(this). attr('data-id');
            var namapegawai = $(this). attr('data-nama');
            swal({
  title: "Apa kamu yakin?",
  text: "Setelah dihapus, Anda tidak akan dapat memulihkan data pengguna dengan nama "+namapegawai+" ini!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      window.location = "aksesdata/delete/"+idpegawai+""
    swal("Data berhasil di hapus!", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi di hapus", {
      icon: "info",
    });
  }
});
        });
        
    </script>
    <!-- Alert delete Admin CRUD data pelatihan -->
    <script>
        $('.delete2').click(function(){
            var idpelatihan = $(this). attr('data-id');
            var namapelatihan = $(this). attr('data-nama');
            swal({
  title: "Apa kamu yakin?",
  text: "Setelah dihapus, Anda tidak akan dapat memulihkan data pelatihan "+namapelatihan+" ini!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      window.location = "training/delete/"+idpelatihan+""
    swal("Data berhasil di hapus!", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi di hapus", {
      icon: "info",
    });
  }
});
        });
        
    </script>
    <!-- Alert delete Admin CRUD data infokerja -->
    <script>
        $('.delete3').click(function(){
            var idkerja = $(this). attr('data-id');
            var namakerja = $(this). attr('data-nama');
            swal({
  title: "Apa kamu yakin?",
  text: "Setelah dihapus, Anda tidak akan dapat memulihkan data informasi pekerjaan tentang "+namakerja+" ini!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      window.location = "infokerja/delete/"+idkerja+""
    swal("Data berhasil di hapus!", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi di hapus", {
      icon: "info",
    });
  }
});
        });
        
    </script>
    
    <!-- Alert delete Admin CRUD data sertif -->
    <script>
        $('.delete4').click(function(){
            var idsertif = $(this). attr('data-id');
            var namasertif = $(this). attr('data-nama');
            swal({
  title: "Apa kamu yakin?",
  text: "Setelah dihapus, Anda tidak akan dapat memulihkan data informasi pekerjaan tentang "+namasertif+" ini!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      window.location = "BuatSertif/delete/"+namasertif+""
    swal("Data berhasil di hapus!", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi di hapus", {
      icon: "info",
    });
  }
});
        });
        
    </script>
</html>