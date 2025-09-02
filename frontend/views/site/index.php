<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<main>
    <!-- Hero -->
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                    class="active rounded-circle" aria-current="true" aria-label="Slide 1"
                    style="width: 3px; padding: 1px;"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="rounded-circle"
                    aria-label="Slide 2" style="width: 3px; padding: 1px;"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="rounded-circle"
                    aria-label="Slide 3" style="width: 3px; padding: 1px;"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="https://images.unsplash.com/photo-1622676017526-4a8e99f5fdf3?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="d-block w-100" alt="Slide 1">
                    <div
                        class="carousel-caption d-none d-md-block bg-black bg-opacity-75 mb-5 text-start p-5 border-top border-4 border-success">
                        <h5>First slide label</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class="text-center">
                            <button class="py-2 px-4 text-white border-3 border-success rounded bg-transparent bg-opacity-50">Read
                                More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img
                        src="https://images.unsplash.com/photo-1622676017526-4a8e99f5fdf3?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="d-block w-100" alt="Slide 2">
                    <div
                        class="carousel-caption d-none d-md-block bg-black bg-opacity-75 mb-5 text-start p-5 border-top border-4 border-success">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class="text-center">
                            <button class="py-2 px-4 text-white border-3 border-success rounded bg-transparent bg-opacity-50">Read
                                More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img
                        src="https://images.unsplash.com/photo-1622676017526-4a8e99f5fdf3?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="d-block w-100" alt="Slide 3">
                    <div
                        class="carousel-caption d-none d-md-block bg-black bg-opacity-75 mb-5 text-start p-5 border-top border-4 border-success">
                        <h5>Third slide label</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class="text-center">
                            <button class="py-2 px-4 text-white border-3 border-success rounded bg-transparent bg-opacity-50">Read
                                More</button>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Information -->
    <section>
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

    <!-- Services -->
    <section class="bg-light">
        <div class="container">
            <div class="px-3 py-5 px-sm-0 row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 text-center">
                <?php foreach ($services as $service): ?>
                    <div class="col">
                        <div class="p-5 h-100 bg-white">
                            <?= $service['icon'] ?>
                            <h4 class=""><?= $service['title'] ?></h4>
                            <p class="fs-6 text-secondary"><?= $service['description'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section>
        <div class="container mb-5">
            <div class="d-flex justify-content-center align-items-center gap-2 pt-5">
                <button class="border rounded border-0 px-4 py-1 bg-success text-white">
                    ALL
                </button>
                <button class="border rounded border-0 px-4 py-1 bg-white text-secondary ">APP</button>
                <button class="border rounded border-0 px-4 py-1 bg-white text-secondary ">CARD</button>
                <button class="border rounded border-0 px-4 py-1 bg-white text-secondary ">WEB</button>
            </div>


            <!-- Gallery -->
            <div class="row py-5 px-3 px-sm-0">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=300&h=400&fit=crop"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image 1" />

                    <img
                        src="https://plus.unsplash.com/premium_photo-1753982324920-4f683cc337de?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image 2" />

                    <img
                        src="https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=300&h=300&fit=crop"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image 7" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="https://plus.unsplash.com/premium_photo-1753982324920-4f683cc337de?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image 3" />

                    <img
                        src="https://images.unsplash.com/photo-1503602642458-232111445657?w=300&h=450&fit=crop"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image 4" />

                    <img
                        src="https://plus.unsplash.com/premium_photo-1754211654507-e0a561f6b9c4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxM3x8fGVufDB8fHx8fA%3D%3D"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image 9" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=350&fit=crop"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image 5" />

                    <img
                        src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=300&h=400&fit=crop"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image 6" />

                    <img
                        src="https://images.unsplash.com/photo-1508138221679-760a23a2285b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cmFuZG9tfGVufDB8fDB8fHww"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image 8" />
                </div>

            </div>
        </div>
    </section>

    <!-- Clients -->
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
</main>