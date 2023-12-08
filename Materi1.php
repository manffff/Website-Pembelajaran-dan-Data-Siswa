<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SlideShow</title>
    <link rel="stylesheet" href="Materi.css">
</head>

<body>
    <div class="container">
        <div class="content-slide">
            <div class="imgslide fade">
                <div class="numberslide">1 / 3</div>
                <img src="img/slide1.png" alt="wets">
                <div class="text">1</div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide">2 / 3</div>
                <img src="img/slide2.png" alt="">
                <div class="text">2</div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide">3 / 3</div>
                <img src="img/slide3.png" alt="">
                <div class="text">3</div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide">3 / 3</div>
                <img src="img/slide4.png" alt="">
                <div class="text">4</div>
            </div>
            <a class="prev" onClick="nextslide(-1)">&#10094;</a>
            <a class="next" onClick="nextslide(1)">&#10095;</a> 
        </div>

        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);

        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");
            
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                
                dot[i].className = dot[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";

            dot[slideIndex - 1].className += " active";
            


        }
    </script>

</body>

</html>