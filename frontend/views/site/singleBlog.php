<?php

/** @var yii\web\View $this */
/** @var common\models\Blog $blog */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Html::encode($blog->title); // Set the page title to the blog title
$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['site/blog']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="mt-5">
    <div class="container mb-5">
        <div class="row row-cols-1 row-cols-lg-2 mt-4 d-flex flex-column-reverse flex-lg-row g-3">
            <div class="col col-lg-9 d-flex flex-column gap-4 px-4 px-lg-0">
                <div class="row me-lg-4">
                    <div class="card border-0 shadow rounded-0 p-0">
                        <img src="<?= Url::to('@web/' . Html::encode($blog->image_cover)) ?>" alt="Blog Image" class="card-img-top rounded-0" />
                        <div class="card-body">
                            <h5 class="card-title"><?= Html::encode($blog->title) ?></h5>
                            <div class="d-flex gap-3 text-muted" style="font-size: 12px">
                                <div>
                                    <i class="fa-solid fa-user"></i>
                                    <span><?= 'John Doe' // Static author name 
                                            ?></span>
                                </div>
                                <div>
                                    <i class="fa-regular fa-clock"></i>
                                    <span><?= Yii::$app->formatter->asDatetime($blog->created_at) ?></span>
                                </div>
                                <div>
                                    <i class="fa-solid fa-comment-dots"></i>
                                    <span><?= '35 comments' // Static comments count 
                                            ?></span>
                                </div>
                            </div>

                            <!-- Blog content -->
                            <div class="card-text">
                                <?= Html::decode($blog->description) ?> <!-- Render the full blog content here -->
                            </div>

                            <!-- Comment section (static) -->
                            <div class="mt-4">
                                <h5>Comments</h5>
                                <article class="comment-card d-flex gap-3 mb-4">
                                    <img style="width: 50px; height: 50px;"
                                        src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?q=80&w=1085&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjJ8fGd1eSUyMHByb2ZpbGUlMjBvbiUyMGElMjBzdWl0fGVufDB8fDB8fHww"
                                        alt="Aron Alvarado's avatar" />
                                    <div class="comment-content flex-grow-1">
                                        <div class="d-flex align-items-baseline gap-2 mb-1">
                                            <h6 class="fw-bold m-0">Aron Alvarado</h6>
                                            <span class="text-muted small">01 Jan, 2020</span>
                                            <a href="#" class="text-secondary small fw-bold text-decoration-none">
                                                <i class="fa-solid fa-reply"></i> Reply
                                            </a>
                                        </div>
                                        <p class="comment-text mb-2">
                                            Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe.
                                        </p>
                                    </div>
                                </article>
                            </div>

                            <!-- Leave a reply form -->
                            <div class="mt-5 shadow py-4 px-3 d-flex flex-column gap-3 text-muted">
                                <div>
                                    <h6 class="m-0 mb-1 text-black fw-bold">Leave a Reply</h6>
                                    <p class="m-0">Your email address will not be published. Required fields are marked*</p>
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
                </div>
            </div>

            <div class="col col-lg-3">
                <div class="shadow w-100 w-lg-75 p-4">
                    <h6 class="mb-3 fw-bold fs-5">Search</h6>
                    <div class="d-flex mb-4">
                        <input type="text" style="border: solid 1px rgb(220, 218, 218)" class="p-2 w-100 rounded-start" />
                        <span class="py-2 px-4 bg-success text-white d-flex justify-content-center align-items-center rounded-end"
                            style="width: 10%">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
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

<?php
$this->registerCss("
    .card-text img {
        max-width: 100%;
        height: auto;
        object-fit: contain; /* Ensures that the image stays within the bounds */
    }
");
?>