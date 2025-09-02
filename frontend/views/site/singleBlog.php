 <?php

    /** @var yii\web\View $this */

    use yii\helpers\Html;
    use yii\helpers\Url;

    $this->title = 'Single BLog';
    $this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['site/blog']];
    $this->params['breadcrumbs'][] = $this->title;
    ?>

 <section class="mt-5">
     <div class="container mb-5">
         <!-- blog cards container -->
         <div class="row row-cols-1 row-cols-lg-2 mt-4 d-flex flex-column-reverse flex-lg-row g-3">
             <div class="col col-lg-9 d-flex flex-column gap-4 px-4 px-lg-0">
                 <div class="row me-lg-4">
                     <div class="card border-0 shadow rounded-0 p-0">
                         <img src="https://plus.unsplash.com/premium_photo-1682432982609-578969ff8b75?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8b2ZmaWNlJTIwbWFufGVufDB8fDB8fHww"
                             alt="" class="card-img-top rounded-0" />
                         <div class="card-body">
                             <h5 class="card-title">Card Title</h5>
                             <div class="d-flex gap-3 text-muted" style="font-size: 12px">
                                 <div>
                                     <i class="fa-solid fa-user"></i> <span>Mjay</span>
                                 </div>
                                 <div>
                                     <i class="fa-regular fa-clock"></i>
                                     <span>july, 1, 2025</span>
                                 </div>
                                 <div>
                                     <i class="fa-solid fa-comment-dots"></i>
                                     <span>12 comments</span>
                                 </div>
                             </div>

                             <p class="card-text">
                                 Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Exercitationem itaque, magni quidem et ipsam quae fugiat
                                 expedita assumenda. Officia temporibus pariatur dolores
                                 dolorem minus explicabo molestiae aut. Ex, distinctio
                                 blanditiis!
                             </p>

                             <div class="d-flex py-4 px-1 justify-content-between gap-3 m-2"
                                 style="background-color: rgb(220, 218, 218)">
                                 <div style="height: 8rem; width: 6px" class="bg-black"></div>
                                 <div
                                     class="d-flex justify-content-center align-items-center text-muted fst-italic fw-bold fs-6">
                                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Sed, eaque amet. Cupiditate unde autem eveniet sunt
                                     natus quisquam, ipsa asperiores animi atque assumenda
                                     molestiae fugit architecto quia ea, quas officiis?
                                 </div>
                             </div>
                             <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Veritatis, est tempora. Quos optio fuga nostrum,
                                 cupiditate ut dicta labore incidunt, officiis harum est
                                 excepturi sapiente libero maiores laborum, mollitia error!
                                 Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Sit accusantium praesentium suscipit hic error dolores
                                 pariatur ducimus, minus ullam ipsa, iusto aliquid
                                 repudiandae blanditiis corrupti necessitatibus voluptate
                                 reiciendis quidem aliquam!
                             </p>
                             <h5 class="mt-4 mb-3">Lorem ipsum kahki</h5>
                             <p>
                                 Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                 Repudiandae libero laborum labore quam sit quasi
                                 consequuntur itaque, accusantium possimus saepe numquam,
                                 animi quo nihil? Facilis cumque animi corporis illo
                                 nesciunt? Lorem ipsum dolor sit amet consectetur
                                 adipisicing elit. Iure dolores modi optio itaque totam
                                 molestias, saepe repellendus accusamus minima, voluptate
                                 cumque. Dolor repudiandae architecto esse facere, hic
                                 eveniet non id!
                             </p>
                             <img class="w-100 mb-2"
                                 src="https://plus.unsplash.com/premium_photo-1752497523819-9d1e02553a66?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw2fHx8ZW58MHx8fHx8"
                                 alt="" />
                             <p>
                                 Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                 Esse fugiat incidunt veniam et delectus suscipit facilis
                                 reprehenderit eum officiis rerum omnis animi, eveniet
                                 optio repellat aspernatur sit! Dolor, facere deleniti.
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Odio commodi expedita ab nemo minima autem in est
                                 cupiditate sapiente, corporis eveniet dolores numquam
                                 ducimus itaque nulla, iure blanditiis ipsa ratione.
                             </p>
                             <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Maxime dolorum a rem est asperiores mollitia sapiente
                                 laborum non iure tempore, laudantium vero, id eius,
                                 exercitationem alias quia molestiae. Adipisci, quaerat.
                             </p>
                             <hr class="m-2" />
                             <div class="d-flex gap-3 text-muted" style="font-size: 12px">
                                 <div>
                                     <span><i class="fa-solid fa-folder"></i></span>
                                     Business
                                 </div>
                                 <div>
                                     <span><i class="fa-solid fa-tag"></i></span> Creative,
                                     Tips, Marketing
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="shadow mt-4">
                         <div class="d-flex gap-2 py-3 px-1">
                             <div class="d-flex justify-content-center align-items-center">
                                 <img class="rounded-circle w-100"
                                     src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhAu72pB24JrKJpqABtlUUqV02c4W-BaPyBQ&s"
                                     alt="" />
                             </div>
                             <div>
                                 <h5 class="m-0 mb-1">Mjay Humilde</h5>
                                 <div class="d-flex gap-2 text-muted mb-2">
                                     <i class="fa-brands fa-facebook"></i>
                                     <i class="fa-brands fa-instagram"></i>
                                     <i class="fa-brands fa-twitter"></i>
                                 </div>
                                 <p class="text-muted fst-italic">
                                     Lorem ipsum dolor sit, amet consectetur adipisicing
                                     elit. Debitis assumenda odio eum, nulla, rem voluptates
                                     in dolor non placeat earum expedita cumque quos deserunt
                                     reiciendis, quaerat dolorem ratione magni? Numquam?
                                 </p>
                             </div>
                         </div>
                     </div>

                     <h5 class="my-4 p-0">8 Comments</h5>

                     <article class="comment-card d-flex gap-3 mb-4">
                         <img style="width: 50px; height: 50px;"
                             src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?q=80&w=1085&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Aron Alvarado's avatar" />

                         <div class="comment-content flex-grow-1">
                             <div class="d-flex align-items-baseline gap-2 mb-1">
                                 <h6 class="fw-bold m-0">Aron Alvarado</h6>
                                 <span class="text-muted small">01 Jan, 2020</span>
                                 <a href="#" class="text-secondary small fw-bold text-decoration-none">
                                     <i class="fa-solid fa-reply"></i> Reply
                                 </a>
                             </div>
                             <p class="comment-text mb-2">
                                 Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                             </p>

                             <div class="comment-reply d-flex gap-3 mt-3 ps-5"> <img style="width: 50px; height: 50px;"
                                     src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?q=80&w=1085&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Lynda Small's avatar" />
                                 <div class="comment-content">
                                     <div class="d-flex align-items-baseline gap-2 mb-1">
                                         <h6 class="fw-bold m-0">Lynda Small</h6>
                                         <span class="text-muted small">01 Jan, 2020</span>
                                         <a href="#" class="text-secondary small fw-bold text-decoration-none">
                                             <i class="fa-solid fa-reply"></i> Reply
                                         </a>
                                     </div>
                                     <p class="comment-text mb-2">
                                         Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est...
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </article>

                     <!-- leave a reply section -->
                     <div class="mt-5 shadow py-4 px-3 d-flex flex-column gap-3 text-muted">
                         <div>
                             <h6 class="m-0 mb-1 text-black fw-bold">Leave a Reply</h6>
                             <p class="m-0">
                                 Your emaill address will not be publish. Required fields
                                 are marked*
                             </p>
                         </div>

                         <div class="d-flex flex-column flex-md-row gap-3">
                             <input type="text" placeholder="Your Name" class="w-100" />
                             <input type="email" placeholder="Your Email" class="w-100" />
                         </div>
                         <input type="text" placeholder="Your Website" />
                         <textarea name="" id="" placeholder="Your Message"></textarea>

                         <div>
                             <button class="bg-black py-2 px-3 text-white border-0 rounded">
                                 Post Comment
                             </button>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col col-lg-3">
                 <div class="shadow w-100 w-lg-75 p-4">
                     <h6 class="mb-3 fw-bold">Search</h6>
                     <div class="d-flex mb-4">
                         <input type="text" style="border: solid 1px rgb(220, 218, 218)"
                             class="p-2 w-100 rounded-start" /><span
                             class="py-2 px-4 bg-success text-white d-flex justify-content-center align-items-center rounded-end"
                             style="width: 10%"><i class="fa-solid fa-magnifying-glass"></i></span>
                     </div>
                     <h6 class="mb-2 fw-bold">Categories</h6>
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
                         <h6 class="mb-3 fw-bold">Recent Post</h6>
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