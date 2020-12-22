@include('header')

<style>

    .container {
        padding-bottom: 50px;
    }

    .title {
        display: flex;
        justify-content: center;
    }

    h1 {
        text-align: center;
    }

    .button {

    }

</style>
<div class="container">
    <div class="title">
        <form action="reserveren.create" method="post">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h1>Selecteer uw datum</h1>
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label bg-dark text-light">Begindatum</label>
                    <div class="col-10">
                        <input class="form-control" type="date" value="2020-12-19" id="example-date-input">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label bg-dark text-light">Einddatum</label>
                    <div class="col-10">
                        <input class="form-control" type="date" value="2020-12-19" id="example-date-input">
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Voeg de reservering toe</button>
                </div>

            </div>
        </div>
        </form>
    </div>
</div>



@include('footer')