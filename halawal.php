<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zamira Resto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="website icon" type="png" href="logo brand-01.png">

    <style>
      @font-face {
        font-family: popbold;
        src: url(Poppins/Poppins-Bold.ttf);
      }

      @font-face {
        font-family: poplight;
        src: url(Poppins/Poppins-Light.ttf);
      }

      body{
        background-image: url(https://img.freepik.com/free-photo/border-from-tasty-dishes_23-2147778495.jpg?t=st=1741696571~exp=1741700171~hmac=7fc997975458434b65a59963ea24994dd0e1205c7a812ce37b4caafee1684a8f&w=1800);
        height: 100vh;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }

      
    </style>

    <link rel="stylesheet" href="tugas2.css">
    
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="logo">
        <img src="logo brand-01.png" style="height: 30px;" alt="">
      </div>
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-family: popbold; font-size: 18px;">Zamira Resto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Zamira Resto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active"  aria-current="page" href="#home" >Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" href="#menu" >Menu<Output></Output></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" href="#table" >Table<Output></Output></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" href="#reservation">Reservation<Output></Output></a>
                </li>
<!--                 
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" href="#">Transaction<Output></Output></a>
                </li> -->
                  
                  </ul>
  
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>


    <!-- BRAND ICON -->
     <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
            <img id="home" class="brand-icon" src="logo brand-01.png" alt="">

          </center>
        </div>
      </div>
    </div>

    <!-- BRAND NAME -->
    <div class="header">
        <center>
        <h1 class="brand-name" style="font-family: popbold;">Zamira Resto</h1>
        <h2 class="brand-slogan" style="font-family: poplight;">Loves Healty Food</h2>
        </center>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- CARD MENU-->
     <br><br><br>
    <div class="card-header">
      <center>
      <h2 id="menu" style="font-family: popbold;">Menu List</h2>
      </center>
    </div>
    <br>

    <div class="horizontal-card">
      <center>
      <div class="container">
        <div class="row">
    <div class="col-md-4 mb-5">
    <div class="card" style="width: 18rem;">
      <div class="card-menu">
        <h4 class="circle-bg" style="margin-top: 2vh;">1</h4>
        <img src="menu1.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title" style="font-family: popbold; text-align: center;">Green Vitality Plate</h5>
            <p class="card-text">Nasi goreng + telur + aneka sayuran + lemon + ice/hot tea</p>
            <h5 class="price">Rp. 25.000</h5>
        </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-5">
    <div class="card" style="width: 18rem;">
      <div class="card-menu">
        <h4 class="circle-bg" style="margin-top: 2vh;">2</h4>
        <img src="menu2.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title" style="font-family: popbold; text-align: center;">Mediterranean Salad</h5>
            <p class="card-text">Kentang + telur + aneka sayuran + tahu + ice/hot tea</p>
            <h5 class="price">Rp. 20.000</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-5">
    <div class="card" style="width: 18rem;">
      <div class="card-menu">
        <h4 class="circle-bg" style="margin-top: 2vh;">3</h4>
        <img src="menu3.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title" style="font-family: popbold; text-align: center;">Superfood Bliss Bowl</h5>
            <p class="card-text">Ubi ungu + daging + aneka sayuran + keju + ice/hot tea</p>
            <h5 class="price">Rp. 28.000</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-5">
    <div class="card" style="width: 18rem;">
      <div class="card-menu">
        <h4 class="circle-bg" style="margin-top: 2vh;">4</h4>
        <img src="menu4.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title" style="font-family: popbold; text-align: center;">Morning Fuel Plate</h5>
            <p class="card-text">Daging + telur + kacang + brokoli + stoberi + saus kacang + ice/hot tea</p>
            <h5 class="price">Rp. 30.000</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-5">
    <div class="card" style="width: 18rem;">
      <div class="card-menu">
        <h4 class="circle-bg" style="margin-top: 2vh;">5</h4>
        <img src="menu5.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title" style="font-family: popbold; text-align: center;">NutriBoost Glow Bowl</h5>
            <p class="card-text">Nasi goreng + telur + ubi ungu + tahu + alpukat + slada + ice/hot tea</p>
            <h5 class="price">Rp. 26.000</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-5">
    <div class="card" style="width: 18rem;">
      <div class="card-menu">
        <h4 class="circle-bg" style="margin-top: 2vh;">6</h4>
        <img src="menu6.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title" style="font-family: popbold; text-align: center;">Sea Breeze Salad</h5>
            <p class="card-text">Udang + daging + tempe + bengkuang + timun + slada + ice/hot tea</p>
            <h5 class="price">Rp. 25.000</h5>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
</center>
  </div>

  <br><br><br><br>


  <!-- card tempat -->
  <div class="card-header">
    <center>
    <h2 id="table" style="font-family: popbold; ">Table Options</h2>
    </center>
  </div>
  <br>

   <div class="card-table">
    <center>
    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="circle-bg">1</h4>
              <h5 class="table-name">The Cozy Table</h5>
              <h6 class="kapasitas">- Table for 2 people -</h6>
              <p class="card-text-table">
                <ul>
                  <li>Small table with romantic lighting</li>
                  <li>Wi-Fi & power plugs</li>
                  <li>Soft background music</li>
                  <li>Exclusive service for couples</li>
                </ul>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="circle-bg">2</h4>
              <h5 class="table-name">The Family Nook</h5>
              <h6 class="kapasitas">- Table for 4 people -</h6>
              <p class="card-text-table">
                <ul>
                  <li>Medium table with cushioned chairs</li>
                  <li>Wi-Fi & power plugs</li>
                  <li>Light background music</li>
                  <li>Choice of sharing platter menu</li>
                </ul>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="circle-bg">3</h4>
              <h5 class="table-name">The Gathering Hub</h5>
              <h6 class="kapasitas">- Table for 8 people -</h6>
              <p class="card-text-table" style="color: white;">
                <ul>
                  <li>Large table with for dining together</li>
                  <li>Wi-Fi & power plugs</li>
                  <li>Selected background music</li>
                  <li>Large meal plan available</li>
                </ul>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="circle-bg">4</h4>
              <h5 class="table-name">The Boardroom</h5>
              <h6 class="kapasitas">- Table for 12 people -</h6>
              <p class="card-text-table">
                <ul>
                  <li>Exclusive table with ample space</li>
                  <li>Wi-Fi & power plugs</li>
                  <li>Private speakers music</li>
                  <li>Optional decorations</li>
                </ul>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="circle-bg">5</h4>
              <h5 class="table-name">The Grand Lounge</h5>
              <h6 class="kapasitas">- Table for 20 people -</h6>
              <p class="card-text-table">
                <ul>
                  <li>Long tables with elegant decorations</li>
                  <li>Wi-Fi & power plugs</li>
                  <li>Speaker & projector for events</li>
                  <li>Semi-private room</li>
                </ul>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="circle-bg">6</h4>
              <h5 class="table-name">The Chill Spot</h5>
              <h6 class="kapasitas">- Lesehan for 20+ people -</h6>
              <p class="card-text-table">
                <ul>
                  <li>Soft carpet & sitting cushions</li>
                  <li>Wi-Fi & power plugs</li>
                  <li>Background music speakers</li>
                  <li>Minimalist wooden long table</li>
                  <li>Warm & cozy lighting</li>
                </ul>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </center>
   </div>

   <br><br><br><br>

   <!-- reservation -->
    <div class="card-header">
      <center>
        <h2 id="reservation" style="font-family: popbold;">Zamira's Reservation</h2>
      </center>
    </div>
    <br>

    <div class="form-reservation">
    
    <form action="hasil_form.php" method="POST">
      <div class="col-md-4">
        <div class="card" style="width: 35rem;">
          <div class="card-body">
            <fieldset>
              <legend></legend>

        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Nama</label>
          <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan nama">
        </div>

        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">E-mail Address</label>
          <input type="email" id="email" class="form-control" name="email" placeholder="Masukkan e-mail">
        </div>

        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Wa/No. Telepon</label>
          <input type="text" id="telepon" class="form-control" name="telepon" placeholder="Masukkan Wa/No. Telepon">
        </div>
        
        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Tanggal Pesan</label>
          <input type="date" id="tglpesan" class="form-control" name="tglpesan" placeholder="">
        </div>

        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Tanggal Datang</label>
          <input type="date" id="tgldatang" class="form-control" name="tgldatang" placeholder="">
        </div>

        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Asal Kota</label>
          <input type="text" id="kota" class="form-control" name="kota" placeholder="Masukkan asal kota">
        </div>

        <div class="mb-3">
          <label for="disabledSelect" class="form-label">Menu</label>
          <select id="menu" class="form-select" name="menu">
            <option selected>Menu Options</option>
            <option value="Green Vitality Plate">Green Vitality Plate</option>
            <option value="Mediterranean Salad">Mediterranean Salad</option>
            <option value="Superfood Bliss Bowl">Superfood Bliss Bowl</option>
            <option value="Morning Fuel Plate">Morning Fuel Plate</option>
            <option value="NutriBoost Glow Bowl">NutriBoost Glow Bowl</option>
            <option value="Sea Breeze Salad">Sea Breeze Salad</option>
          </select>
          
        </div>

        <div class="mb-3">
          <label for="disabledSelect" class="form-label">Table</label>
          <select id="meja" class="form-select" name="meja">
            <option selected>Table Options</option>
            <option value="The Cozy Table">The Cozy Table</option>
            <option value="The Family Nook">The Family Nook</option>
            <option value="The Gathering Hub">The Gathering Hub</option>
            <option value="The Boardroom">The Boardroom</option>
            <option value="The Grand Lounge">The Grand Lounge</option>
            <option value="The Chill Spot">The Chill Spot</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Catatan</label>
          <textarea class="form-control" rows="3" name="catatan" id="catatan"></textarea>
        </div>

        <div class="btn-submit">
        <button type="submit" class="btn btn-warning" style="background-color: #FFB22C; border-radius: 20px">Submit</button>
        </div>
      </fieldset>
    </form>

    </div>
    </div>
    </div>
    </div>

  </body>
</html>