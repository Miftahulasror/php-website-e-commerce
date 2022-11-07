<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS | {{ $title }}</title>

<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
  <body class="d-flex flex-column h-100">

<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #cceaff;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kopi SUG Kenangan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{($title==='Home')? 'active':''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title==='Product')? 'active':''}}" href="/produk">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title==='About')? 'active':''}}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title==='Contact')? 'active':''}}" href="/contact">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/dash"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

@yield('content')

    <!-- Start Footer -->
    <footer class="footer mt-auto py-3 " style="background-color: #cceaff">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-info border-bottom pb-3 border-light logo">Kopi SUG Kenangan</h2>
                    <ul class="list-unstyled text-primary footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Tulungagung, East Java, 66281
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:0853-3302-3224">(+62)853-3023-3224</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:regowom00@gmail.com">regowom00@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-info border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="/produk">Makanan</a></li>
                        <li><a class="text-decoration-none" href="/produk">Minuman</a></li>
                      </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-info border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only text-info" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-info text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-dark py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2022 Kopi SUG Kenangan 
                            | Website <a rel="sponsored" href="http://frp-19201278.test/" target="_blank">Kopi SUG Kenangan</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>

</body>
</html>