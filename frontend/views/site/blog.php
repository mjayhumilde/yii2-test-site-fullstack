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

                <?php if (empty($blogs)): ?>
                    <div class="alert alert-danger">
                        <?php if (!empty($searchTerm)): ?>
                            No blogs found with the search term "<?= Html::encode($searchTerm) ?>".
                        <?php else: ?>
                            No blogs available at the moment.
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <!-- Show search results info -->
                    <?php if (!empty($searchTerm)): ?>
                        <div class="alert alert-success">
                            Found <?= count($blogs) ?> blogs for "<?= Html::encode($searchTerm) ?>"
                        </div>
                    <?php endif; ?>

                    <!-- If there are blogs, display them -->
                    <?php foreach ($blogs as $blog): ?>
                        <div class="row me-lg-4">
                            <div class="card border-0 shadow rounded-0 p-0">
                                <img src="<?= Url::to('@web/' . Html::encode($blog->image_cover)) ?>" alt="Blog Image" class="card-img-top rounded-0" />
                                <div class="card-body">
                                    <h5 class="card-title"><?= Html::encode($blog->title) ?></h5>
                                    <div class="d-flex gap-3 text-muted" style="font-size: 12px">
                                        <div>
                                            <i class="fa-solid fa-user"></i>
                                            <span><?= 'Test Site Admin' ?></span>
                                        </div>
                                        <div>
                                            <i class="fa-regular fa-clock"></i>
                                            <span><?= Yii::$app->formatter->asDatetime($blog->created_at) ?></span>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-comment-dots"></i>
                                            <span><?= '35 comments' ?></span>
                                        </div>
                                    </div>

                                    <div class="card-text">
                                        <?= Html::decode($blog->description) ?>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
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
                <?php endif; ?>

            </div>

            <div class="col col-lg-3">
                <div class="shadow w-100 w-lg-75 p-4">
                    <h6 class="mb-3 fw-bold fs-5">Search</h6>
                    <div class="d-flex mb-4">
                        <?= Html::beginForm(['site/blog'], 'get', ['class' => 'w-100 d-flex', 'id' => 'search-form']) ?>

                        <!-- Input field with value set to the current search term -->
                        <?= Html::textInput('search', $searchTerm ?? '', [
                            'style' => 'border: solid 1px rgb(220, 218, 218);',
                            'class' => 'p-2 w-75 rounded-start',
                            'placeholder' => 'Search blogs...'
                        ]) ?>

                        <!-- Submit button aligned to the right -->
                        <?= Html::submitButton('<i class="fa-solid fa-magnifying-glass"></i>', [
                            'class' => 'py-2 px-4 bg-success text-white d-flex justify-content-center align-items-center rounded-end w-25 border-0',
                            'style' => 'border-radius: 0;',
                            'id' => 'search-btn'
                        ]) ?>

                        <?= Html::endForm() ?>
                    </div>

                    <!-- Clear search button if there's an active search -->
                    <?php if (!empty($searchTerm)): ?>
                        <div class="mb-3">
                            <a href="<?= Url::to(['site/blog']) ?>" class="btn btn-outline-secondary btn-sm">
                                <i class="fa-solid fa-times"></i> Clear Search
                            </a>
                        </div>
                    <?php endif; ?>

                    <h6 class="mb-2 fw-bold fs-5">Categories</h6>
                    <div class="mb-3">
                        <p class="m-0">General <span class="text-muted">(25)</span></p>
                        <p class="m-0">Lifestyle <span class="text-muted">(12)</span></p>
                        <p class="m-0">Travel <span class="text-muted">(5)</span></p>
                        <p class="m-0">Design <span class="text-muted">(22)</span></p>
                        <p class="m-0">Creative <span class="text-muted">(8)</span></p>
                        <p class="m-0">Education <span class="text-muted">(14)</span></p>
                    </div>

                    <div>
                        <h6 class="mb-3 fw-bold fs-5">Recent Post</h6>
                        <!-- Loop through the most recent posts -->
                        <?php foreach ($recentBlogs as $blog): ?>
                            <div class="d-flex gap-2 mb-1">
                                <div class="w-25">
                                    <img src="<?= Url::to('@web/' . Html::encode($blog->image_cover)) ?>" alt="Blog Image" class="w-100" />
                                </div>
                                <div>
                                    <!-- Title behaves like Read More button -->
                                    <p class="m-0 fw-bold">
                                        <a href="<?= Url::to(['site/single-blog', 'id' => $blog->id]) ?>" class="text-decoration-none text-dark">
                                            <?= Html::encode($blog->title) ?>
                                        </a>
                                    </p>
                                    <p class="m-0 fst-italic text-secondary"><?= Yii::$app->formatter->asDatetime($blog->created_at) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>


                    <!-- Tag Section -->
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
</section>