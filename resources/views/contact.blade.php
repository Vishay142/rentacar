@include('header')

<style>

    html, body {
        height: 100%;
    }

    img {
        object-fit: cover;
        width: 100%;
        max-height: 100%;
    }
    .title{
        display: flex;
        align-items: center;
    }

    .map-wrapper{
        max-width: 700px;
        border: 2px solid grey;
    }
    .googlemap{
        width: 100%;
    }

    p{
        background-color: #d8d8d8;
    }

</style>

<div class="container">
    <div class="title">
        <h1>Neem contact op</h1>
    </div>

    <!--Contact-->
    <p>
        Rembrandtweg 4
        <br>Postbus 1336
        <br>1318HV Almere
        <br>
        <br>Telefoon: 06 12345678
        <br>Fax: 036 876 5434
        <br>E-mail: info@rentacar.nl
    </p>
    <!--Contact-->

    <!--Google Map)-->
    <br><div class="map-wrapper">
        <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.2669097843827!2d5.248480787203949!3d52.38371159315715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c617a61c3f6d4d%3A0x2dddbd2be9022f6!2sRembrandtweg%204%2C%201318%20HV%20Almere!5e0!3m2!1snl!2snl!4v1608388507933!5m2!1snl!2snl"
                width="500" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
    </div>
    <!--End Google Map)-->

</div>


@include('footer')