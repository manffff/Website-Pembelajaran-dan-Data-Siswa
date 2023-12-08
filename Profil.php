<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" href="Profil.css">
</head>

<body>

    <div class="container">

        <div class="slide" style="background-image: url('img/1.png');">
            <h3>Manops</h3>
        </div>

        <div class="slide" style="background-image: url('img/2.png');">
            <h3>Abelia</h3>
        </div>

        <div class="slide" style="background-image: url('img/3.png');">
            <h3></h3>
        </div>

        <div class="slide" style="background-image: url('img/4.png');">
            <h3></h3>
        </div>

        <div class="slide" style="background-image: url('img/5.png');">
            <h3></h3>
        </div>

    </div>

    <script>
        activeslideimg();

        function activeslideimg(activeSlide = 2) {
            const slides = document.querySelectorAll(".slide");

            slides[activeSlide].classList.add("active");

            for (const slide of slides) {
                slide.addEventListener("click", () => {
                    clearActiveClasses();

                    slide.classList.add("active");
                });
            }


            function clearActiveClasses() {
                slides.forEach((slide) => {
                    slide.classList.remove("active");
                })
            }


        }
    </script>

</body>

</html>