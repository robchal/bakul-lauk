<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bakul Lauk</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="antialiased">


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src={{asset("icon/logoBrandWhite.svg")}} alt="..." height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item mx-md-4 px-md-2">
                        <a href="#contactUs">
                            <button type="button" class="btn btn-success md-mx-3 lg-mx-3">
                                Contact us
                            </button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <div class="container my-2">

        <div class="row mb-4 pb-4">
            <div class="col-12 col-lg-6 col-md-12">
                <div class="p-4 p-md-5 mb-4 text-dark rounded bg-light">
                    <div class="col px-0">
                        <h1 class="display-4 fst-italic">Bakul Lauk</h1>
                        <p class="lead my-3">Beli Ikan segar ga perlu ribet, tinggal klik pesan dan isi form pemesanan
                            sambil duduk manis dirumah.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12">
                <img src={{asset("image/fish-image-bg.jpg")}} class="img-fluid rounded shadow-lg"
                    style="width: 100%; object-fit: contain;" alt="...">
            </div>

        </div>

        <div class="row my-4 my-md-4 pb-4" id="products">
            <div class="mt-0 mt-md-4 border-bottom bg-primary rounded text-white text-center py-2">
                <h2 class="">Products</h2>
            </div>
            <div class="col mt-0 my-md-4">
                <div class="row">

                    @foreach ($datas as $items)
                    <div class="col-12 col-md-3 mt-4">
                        <div class="card col-12">
                            <img src={{asset("image/". $items['image'])}} class="card-img-top" alt="..." height="250px"
                                style="object-fit: contain">
                            <div class="card-body shadow">
                                <h5 class="card-title">{{$items['name']}}</h5>
                                <p class="card-text text-warning">{{$items['harga']}}</p>
                                <div class="col-md-12 col-12 text-center">
                                    <a href="https://wa.link/p3f03i"
                                        class="btn btn-success text-center col-md-12 col-12">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="row my-4" id="contactUs">
            <div class="mt-0 mt-md-4 border-bottom bg-info rounded text-white text-center py-2">
                <h2 class="">Contact Us</h2>
            </div>

            <div class="col py-4">
                <div class="row">
                    <div class="col-12 col-md-12 mt-2 py-2">
                        <img src={{asset("icon/whatsapp-icon.svg")}} alt="" height="36">
                        <a href="https://wa.link/p3f03i" class="text-secondary mx-4"
                            style="text-decoration:none;">Whatsapp me</a>
                    </div>
                    <div class="col-12 col-md-12 mt-2 py-2">
                        <img src={{asset("icon/instagram-icon.svg")}} alt="" height="36">
                        <a href="https://instagram.com/bakul.lauk?igshid=YmMyMTA2M2Y=" class="text-secondary mx-4"
                            style="text-decoration:none;">Follow us here</a>
                    </div>
                </div>
            </div>
        </div>


        <footer class="" style="margin-top: 50px">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>© 2022 Bakul Lauk · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>