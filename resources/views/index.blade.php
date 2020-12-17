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
</style>


<div class="container">
    <div class="title">
    <h1>Beste huurauto's van Nederland</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="{{ URL::to('../img/bmw.jpg')}}" width="col-sm">
            </div>
            <div class="col-sm">
                <img src="{{ URL::to('../img/bmw.jpg')}}" width="col-sm">
            </div>
            <div class="col-sm">
                <img src="{{ URL::to('../img/bmw.jpg')}}" width="col-sm">
            </div>
            <div class="col-sm">
                <img src="{{ URL::to('../img/mercedes.jpeg')}}" width="col-sm">
                <p>Telefoon: 062342423432</p>
            </div>
        </div>
    </div>


</div>

@include('footer')