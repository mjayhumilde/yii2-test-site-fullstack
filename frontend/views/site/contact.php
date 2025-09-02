<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var common\models\ContactForm $model */

use frontend\assets\LeafletAsset;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;

LeafletAsset::register($this);

$this->registerJs(
    <<<JS
    document.addEventListener("DOMContentLoaded", function() {
        const map = L.map(document.querySelector(".js-map")).setView(
            [16.149917054356802, 119.97771199126929],
            13
        );

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "© OpenStreetMap contributors",
        }).addTo(map);

        L.marker([16.149917054356802, 119.97771199126929])
            .addTo(map)
            .bindPopup("company location.")
            .openPopup();
    });
    JS,
    \yii\web\View::POS_END
);

?>

<section class="">
    <div class="js-map w-100 bg-primary" style="height: 20rem"></div>
</section>

<section>
    <div class="container px-3 py-5 px-sm-5">
        <div class="px-md-5">
            <div class="row row-cols-1 row-cols-lg-3 shadow p-4 mx-auto g-3">
                <div class="col d-flex gap-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="text-success rounded-circle px-2 py-1 border border-success">
                            <i class="fs-5   fa-solid fa-location-dot"></i>
                        </div>
                    </div>
                    <div class="w-50">
                        <h6 class="fw-bold m-0 fs-4">Location:</h6>
                        <p class="m-0 lh-sm text-muted mt-2" style="font-size: 12px">
                            Sampaloc, Bolinao, Pangasinan 325436
                        </p>
                    </div>
                </div>
                <div class="col d-flex gap-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="text-success rounded-circle px-2 py-1 border border-success">
                            <i class=" fs-5  fa-solid fa-envelope"></i>
                        </div>
                    </div>
                    <div class="w-50">
                        <h6 class="fw-bold m-0 fs-4">Email:</h6>
                        <p class="m-0 lh-sm text-muted mt-2" style="font-size: 12px">
                            @humildemarkjohn00@gmail.com <br />
                            example@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col d-flex gap-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="text-success rounded-circle px-2 py-1 border border-success">
                            <i class=" fs-5  fa-solid fa-mobile-screen"></i>
                        </div>
                    </div>
                    <div class="w-50">
                        <h6 class="fw-bold m-0 fs-4">Call:</h6>
                        <p class="m-0 lh-sm text-muted mt-2" style="font-size: 12px">
                            094721357890375 <br />
                            093745893253632
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mb-5 px-3 px-sm-5">
        <div class="d-flex justify-content-center align-items-center px-md-5">
            <div class=" shadow d-flex flex-column gap-3 w-100 p-5">
                <div class="d-flex gap-2">
                    <input type="text" placeholder="Your Name" class="w-100 p-2" />
                    <input type="text" placeholder="Your Email" class="w-100 p-2" />
                </div>
                <input type="text" placeholder="Your Subject" class="p-2" />
                <textarea name="" id="" placeholder="Message" style="height: 5rem" class="p-2"></textarea>
                <div class="d-flex justify-content-center align-items-center">
                    <button class="bg-success py-2 px-5 text-white border-0 rounded">
                        Send Message
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>