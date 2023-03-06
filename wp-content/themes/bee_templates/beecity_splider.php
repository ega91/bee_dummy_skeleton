<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bootstrap 5 Multiple Slides with 3 column</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="col-sm-8 splide__slide m-2">
                                <div class="card bg-dark text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Greater Jakarta </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 splide__slide m-2">
                                <div class="card bg-dark text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Bekasi</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 splide__slide m-2">
                                <div class="card bg-dark text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Bandung</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 splide__slide m-2">
                                <div class="card bg-dark text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Malang</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 splide__slide m-2">
                                <div class="card bg-dark text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Semarang</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
        <script>
            var splide = new Splide('.splide', {
                type: 'loop',
                perPage: 3,
                rewind: true,
            });

            splide.mount();
        </script>
    </body>

</html>