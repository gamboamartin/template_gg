<?php use config\views; ?>
body {
    background-image: url(<?php echo (new views())->url_assets; ?>img/background.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #001588;
}

.titulo{
    font-family: 'Gotham Bold';
    src: url('<?php echo (new views())->url_assets; ?>fonts/Gotham-Bold.otf');
    font-style: normal;
    font-weight: bold;
    font-size: 50px;
    color: #ffffff;
}

.input-style{
    background-color: #61b3e4;
    border-color: #61b3e4;
    border-radius: 40px;
    text-align: center;
}
.input::placeholder {
    color: #001588 !important;
    opacity: 1;
    font-family: 'Gotham Medium';
    src: url('<?php echo (new views())->url_assets; ?>fonts/Gotham-Medium.otf');
    font-style: normal;
    font-weight: bold;
    font-size: 14px;

}

@media only screen and (max-width: 600px) {
    .logo {
        width: 20px;
    }

}


.nav-link{
    color: #fff3cd;
}

.navbar .navbar-nav .nav-link:hover {
    background-color: #61b3e4;
    color: #ffffff;
}
.navbar .navbar-nav .nav-link {
    padding: 0.6em;
    font-size: 1.2em;
    transition: all 0.5s;
}
.navbar .navbar-brand {
    padding: 0 0.6em;
    font-size: 1.5em;
    font-weight: bold;
}
@media only screen and (min-width: 992px) {
    .navbar {
        padding: 0;
    }
    .navbar .navbar-nav .nav-link {
        padding: 1em 0.7em;
    }
    .navbar .navbar-brand {
        padding: 0 0.8em;
    }
}