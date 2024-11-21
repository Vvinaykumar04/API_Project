<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <title>Home Page</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/front/images/fav_Icon.png') }}">
  </head>
  <body>
    <!-- Navbar -->
    @include('include.front.header')
    @yield('content')
    <footer class="footer">
        <div class="container footer_container">
          <div class="row">
            <div class="col-lg-3">
              <img src="{{ asset('assets/front/images/Footer_Logo.png') }}" width="190" height="45px" alt="">
              <p class="footer_content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
              <h4 class="Quick_Links">Quick Links</h4>
              <ul class="footer_menu">
                <li>
                  <a href="./index.html">Home</a>
                </li>
                <li>
                  <a href="./about.html">About</a>
                </li>
                <li>
                  <a href="./about.html">Events</a>
                </li>
                <li>
                  <a href="./about.html">Contact Us</a>
                </li>
                <li>
                  <a href="./tickets.html">Sell Tickets</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
              <div class="footer-column">
                <div class="footer-contact">
                  <h3>Contact Details</h3>
                  <div class="content">
                    <p>
                      <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="White" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                      </i>&nbsp;&nbsp; <a href="#">170 Broadway, London SE81 5HE </a>
                    <p>
                      <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="White" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5" />
                        </svg>
                      </i>&nbsp;&nbsp; <a href="tel:+33(0)1234567890">+33 (0) 123 456 7890</a>
                    </p>
                    <p>
                      <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="White" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg>
                      </i>&nbsp;&nbsp;&nbsp; <a href="mailto: name@email.com"> pulse@example.com </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid copyright" style="color: white;">
            © Copyright 2024 Pulse Event Investments. All Rights Reserved.
        </div>
      </footer>
      <!-- Start Footer -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="{{ asset('assets/front/js/script.js') }}"></script>
  </body>
</html>