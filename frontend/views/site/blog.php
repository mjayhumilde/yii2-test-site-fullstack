<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/summernote.min.css');
$this->registerCss("
    .card-text {
        max-height: 100px; /* You can adjust the max height as per your need */
        overflow: hidden; /* Hides overflow content */
        position: relative;
    }
    .card-text img {
        max-width: 100%; /* Ensures images are responsive and fit inside the container */
        height: auto;
    }
");
$this->registerCss("
    .card-img-top {
        width: 100%; /* Ensures the image takes the full width of the container */
        object-fit: cover;  /* Ensures the image covers the space while maintaining aspect ratio */
    }

    /* For screens below 600px */
    @media (max-width: 599px) {
        .card-img-top {
            max-height: 200px; /* Limit the height to 200px on smaller screens */
        }
    }

    /* For screens between 600px and 999px */
    @media (min-width: 600px) and (max-width: 999px) {
        .card-img-top {
            max-height: 400px; /* Limit the height to 400px on medium-sized screens */
        }
    }

    /* For screens above 1000px */
    @media (min-width: 1000px) {
        .card-img-top {
            max-height: 400px; /* Limit the height to 400px on larger screens */
        }
    }
");
$this->registerJsFile('@web/js/summernote.min.js', ['depends' => [\yii\web\JqueryAsset::class]]);
?>

<section>
    <div class="container my-5">
        <!-- blog cards container -->
        <div class="row row-cols-1 row-cols-lg-2 mt-4 d-flex flex-column-reverse flex-lg-row g-3">
            <div class="col d-flex flex-column gap-4 px-4 px-lg-0 col-lg-9">

                <?php foreach ($blogs as $blog): ?>
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

                                <div class="card-text">
                                    <?= Html::decode($blog->description) ?> <!-- Render raw HTML -->
                                </div>

                                <div class="d-flex justify-content-end">
                                    <a href="<?= Url::to(['site/single-blog', 'id' => $blog->id]) ?>">
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