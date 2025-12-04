<?php include '_header.php'; ?>

<section class="design-system-wrapper mb-5">


  <div class="ds-title bg-primary">
    <h1 class="text-center color-white-light"> Other </h1>
  </div>

 
  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Progress </h1>
      <!-- https://codepen.io/waleedhd1/pen/poMWGgN -->
    </div>

    <div class="container">
      <div class="row text-center mb-4">
        <div class="col-md-4">
          <div class="progress-circle" data-finished="80" data-type="danger"></div>
          <p class="h3 text-capitalize mt-2"> danger </p>
        </div>
        <div class="col-md-4">
          <div class="progress-circle" data-finished="90" data-type="success"></div>
          <p class="h3 text-capitalize mt-2"> success </p>
        </div>
        <div class="col-md-4">
          <div class="progress-circle" data-finished="70" data-type=""></div>
          <p class="h3 text-capitalize mt-2"> other </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

        </div>
      </div>
    </div> <!-- container -->

  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Lists </h1>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-md-6">

          <div class="card">

            <ul class="links-list list-sm">

              <?php foreach ($linksList as $link) { ?>

                <li>
                  <a href="#" class="link-with-end-icon">
                    <div class="start">
                      <i class="icon icon-trash color-primary me-2"></i>
                      <span class="text"> <?php echo $link ?> </span>
                    </div>
                    <div class="end">
                      <i class="icon icon-chevron-right icon-sm"></i>
                    </div>
                  </a>
                </li>


              <?php } ?>

            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <ul class="links-list">

              <li>
                <a href="#" class="link-with-end-icon">
                  <div class="start">
                    <i class="icon icon-orders"></i>
                    <span class="text"> Orders </span>
                  </div>
                  <div class="end">
                    <i class="icon icon-chevron-right icon-sm"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#" class="link-with-end-icon">
                  <div class="start">
                    <i class="icon icon-cards"></i>
                    <span class="text"> Purchased cards </span>
                  </div>
                  <div class="end">
                    <i class="icon icon-chevron-right icon-sm"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#" class="link-with-end-icon">
                  <div class="start">
                    <i class="icon icon-wishlist"></i>
                    <span class="text"> Wishlist </span>
                  </div>
                  <div class="end">
                    <i class="icon icon-chevron-right icon-sm"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#" class="link-with-end-icon">
                  <div class="start">
                    <i class="icon icon-location"></i>
                    <span class="text"> Shipping Addresses </span>
                  </div>
                  <div class="end">
                    <i class="icon icon-chevron-right icon-sm"></i>
                  </div>
                </a>
              </li>

              <li>
                <a href="#" class="link-with-end-icon">
                  <div class="start">
                    <i class="icon icon-returns"></i>
                    <span class="text"> Returns </span>
                  </div>
                  <div class="end">
                    <i class="icon icon-chevron-right icon-sm"></i>
                  </div>
                </a>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Gray background </h1>
    </div>
    <div class="container">
      <div style="height: 300px;" class="d-flex justify-content-center align-items-center bg-gray mb-4">
        <h3> background gray </h3>
      </div>
    </div>
  </section>

  <hr>

  <section>
    <div class="headline-wrapper">
      <h1 class="headline"> Change quantity </h1>
    </div>
    <div class="container">
      <div class="change-quantity-wrapper card mb-4">
        <div class="counter">
          <span class="down" onClick='decreaseCount(event, this)'> <i class="icon icon-minus"></i> </span>
          <input type="text" value="4">
          <span class="up" onClick='increaseCount(event, this)'> <i class="icon icon-plus"></i></span>
        </div> <!-- counter -->
      </div><!-- change-quantity-wrapper -->


    </div>
  </section>

</section>

<?php include '_footer.php'; ?>

<script>
  $(function() {
    circularProgress();
  });
</script>