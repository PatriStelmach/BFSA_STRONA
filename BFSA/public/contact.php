<html lang="">

<?php include '../includes/head.html';?>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
      <header class="header_section">
          <?php include '../includes/header.php'; ?>

      </header>
    <!-- end header section -->

  </div>


  <!-- contact section -->

  <section class="contact_section ">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-6 px-0">
                  <div class="img-box">
                      <img src="/images/contact-img.jpg" alt="">
                  </div>
              </div>
              <div class="col-lg-5 col-md-6">
                  <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
                      <div class="heading_container">
                          <h2>
                              Skontaktuj się ze mną
                          </h2>
                      </div>
                      <form action="">
                          <div>
                              <input type="text" placeholder="Imię i Nazwisko" />
                          </div>
                          <div>
                              <input type="email" placeholder="Email" />
                          </div>
                          <div>
                              <input type="text" placeholder="Numer telefonu" />
                          </div>
                          <div>
                              <input type="text" class="message-box" placeholder="Wiadomość" />
                          </div>
                          <div class="d-flex ">
                              <button>
                                  Wyślij
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <footer>
      <?php include '../includes/footer.php'; ?>
  </footer>

  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.js"></script>

</body>

</html>