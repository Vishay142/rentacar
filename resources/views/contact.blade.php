@include('header')
<style>

    .img:hover {
        opacity: 80%;
    }

    h1 {
        text-align: center;
    }



</style>

<div class="container">


    <div class="img">
        <img src="{{ URL::to('../img/banner.jpg')}}" width="1295">
    </div>

    <h1>Neem contact op</h1>

    <div class="container">
        <div class="row g-2">
            <div class="col-6">
                <div class="p-3 border bg-light">Rembrandtweg 4
                    <br>Postbus 1336
                    <br>1318HV Almere</div>
            </div>

            <div class="col-6">
                <div class="p-3 border bg-light">Telefoon: 06 12345678
                    <br>Fax: 036 876 5434
                    <br>E-mail: info@rentacar.nl</div>
            </div>

    </div>
</div>
</div>
@include('footer')