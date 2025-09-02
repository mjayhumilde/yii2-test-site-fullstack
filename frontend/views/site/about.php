<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="site-about">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 px-3 px-sm-0 py-5 g-3">
            <div class="col">
                <h1 class="text-dark mb-3">
                    <b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aut commodi eos ve</b>
                </h1>
                <h3>
                    Lorem ipsum dolor sit amet consectetmeetur distinctio Ipsam aut
                    commodi eos ve.
                </h3>
            </div>
            <div class="col">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                    neque! Adipisci eaque ex quo id ratione, amet quae voluptate, sunt
                    est culpa incidunt nemo totam laborum iure magnam fugiat labore!
                </p>
                <div class="py-1">
                    <p class="mb-1">
                        <i class="fa-solid fa-check-double text-success"></i> Lorem,
                        ipsum dolor sit amet consectetur adipisicing elit. Illum neque
                        eum libero nihil asperiores sequi voluptatibus soluta
                        reprehenderit molestiae
                    </p>
                    <p class="mb-1">
                        <i class="fa-solid fa-check-double text-success"></i> Lorem,
                        ipsum dolor sit amet consectetur adipisicing elit. Illum neque
                        eum libero nihil asperiores sequi voluptatibus soluta
                        reprehenderit molestiae
                    </p>
                    <p>
                        <i class="fa-solid fa-check-double text-success"></i> Lorem,
                        ipsum dolor sit amet consectetur adipisicing elit. Illum neque
                        eum libero nihil asperiores sequi voluptatibus soluta
                        reprehenderit molestiae
                    </p>
                </div>
                <p class="fst-italic">
                    Lorem, ipsum dolor sit amet consectenimi excepturi. Unde vero
                    suscipit sint autem alias.
                </p>
            </div>
        </div>
    </div>
</section>

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

<section>
    <div class="container py-5 mb-5">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2 class="fw-semibold">OUR SKILLS</h2>
            <div class="d-flex justify-content-center mb-3">
                <div class="bg-success mt-2" style="width: 50px; height: 3px;"></div>
            </div>
            <p class="text-center text-muted">
                illum recusandae hic, odit natus ipsa quasi mollitia perferendis maxime ab perspiciatis ut facilis quisquam
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ullam? Hic eum minima quo, ipsum aperiam ex
                laboriosam ut facere recusandae, saepe quis eaque impedit obcaecati nam repellat eveniet! Perspiciatis.
                vel libero! Rem.</p>
        </div>
        <div class="container px-4 px-sm-0">
            <div class="row row-cols-1 row-cols-md-2 py-md-2">
                <div class="col">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-name">HTML</span>
                            <span class="skill-name">100%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-name">PHP</span>
                            <span class="skill-name">80%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="80">
                            <div class="progress-bar bg-success" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 py-md-2">
                <div class="col">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-name">CSS</span>
                            <span class="skill-name">90%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="90">
                            <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-name">WORDPRESS/CMS</span>
                            <span class="skill-name">90%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="90">
                            <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 py-md-2">
                <div class="col">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-name">JAVASCIPT</span>
                            <span class="skill-name">75%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="75">
                            <div class="progress-bar bg-success" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="skill-name">PHOTOSHOP</span>
                            <span class="skill-name">55%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="55" aria-valuemin="0"
                            aria-valuemax="55">
                            <div class="progress-bar bg-success" style="width: 55%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="clients-container mb-5">
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <h2 class="fw-semibold">CLIENTS</h2>
            <div class="d-flex justify-content-center mb-3">
                <div class="bg-success mt-2" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 px-3 px-sm-0">
                <?php foreach ($clients as $client): ?>
                    <div class="col col-12 col-sm-6 col-md-3 border p-3 justify-content-center align-items-center d-flex">
                        <?= $client['image'] ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>