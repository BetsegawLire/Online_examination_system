<html>
    <head>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
    <body>
        <!-- navabar start -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="hulogoo.png" width="50" height="60" alt="">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
   
<a class="nav-link" style="color: white;" href="login.php">Login</a></li>
        <!-- </li> -->
        <li class="nav-item">
        <a href="index.php" class="nav-link" style="color: white;">Home</a>

        </li>
        <!-- <li class="nav-item">
        <a href="" class="nav-link" style="color: white;">News</a>

        </li> -->
        <!-- <li class="nav-item">
        <a href="contact_us.php" class="nav-link" style="color: white;">Contact Us</a>

        </li> -->
        <li class="nav-item">
        <a href="about_us.php" class="nav-link" style="color: white;">About Us</a>

        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
        <!-- navbar end -->
         <!-- section a: conact form -->
    <section id="contact-a" class="text-center py-3" style="margin-top: 100px;">
        <div class="container">
            <h2 class="section-titl">Contact Us</h2>
            <div class="bottom-lin"></div>
            <p class="lead">Here is how you can reach Us</p>
            <form action="">
                <div class="text-fields">
                    <input type="text" class="text-input name-input" placeholder="Name">
                    <input type="text" class="text-input subject-input" placeholder="Subject">
                    <input type="email" class="text-input email-input" placeholder="Email Address">
                    <input type="text" class="text-input phone-input" placeholder="Phone Number">
                    <textarea class="text-input message-input" placeholder="Enter Message"></textarea>
                </div>
                <button class="btn-dark" type="submit">Submit</button>
            </form>
        </div>
    </section>
  
    <!-- section b: conatct-info -->
    <section id="contact-b" class="py-b bg-dark text-light">
        <div class="container">
            <div class="contact-info">
                <div>
                    <i class="fas fa-envelope fa-2x"></i>
                    <h3>Email</h3>
                    <p>          info@haramaya.com
</p>
                </div>
                <div>
                    <i class="fas fa-phone fa-2x"></i>
                    <h3>Phone</h3>
                    <p>
          +251 9________
                    </p>
                </div>
                <div>
                    <i class="fas fa-address-card fa-2x"></i>
                    <h3>Address</h3>
                    <p>Haramaya University</p>
                </div>
            </div>
        </div>
    </section>

     <!-- footer start -->
     <div class="bg-dark">
    <div class="row row-cols-lg-3 p-5 mx-auto" style="width: 80%; border-bottom: 1px white solid;" >
      <div class="col text-center">
        <img src="hulogoo.png" class="mb-4" width="100" height="100" alt="">
        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quas.</p>
        <div class="row row-cols-lg-4" style="margin: 0; padding: 0;">
          <div class="col">

            <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="facebook"></fa-icon>
          </div>

          <div class="col">

            <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="twitter"></fa-icon>
          </div>

          <div class="col">

            <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="youtube"></fa-icon>
          </div>

          <div class="col">

            <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="instagram"></fa-icon>
            
          </div>
        </div>

      </div>

      <div class="col text-center">
        <h1 class="text-light mb-4" style="font-family: 'Bree Serif', serif;">Useful Links</h1>
        <ul style="list-style:none" class="text-start">
          <li class="text-light mb-2 fs-6" style="font-family: 'Bree Serif', serif;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            Home
          </li>

          <li class="text-light mb-2 fs-6" style="font-family: 'Bree Serif', serif;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            News
          </li>

          <li class="text-light mb-2 fs-6" style="font-family: 'Bree Serif', serif;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            Contact Us
          </li>
        </ul>
      </div>

    

      <div class="col text-center">
        <h1 class="text-light mb-4" style="font-family: 'Bree Serif', serif;">Contact Info</h1>
        <h5 class="text-light fs-6 mb-2" style="font-family: 'Bree Serif', serif;">
          <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="address"></fa-icon>
          Haramaya, Ethiopia
        </h5>

        <h5 class="text-light fs-6 mb-2" style="font-family: 'Bree Serif', serif;">
          <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="email"></fa-icon>
          info@haramaya.com
        </h5>

        <h5 class="text-light fs-6 mb-2" style="font-family: 'Bree Serif', serif;">
          <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="phone"></fa-icon>
          +251 9________
        </h5>
      </div>
    </div>

    <h4 class="text-light p-3 text-center">&copy; 2023 All Rights Reserved | Haramaya University</h4>
  </div>
      <!-- footer end -->
</body>
</html>