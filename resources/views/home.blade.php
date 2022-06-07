<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li class="nav-item">
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

            <div class="row">
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="p-4 p-md-5 mb-4 text-dark rounded bg-light">
                        <div class="col px-0">
                        <h1 class="display-4 fst-italic">Bakul Lauk</h1>
                        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.
                        Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.
                        Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12">
                <img src={{asset("image/fish-image-bg.jpg")}} class="img-fluid rounded shadow-lg" style="width: 100%; object-fit: contain;" alt="...">
            </div>
        
        </div>

        <div class="row my-4" id="products">
            <h1 class="mt-4">Products</h1>
            <div class="col my-4">
                <div class="row">

                    <div class="col-12 col-md-3 mt-4">
                        <div class="card col-12" >
                            <img src={{asset("image/ikanKuwe.jpg")}} class="card-img-top" alt="...">
                            <div class="card-body shadow">
                                <h5 class="card-title">Kuwe</h5>
                                <p class="card-text text-secondary">Ikan kuwe segar cocok untuk dibakar maupun digoreng</p>
                                <p class="card-text text-warning">Rp. 35.000/kg</p>
                                <div class="col-md-12 col-12 text-center">
                                    <a href="https://wa.link/au8y0b" class="btn btn-success text-center col-md-12 col-12">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-4">
                        <div class="card col-12" >
                            <img src={{asset("image/tongkol.jpeg")}} class="card-img-top" alt="...">
                            <div class="card-body shadow">
                                <h5 class="card-title">Tongkol</h5>
                                <p class="card-text text-secondary">Ikan Tongkol segar cocok untuk dibakar, balado dan digoreng</p>
                                <p class="card-text text-warning">Rp. 35.000/kg</p>
                                <div class="col-md-12 col-12 text-center">
                                    <a href="https://wa.link/au8y0b" class="btn btn-success text-center col-md-12 col-12">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-4">
                        <div class="card col-12" >
                            <img src={{asset("image/ekorKuning.jpg")}} class="card-img-top" alt="...">
                                <div class="card-body shadow">
                                    <h5 class="card-title">Ekor Kuning</h5>
                                    <p class="card-text text-secondary">Ikan Ekor Kuning segar cocok untuk dibakar, balado dan digoreng</p>
                                    <p class="card-text text-warning">Rp. 35.000/kg</p>
                                        <div class="col-md-12 col-12 text-center">
                                            <a href="https://wa.link/au8y0b" class="btn btn-success text-center col-md-12 col-12">Pesan</a>
                                        </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mt-4">
                            <div class="card col-12" >
                                <img src={{asset("image/bentong.jpeg")}} class="card-img-top" alt="...">
                                <div class="card-body shadow">
                                    <h5 class="card-title">Bentong</h5>
                                    <p class="card-text text-secondary">kan Bentong segar cocok untuk dibakar, balado dan digoreng</p>
                                    <p class="card-text text-warning">Rp. 35.000/kg</p>
                                        <div class="col-md-12 col-12 text-center">
                                            <a href="https://wa.link/au8y0b" class="btn btn-success text-center col-md-12 col-12">Pesan</a>
                                        </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-12 col-md-3 mt-4">
                            <div class="card col-12" >
                                <img src={{asset("image/bentong.jpeg")}} class="card-img-top" alt="...">
                                <div class="card-body shadow">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <p class="card-text text-warning">Rp. 35.000/kg</p>
                                        <div class="col-md-12 col-12 text-center">
                                            <a href="https://wa.link/au8y0b" class="btn btn-success text-center col-md-12 col-12">Pesan</a>
                                        </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-12 col-md-3 mt-4">
                            <div class="card col-12" >
                                <img src={{asset("image/bentong.jpeg")}} class="card-img-top" alt="...">
                                <div class="card-body shadow">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <p class="card-text text-warning">Rp. 35.000/kg</p>
                                        <div class="col-md-12 col-12 text-center">
                                            <a href="https://wa.link/au8y0b" class="btn btn-success text-center col-md-12 col-12">Pesan</a>
                                        </div>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row my-4" id="contactUs">
            <h1 class="mt-4">Contact Us</h1>
        
            <div class="col">
                    <div class="row my-2">
                        <div class="col-12 col-md-12 mt-2">
                            <img src={{asset("icon/whatsapp-icon.svg")}} alt="" height="36">
                            <a href="https://wa.link/au8y0b" class="text-secondary mx-4">Whatsapp me</a>
                        </div>
                        <div class="col-12 col-md-12 mt-2">
                            <img src={{asset("icon/instagram-icon.svg")}} alt="" height="36">
                            <a href="https://instagram.com/bakul.lauk?igshid=YmMyMTA2M2Y=" class="text-secondary mx-4">Follow us here</a>
                        </div>
                    </div>
            </div>
        </div>


<footer class="" style="margin-top: 50px">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2022 Bakul Lauk · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
