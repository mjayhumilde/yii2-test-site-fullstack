 <?php

    /** @var yii\web\View $this */

    use yii\helpers\Html;
    use yii\helpers\Url;

    $this->title = 'Blog';
    $this->params['breadcrumbs'][] = $this->title;
    ?>

 <section>
     <div class="container my-5">
         <!-- blog cards container -->
         <div class="row row-cols-1 row-cols-lg-2 mt-4 d-flex flex-column-reverse flex-lg-row g-3">
             <div class="col d-flex flex-column gap-4 px-4 px-lg-0 col-lg-9">


                 <?php foreach ($blogs as $blog): ?>
                     <div class="row me-lg-4">
                         <div class="card border-0 shadow rounded-0 p-0">
                             <img
                                 src="<?= $blog['image'] ?>"
                                 alt="" class="card-img-top rounded-0" />
                             <div class="card-body">
                                 <h5 class="card-title"><?= $blog['title'] ?></h5>
                                 <div class="d-flex gap-3 text-muted" style="font-size: 12px">
                                     <div>
                                         <i class="fa-solid fa-user"></i> <span><?= $blog['name'] ?></span>
                                     </div>
                                     <div>
                                         <i class="fa-regular fa-clock"></i>
                                         <span><?= $blog['date'] ?></span>
                                     </div>
                                     <div>
                                         <i class="fa-solid fa-comment-dots"></i>
                                         <span><?= $blog['comments'] ?> comments</span>
                                     </div>
                                 </div>

                                 <p class="card-text">
                                     Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                     Exercitationem itaque, magni quidem et ipsam quae fugiat
                                     expedita assumenda. Officia temporibus pariatur dolores
                                     dolorem minus explicabo molestiae aut. Ex, distinctio
                                     blanditiis!
                                 </p>
                                 <div class="d-flex justify-content-end">
                                     <a href="<?= Url::to(['site/single-blog']) ?>">
                                         <button class="py-2 px-4 bg-success border-0 rounded text-white">
                                             Read More
                                         </button>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>


             </div>

             <div class="col col-lg-3">
                 <div class="shadow w-100 w-lg-75 p-4">
                     <h6 class="mb-3 fw-bold fs-5">Search</h6>
                     <div class="d-flex mb-4">
                         <input type="text" style="border: solid 1px rgb(220, 218, 218)" class="p-2 w-100 rounded-start" /><span
                             class="py-2 px-4 bg-success text-white d-flex justify-content-center align-items-center rounded-end"
                             style="width: 10%"><i class="fa-solid fa-magnifying-glass"></i></span>
                     </div>
                     <h6 class="mb-2 fw-bold fs-5">Categories</h6>
                     <div class="mb-3">
                         <p class="m-0">
                             General <span class="text-muted">(25)</span>
                         </p>
                         <p class="m-0">
                             Lifestyle <span class="text-muted">(12)</span>
                         </p>
                         <p class="m-0">Travel <span class="text-muted">(5)</span></p>
                         <p class="m-0">Design <span class="text-muted">(22)</span></p>
                         <p class="m-0">
                             Creative <span class="text-muted">(8)</span>
                         </p>
                         <p class="m-0">
                             Education <span class="text-muted">(14)</span>
                         </p>
                     </div>
                     <div>
                         <h6 class="mb-3 fw-bold fs-5">Recent Post</h6>
                         <!-- Recent Post Card -->
                         <div class="d-flex gap-2 mb-1">
                             <div class="w-25">
                                 <img src="https://spaces-cdn.clipsafari.com/fonc3iaqjfz274m12cl81e9ottfv" alt="" class="w-100" />
                             </div>
                             <div>
                                 <p class="m-0 fw-bold">blah blah</p>
                                 <p class="m-0 fst-italic text-secondary">jan, 1,20025</p>
                             </div>
                         </div>
                         <div class="d-flex gap-2 mb-1">
                             <div class="w-25">
                                 <img src="https://spaces-cdn.clipsafari.com/fonc3iaqjfz274m12cl81e9ottfv" alt="" class="w-100" />
                             </div>
                             <div>
                                 <p class="m-0 fw-bold">blah blah</p>
                                 <p class="m-0 fst-italic text-secondary">jan, 1,20025</p>
                             </div>
                         </div>
                         <div class="d-flex gap-2 mb-1">
                             <div class="w-25">
                                 <img src="https://spaces-cdn.clipsafari.com/fonc3iaqjfz274m12cl81e9ottfv" alt="" class="w-100" />
                             </div>
                             <div>
                                 <p class="m-0 fw-bold">blah blah</p>
                                 <p class="m-0 fst-italic text-secondary">jan, 1,20025</p>
                             </div>
                         </div>
                         <div class="d-flex gap-2 mb-1">
                             <div class="w-25">
                                 <img src="https://spaces-cdn.clipsafari.com/fonc3iaqjfz274m12cl81e9ottfv" alt="" class="w-100" />
                             </div>
                             <div>
                                 <p class="m-0 fw-bold">blah blah</p>
                                 <p class="m-0 fst-italic text-secondary">jan, 1,20025</p>
                             </div>
                         </div>

                         <!-- Tag -->
                         <div class="d-flex flex-wrap gap-2 mt-3">
                             <span class="p-2 border text-muted bg-white">App</span>
                             <span class="p-2 border text-muted bg-white">IT</span>
                             <span class="p-2 border text-muted bg-white">Business</span>
                             <span class="p-2 border text-muted bg-white">Design</span>
                             <span class="p-2 border text-muted bg-white">Office</span>
                             <span class="p-2 border text-muted bg-white">Creative</span>
                             <span class="p-2 border text-muted bg-white">Studio</span>
                             <span class="p-2 border text-muted bg-white">Smart</span>
                             <span class="p-2 border text-muted bg-white">Tips</span>
                             <span class="p-2 border text-muted bg-white">Marketing</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>