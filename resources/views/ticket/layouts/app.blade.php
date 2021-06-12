<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>@yield('title')</title>
    <style type="text/css">
      body { background: rgb(204, 204, 204) !important; }

      .bg-footer{
        background: white !important;
      }
      .bg-img{
        background-image: url('img/asset/head1.png');
    }

    .head{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 50px;
        color: black;
        text-shadow: 5px 5px 10px #111;
    }
    .best-seller{
        margin: auto;
        padding: auto;
    }

    .title{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 50px;
        color: #0fd3ff;
        
    }
    .jadwal{
        font-family: Arial, Helvetica, sans-serif;
    }
    .orange{
        color: #f26f1d;
    }
    .diskon{
        font-size: 15px;
    }
    .desc{
      text-align: justify;
    }
    a:link { text-decoration: none; }
    a:visited { text-decoration: none; }
    a:hover { text-decoration: none; }
    a:active { text-decoration: none; }
   </style>

  </head>
  <body>
    {{-- Header --}}
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <img src="{{asset('img/asset/logo.png')}}" width="50" alt="logo">
          <h4>Mahardika Ticket</h4>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
  </header> 

    @yield('container')


    <footer class="bg-white">
      <div class="container">
        <div class="row pt-5 pb-5">
          <div class="col-lg-6 col-sm-12">
              <img src="{{asset('img/asset/logo.png')}}" class="float-start" width="50" alt="logo">
              <h4>Mahardika Ticket</h4>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="text-end">
              <p>©PT. Mahardika Solusi Teknologi. 2020.</p>
              <p>We love our users!</p>
            </div>
          </div>
        </div>
      </div>
      
      
    </footer>
    {{-- <footer class="bg-white bg-footer">
      <div class="container">
        <h4 class="float-start">Mahardika Ticket</h4>
        <div class="float-end">
          <div>
             <p>©PT. Mahardika Solusi Teknologi. 2020.</p>
             <p>We love our users!</p>
           </div>
         </div>
       </div>
     </div> --}}
      
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>