  <?php

    /** @var yii\web\View $this */

    use yii\helpers\Html;

    $this->title = 'Services';
    $this->params['breadcrumbs'][] = $this->title;
    ?>

  <!-- Services -->
  <section class="bg-light mt-4">
      <div class="container">
          <div class="px-3 py-5 px-sm-0 row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 text-center">
              <?php foreach ($services as $service): ?>
                  <div class="col">
                      <div class="p-5 h-100 bg-white">
                          <?= $service['icon'] ?>
                          <h4 class=""><?= $service['title'] ?></h4>
                          <p class="fs-6 text-secondary"><?= $service['description'] ?></p>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      </div>
  </section>

  <!-- Features -->
  <section>
      <div class="container px-3 py-5 px-sm-0">
          <div class="d-flex flex-column justify-content-center align-items-center">
              <h2 class="fw-semibold">FEATURES</h2>
              <div class="d-flex justify-content-center mb-3">
                  <div class="bg-success mt-2" style="width: 50px; height: 3px;"></div>
              </div>
              <p class="text-center text-muted">
                  illum recusandae hic, odit natus ipsa quasi mollitia perferendis
                  maxime ab perspiciatis ut facilis quisquam Lorem ipsum dolor sit
                  amet consectetur adipisicing elit. At, ullam? Hic eum minima quo,
                  ipsum aperiam ex laboriosam ut facere recusandae, saepe quis eaque
                  impedit obcaecati nam repellat eveniet! Perspiciatis. vel libero!
                  Rem.
              </p>
          </div>

          <div class="container py-3">

              <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-3 text-center px-3 px-sm-0">
                  <div class="col">
                      <div class="shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-primary feat-1 fa-solid fa-icons"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-primary feat-2 fa-solid fa-font-awesome"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-primary feat-3 fa-solid fa-print"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-success feat-9 fa-solid fa-republican"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-warning feat-10 fa-solid fa-person-digging"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-danger feat-10 fa-solid fa-person-digging"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-primary feat-11 fa-solid fa-helmet-safety"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-warning feat-12 fa-solid fa-paint-roller"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-danger feat-10 fa-solid fa-person-digging"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-success feat-10 fa-solid fa-person-digging"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-warning feat-11 fa-solid fa-helmet-safety"></i> Lorem ipsum
                      </div>
                  </div>
                  <div class="col">
                      <div class=" shadow fw-bold px-lg-5 px-3 py-3 rounded text-start">
                          <i class="fs-4 text-danger feat-12 fa-solid fa-paint-roller"></i> Lorem ipsum
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>