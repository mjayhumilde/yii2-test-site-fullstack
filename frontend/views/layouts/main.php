<?php

/** @var yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<style>
    .carousel-item {
        min-height: 100vh;
    }

    .carousel-item img {
        height: 100vh;
        object-fit: cover;
    }

    .breadcrumb-item a {
        text-decoration: none;
        color: white;
    }
</style>
<?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <nav class="navbar navbar-expand-md bg-white navbar-light fixed-top">
            <div class="container">
                <?= Html::a(
                    '<h2 class="mb-0 text-black"><span class="text-success">TEST</span>SITE</h2>',
                    ['/site/index'],
                    ['class' => 'navbar-brand']
                ) ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 13px;">
                    <ul class="navbar-nav ms-auto gap-3">
                        <?php
                        // Helper function to determine if a link is active
                        function isActive($controller, $actions)
                        {
                            $currentController = Yii::$app->controller->id;
                            $currentAction = Yii::$app->controller->action->id;

                            if (!is_array($actions)) {
                                $actions = [$actions];
                            }

                            return $currentController === $controller && in_array($currentAction, $actions);
                        }

                        // HOME Link
                        $homeClass = 'nav-link fw-bold';
                        if (isActive('site', 'index')) {
                            $homeClass .= ' active text-success';
                        } else {
                            $homeClass .= ' text-black';
                        }
                        ?>
                        <li class="nav-item">
                            <?= Html::a('HOME', ['/site/index'], ['class' => $homeClass]) ?>
                        </li>

                        <?php
                        // ABOUT Dropdown
                        $isAboutActive = isActive('site', ['about', 'team', 'testimonial']);
                        $aboutClass = 'btn nav-link btn-secondary bg-white fw-bold dropdown-toggle border-0';
                        if ($isAboutActive) {
                            $aboutClass .= ' active text-success';
                        } else {
                            $aboutClass .= ' text-black';
                        }
                        ?>
                        <li class="nav-item">
                            <div class="dropdown nav-item d-flex justify-content-start">
                                <a class="<?= $aboutClass ?>" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    ABOUT
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><?= Html::a('About Us', ['/site/about'], ['class' => 'dropdown-item']) ?></li>
                                    <li><?= Html::a('Team', ['/site/team'], ['class' => 'dropdown-item']) ?></li>
                                    <li><?= Html::a('Testimonials', ['/site/testimonial'], ['class' => 'dropdown-item']) ?></li>
                                </ul>
                            </div>
                        </li>

                        <?php
                        // SERVICES Link
                        $servicesClass = 'nav-link fw-bold';
                        if (isActive('site', 'services')) {
                            $servicesClass .= ' active text-success';
                        } else {
                            $servicesClass .= ' text-black';
                        }
                        ?>
                        <li class="nav-item">
                            <?= Html::a('SERVICES', ['/site/services'], ['class' => $servicesClass]) ?>
                        </li>

                        <?php
                        // PRICING Link
                        $pricingClass = 'nav-link fw-bold';
                        if (isActive('site', 'pricing')) {
                            $pricingClass .= ' active text-success';
                        } else {
                            $pricingClass .= ' text-black';
                        }
                        ?>
                        <li class="nav-item">
                            <?= Html::a('PRICING', ['/site/pricing'], ['class' => $pricingClass]) ?>
                        </li>

                        <?php
                        // BLOG Link
                        $blogClass = 'nav-link fw-bold';
                        if (isActive('site', ['blog', 'single-blog'])) {
                            $blogClass .= ' active text-success';
                        } else {
                            $blogClass .= ' text-black';
                        }
                        ?>
                        <li class="nav-item">
                            <?= Html::a('BLOG', ['/site/blog'], ['class' => $blogClass]) ?>
                        </li>

                        <?php
                        // CONTACT Link
                        $contactClass = 'nav-link fw-bold';
                        if (isActive('site', 'contact')) {
                            $contactClass .= ' active text-success';
                        } else {
                            $contactClass .= ' text-black';
                        }
                        ?>
                        <li class="nav-item">
                            <?= Html::a('CONTACT', ['/site/contact'], ['class' => $contactClass]) ?>
                        </li>
                    </ul>
                    <di nv class="text-secondary p-2 d-flex d-md-none align-items-center justify-content-center gap-3 fs-3 mt-5 mt-md-0">
                        <i class="navs fa-brands fa-twitter social"></i>
                        <i class="navs fa-brands fa-facebook social"></i>
                        <i class="navs fa-brands fa-instagram social"></i>
                        <i class="navs fa-brands fa-linkedin social"></i>
                </div>
                <div class="border-start border-2 border-muted text-secondary ps-2 d-none d-md-flex align-items-center justify-content-center gap-3" style="font-size: 15px;">
                    <i class="navs fa-brands fa-twitter social"></i>
                    <i class="navs fa-brands fa-facebook social"></i>
                    <i class="navs fa-brands fa-instagram social"></i>
                    <i class="navs fa-brands fa-linkedin social"></i>
                </div>
            </div>
            </div>
        </nav>

        <!-- // this is the breadcrumbs -->
        <?php
        $currentRoute = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
        $excludedRoutes = ['site/index', 'site/register', 'site/login'];
        $hideBreadcrumbs = in_array($currentRoute, $excludedRoutes) ? 'd-none' : '';
        ?>
        <div class="bg-success text-white py-2 <?= $hideBreadcrumbs ?>" style="margin-top: 4rem;">
            <div class="container d-flex justify-content-between align-items-center">
                <p class="m-0 fs-3"><?= Html::encode($this->title) ?></p>

                <?php if (!empty($this->params['breadcrumbs'])): ?>
                    <?= yii\bootstrap5\Breadcrumbs::widget([
                        'links' => $this->params['breadcrumbs'],
                        'options' => ['class' => ['breadcrumb', 'm-0']],
                        'itemTemplate' => "<li class=\"breadcrumb-item\">{link}</li>\n", // Removed `text-white`
                        'activeItemTemplate' => "<li class=\"breadcrumb-item active\" style=\"color: white;\" aria-current=\"page\">{link}</li>\n", // Removed `text-white`
                    ]) ?>
                <?php endif ?>
            </div>
        </div>
    </header>


    <main id="main" role="main">
        <div>

            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="bg-dark m-0 ">
        <div class="container p-3 py-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 text-white g-4 g-lg-3">
                <div class="col">
                    <!-- company section -->
                    <h5 class="mb-3">
                        <b> COMPANY</b>
                    </h5>
                    <div class="text-white-50" style="font-size: 15px;">
                        <address class="w-75 mb-4">Sampaloc, Bolinao, Pangasinan Carizal st. 087</address>
                        <p class="m-0"><b>Phone: </b> 09271913996</p>
                        <p class="m-0"><b>Email: </b> example@gmail.com</p>
                    </div>
                </div>

                <!-- useful link -->
                <div class="col">
                    <h6 class="mb-3">
                        <b>Userful Link</b>
                    </h6>
                    <div style="font-size: 13px;">
                        <ul class="list-unstyled ps-2 d-flex flex-column gap-3">
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size: 8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">Home</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size: 8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">About us</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size: 8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">Services</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size: 8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">Terms of service</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size: 8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- our services -->
                <div class="col">
                    <h6 class="mb-3">
                        <b>Our Services</b>
                    </h6>
                    <div style="font-size: 13px;">
                        <ul class="list-unstyled ps-2 d-flex flex-column gap-3">
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size:  8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">Web Design</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size:  8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">Web Development</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size:  8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">Product Management</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size: 8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">Marketing</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-chevron-right me-1 text-success" style="font-size:  8px;"></i>
                                <a href="#" class="text-decoration-none text-white-50">Graphic Design</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- newsletter -->
                <div class="col">
                    <h6 class="mb-3"><b>Join our Newsletter</b></h6>
                    <div>
                        <p class="text-white-50" style="font-size: 15px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing eliolest
                            etur adipisicing
                        </p>
                        <div class="d-flex mt-4">
                            <input class="w-100" type="text" />
                            <button class="bg-success text-white border-0 rounded-end-2 py-2 px-4">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bottom footer -->
        <div class="bg-black  py-4 m-0">
            <div class="container py-2">
                <div class="row text-white d-flex justify-content-between text-center g-3">
                    <!-- Left -->
                    <div class="col-auto d-flex align-items-center">
                        <p class="mb-0" style="font-size: 13px;">
                            &copy; Copyright <b>TestSite</b>. All Rights Reserved
                        </p>
                    </div>

                    <!-- Right -->
                    <div class="col-auto fs-6">
                        <span class="p-2 bg-dark rounded me-2">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                        <span class="p-2 bg-dark rounded me-2">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="p-2 bg-dark rounded me-2">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                        <span class="p-2 bg-dark rounded me-2">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </span>
                        <span class="p-2 bg-dark rounded me-2">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>