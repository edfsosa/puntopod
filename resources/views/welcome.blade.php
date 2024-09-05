<!DOCTYPE html>
<html lang="es">

<head>
    <title>Punto Pod</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif
        }

        body,
        html {
            height: 100%;
            line-height: 1.8;
        }

        /* Full height image header */
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("https://www.w3schools.com/w3images/mac.jpg");
            min-height: 100%;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }
    </style>
</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="#home" class="w3-bar-item w3-button w3-wide">PUNTO POD</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="#about" class="w3-bar-item w3-button">NOSOTROS</a>
                <a href="#team" class="w3-bar-item w3-button">PRODUCTOS</a>
                <a href="#work" class="w3-bar-item w3-button">VENTAJAS</a>
                <a href="#contact" class="w3-bar-item w3-button">CONTACTO</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
                onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
        style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">CERRAR
            ×</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">NOSOTROS</a>
        <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">PRODUCTOS</a>
        <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">VENTAJAS</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTO</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Descubre la mejor experiencia en pods</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Descubre la mejor experiencia</span><br>
            <span class="w3-large">Sabores intensos, calidad premium y máxima comodidad.</span>
            <p><a href="#about"
                    class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">COMPRAR
                    AHORA</a></p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
        </div>
    </header>

    <!-- Sobre Nosotros -->
    <div class="w3-container" style="padding:128px 16px" id="about">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>SOBRE NOSOTROS</h3>
                <p>En <strong>Punto Pod</strong>, nos dedicamos a ofrecer la mejor experiencia de vapeo con productos de
                    la más alta calidad. Nuestra misión es brindar a nuestros clientes una alternativa moderna y
                    conveniente para disfrutar de sus sabores favoritos.</p>
                <p>Con una amplia selección de pods de sabores increíbles, nos aseguramos de que cada inhalación sea un
                    placer. Desde nuestro compromiso con la calidad hasta el excelente servicio al cliente, trabajamos
                    para convertirnos en tu tienda de confianza para todas tus necesidades de vapeo.</p>
            </div>
            <div class="w3-col m6">
                <img class="w3-image w3-round-large" src="https://www.w3schools.com/w3images/phone_buildings.jpg"
                    alt="Buildings" width="700" height="394">
            </div>
        </div>
    </div>

    <!-- Productos -->
    <div class="w3-container" style="padding:128px 16px" id="team">
        <h3 class="w3-center">PRODUCTOS</h3>
        <div class="w3-row-padding" style="margin-top:64px">
            @foreach ($products as $product)
                <div class="w3-col l2 s6 w3-margin-bottom">
                        <div class="w3-container">
                            <img src="http://localhost:8000/storage/{{ $product->image }}" alt="{{ $product->name }}"
                                style="width:100%">
                            <p>{{ $product->name }}<br><b>{{ $product->price }} Gs.</b></p>
                            <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>
                                    Comprar</button></p>
                        </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Ventajas -->
    <div class="w3-container" style="padding:128px 16px" id="work">
        <h3 class="w3-center">VENTAJAS</h3>

        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-third">
                <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">Calidad Superior</p>
                <p>Solo trabajamos con los mejores materiales y sabores para garantizar una experiencia de vapeo única.
                </p>
            </div>
            <div class="w3-third">
                <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Variedad de Sabores</p>
                <p>Desde sabores frutales hasta mentolados, ofrecemos una amplia gama de opciones para todos los gustos.
                </p>
            </div>
            <div class="w3-third">
                <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Servicio al Cliente</p>
                <p>Nuestro equipo está siempre disponible para ayudarte con cualquier duda o inquietud.</p>
            </div>
        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright"
            title="Close Modal Image">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>


    <!-- Contacto -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
        <h3 class="w3-center">CONTACTO</h3>
        <div style="margin-top:48px">
            <div class="w3-row-padding w3-center">
                <div class="w3-third">
                    <i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Asunción, PY
                </div>
                <div class="w3-third">
                    <i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> WhatsApp: +595 991 151515
                </div>
                <div class="w3-third">
                    <i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> E-mail: mail@mail.com
                </div>
            </div>
            <br>
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject">
                </p>
                <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                </p>
                <p>
                    <button class="w3-button w3-black" type="submit">
                        <i class="fa fa-paper-plane"></i> ENVIAR MENSAJE
                    </button>
                </p>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-32">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the
            top</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
        </div>
        <p>Desarrollado por <a href="#" title="Edgar Franco" target="_blank"
                class="w3-hover-text-green">Edgar Franco</a></p>
    </footer>

    <script>
        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }


        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }
    </script>

</body>

</html>
