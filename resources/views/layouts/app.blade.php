<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Site Metas -->

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="./images/logo_2.jpg" type="image/x-icon" /> -->
    <!-- <link rel="apple-touch-icon" href="images/logo_2.jpg" /> -->
    <link src="./images/logo_2.jpg" href="./index.html" rel="icon" />
    <title>Bulalohan sa Riyadh</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/Hover-master/css/hover-min.css') }}">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @livewireStyles
</head>

<body>
    <div id="app">
        @include('livewire.partials.header')
        {{ $slot }}
        @include('livewire.partials.footer')
    </div>

    <a href="#" id="back-to-top" title="Back to top" style="display: none">&uarr;</a>

    @livewireScripts

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- ALL JS FILES -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/images-loded.min.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/baguetteBox.min.js') }}"></script>
    <!-- <script src="js/form-validator.min.js"></script> -->
    <!-- <script src="js/contact-form-script.js"></script> -->

    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        let places = document.querySelectorAll(".place-list li");
        let active = "/assets/img/mayon/mayon-1.webp";

        places.forEach((e) => {
            e.addEventListener("mouseenter", (event) => {
                places.forEach((e) => {
                    e.classList.remove("active");
                });

                event.target.classList.add("active");
                active = event.target.getAttribute("data-img");
                let banner = document.querySelector(".banner");
                banner.style.backgroundImage = `url('${active}')`;
            });
        });
    </script>
</body>

</html>
