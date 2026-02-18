<?php include 'inside/header.php' ?>



<section class="inner_Section" style="background-image: url('./assets/img/inner_banner/industry\ collaboration.jpg');">



    <div class="container">
        <h1 class="title ">
            Industry Alliances & <br> Professional Platforms

        </h1>
        <!-- <p class="w-50 para">Industry exposure integrated into design education through active professional ecosystems.</p> -->
    </div>
</section>


<section class="fashion-platforms">
    <div class="container">

        <div class="section-heading text-center">
            <h2 class="title">Fashion Industry <span>Platforms</span></h2>
        </div>

        <div class="owl-carousel logo-carousel mt-4">

            <div class="logo-item">
                <img src="https://1000logos.net/wp-content/uploads/2020/04/Lakme-Logo-2011.png" alt="Lakmé Fashion Week">
            </div>

            <div class="logo-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsgrGrXUYTcX0f7HFjgVGGO_V4SoCWPfOcAQ&s" alt="Times Fashion Week">
            </div>

            <div class="logo-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCRQoSW1hVzsvJM9kRhWTCfOseDHqramBn-g&s" alt="Asian Designer Week">
            </div>

            <div class="logo-item">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/045/958/748/small/silhouette-of-sexy-woman-with-long-red-tail-dress-fashion-logo-of-women-s-dress-vector.jpg" alt="National Fashion Show">
            </div>

            <div class="logo-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfjCmiFGWmTeJLdmNnEuaxBTxL4pvUB9Jgew&s" alt="Couture Runway Week">
            </div>

        </div>


        <div class="carousel-note text-center">
            <p>
                These platforms connect fashion students with live industry environments,
                showcasing, evaluation, and professional exposure.
            </p>
        </div>

    </div>
</section>



<section class="partner-section">

    <!-- Interior Design Competitions -->
    <div class="container mb-5">
        <h3 class="title text-center">Interior Design Competitions <br> & <span>Exhibitions</span></h3>


        <div class="owl-carousel logo-carousel mt-5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2ZBmjZUEW0vvSkpqcKJVWSe-2zKLc1BlAYA&s">

            <img src="https://static.wixstatic.com/media/a784e3_505c83518e2647799b7903307d5675e8~mv2.png">
            <img src="https://media.licdn.com/dms/image/v2/D4E0BAQGdnTuoJaTPDQ/company-logo_200_200/company-logo_200_200/0/1682660886963/wwwabidinteriorscom_logo?e=2147483647&v=beta&t=hHmsBP7QG6RM4mMdkpiC9p8x4yTzoiFlovJd_wK2IpY">
        </div>

        <div mt-4>
            <p class="para w-100 text-center  ">
                Interior design students engage through industry-led competitions and exhibitions focused <br>on real-world design evaluation.
            </p>
        </div>
    </div>

    <!-- Professional Bodies -->
    <div class="container mb-5 text-center">
        <h3 class="title">Professional Bodies <br> & <span>Councils</span></h3>

        <div class="logo-row py-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHR-thI-JKqdFZwHZY-RTWEchzcj8C3MJeXA&s">
            <img src="https://images.seeklogo.com/logo-png/19/3/fashion-design-council-of-india-fdci-logo-png_seeklogo-198867.png">
            <img src="https://media.licdn.com/dms/image/v2/C4D0BAQEz8EFfrhN6bg/company-logo_200_200/company-logo_200_200/0/1631347995407?e=2147483647&v=beta&t=dEwARE5fVgc0ZxRkMZcNvolLFaMX63DPS4L9qXFo1V8">
        </div>

        <p class="para text-center">
            Alignment with national design bodies supports professional <br>standards and industry relevance.
        </p>
    </div>

    <!-- National Skill -->
    <div class="container mb-5">
        <h3 class="title text-center">National Skill <br><span>Alignment</span></h3>

        <div class="logo-row mt-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLsK_2jULtbifhbywXpEDuIzaNv4fHGSuiig&s">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2XtUVJDx5XwJ4YodVWJU9qkSeNXAN96PbCg&s">
        </div>

        <p class="para text-center">
            INSD aligns with national skill development initiatives <br>supporting industry-ready education.
        </p>
    </div>




</section>

<?php include 'inside/footer.php' ?>
<script>
    $('.logo-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    });
</script>

<script>
    $('.logo-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 2500,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
</script>