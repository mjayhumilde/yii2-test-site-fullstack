<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Team';
$this->params['breadcrumbs'][] = $this->title;
?>

<section>
    <div class="bg-light">
        <div class="container py-5">
            <div class="text-center">
                <h2 class="fw-semibold">OUR TEAM</h2>
                <div class="d-flex justify-content-center mb-3">
                    <div class="bg-success mt-2" style="width: 50px; height: 3px;"></div>
                </div>
                <p class="text-secondary mx-auto  mb-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi iusto
                    dolores vero illum recusandae hic, odit natus ipsa quasi mollitia
                    perferendis maxime ab perspiciatis ut facilis quisquam vel libero! Rem.
                </p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                <?php foreach ($teams as $team): ?>
                    <div class="col">
                        <div class="shadow text-center overflow-hidden rounded">
                            <img class="card-image w-100"
                                src="<?= $team['image'] ?>"
                                alt="Team Member">
                            <div class="py-4 bg-white">
                                <h6 class="fw-bold mb-0 fs-5"><?= $team['name'] ?></h6>
                                <p class="mb-0 pt-1 text-secondary" style="font-size: 14px;"><?= $team['title'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>