<?php


include '../include/head.html';
?>
    
<body onload="showSlides(1)">
   
    <?php


    include '../include/menu-index.html';
    ?>
    <br>

    <!-- Slideshow container al link link https://www.w3schools.com/howto/howto_js_slideshow.asp 
    c'è sia il file css sia js che si chiamano progetto.css,progetto.js-->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides ">
            <div class="numbertext">1 / 3</div>
            <a href="algoritmi_e_strutture dati.php"><img src="../immagini/progetti/sfondo-icona-grafo.png" style="width:100%"></a> 
            <div class="text text-black-progetto">Progetto di algoritmi e strutture dati</div>
        </div>

        <div class="mySlides ">
            <div class="numbertext">2 / 3</div>
            <a href="comunicazioni_multimediali.php"><img src="../immagini/progetti/sfondo-comunicazioni-multimediali-progetto.png" style="width:100%"></a> 
            <div class="text">Progetto di comunicazioni multimediali</div>
        </div>

        <div class="mySlides ">
            <div class="numbertext">3 / 3</div>
            <a href="progetto_di_database.php"><img src="../immagini/progetti/sfondo-icona-database.jpg" style="width:100%"></a> 
            <div class="text">Progetto di database</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<?php


    include '../include/footer-index.html';
    ?>

</body>

</html>