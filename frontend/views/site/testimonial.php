<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Testimonial';
$this->params['breadcrumbs'][] = $this->title;
?>

<section>
    <div class="container p-5">
        <div class="row g-4 justify-content-center ">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-5 bg-white shadow rounded">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <img src="<?= $testimonial['profile'] ?>"
                                class=" w-25 rounded-4" alt="Mjay Humilde profile">
                            <div>
                                <h6 class="fw-bold mb-0"><?= $testimonial['name'] ?></h6>
                                <span class="d-block fw-normal text-muted"><?= $testimonial['jobPosition'] ?></span>
                            </div>
                        </div>
                        <p class="mb-0 text-muted fst-italic">
                            <i class="fa-solid fa-quote-left me-2"></i>
                            <?= $testimonial['review'] ?>
                            <i class="fa-solid fa-quote-right ms-2"></i>
                        </p>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>