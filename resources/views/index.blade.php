@include('header')

<style>

    html, body {
        height: 100%;
        font-size: 1rem;
    }

    img {
        object-fit: cover;
        width: 100%;
        max-height: 100%;
    }
    .title{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    p.foto-beschrijving {
        background-color: #1b1e21;
        text-align: center;
        color:white;

    }

</style>


<div class="container">
    <div class="title">
    <h1>Beste huurauto's van Nederland</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="{{ URL::to('../img/mercedes.jpg')}}" width="col-sm">
                <p class="foto-beschrijving">
                    Tel. 06-12345678
                    <br>Juan Grisstraat 44, 1328 KA Almere</p>
            </div>
            <div class="col-sm">
                <img src="{{ URL::to('../img/bmw.jpg')}}" width="col-sm">
                <p class="foto-beschrijving">
                    Tel. 06-12345678
                    <br>Juan Grisstraat 44, 1328 KA Almere</p>
            </div>
            <div class="col-sm">
                <img src="{{ URL::to('../img/audi.jpg')}}" width="col-sm">
                <p class="foto-beschrijving">
                    Tel. 06-12345678
                    <br>Juan Grisstraat 44, 1328 KA Almere</p>
            </div>
            <div class="col-sm">
                <img src="{{ URL::to('../img/porsche.jpg')}}" width="col-sm">
                <p class="foto-beschrijving">
                    Tel. 06-12345678
                    <br>Juan Grisstraat 44, 1328 KA Almere</p>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-dark text-center" style="padding: 39px;">
            <dd class="lead text-light">
                Voor een auto huren in Almere ben je bij Rent-a-Car op het juiste adres.
                Onze ruime vloot heeft voor ieder wat wils.
                <br>Ben je van plan te city trippen?
                <br>Dan kun je gaan voor een Compact auto, maar we hebben ook genoeg keuze aan grote modellen, zoals bijvoorbeeld sportauto's.
                <br>De handige locatie van Rent-a-Car maakt een auto huren in Almere eenvoudig: de vestiging is makkelijk te bereiken met openbaar vervoer en taxi's.
                <br>Tevens zit je zo op de snelweg wanneer je je auto hebt opgehaald, handig als je bijvoorbeeld naar Amsterdam, Schiphol of Lelystad wilt gaan.
            </dd>
        </div>
    </div>

</div>
@include('footer')