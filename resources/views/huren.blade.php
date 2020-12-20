@include('header')

<div class="container">


<div class="row">
@foreach($autos as $auto)
        <div class="col-sm">
        <div class="card bg-dark" style="width: 16rem;">
            <img src="{{ URL::to('../img/')}}/{{$auto->merk}}.jpg" class="card-img-top" alt="...">
            <ul class="list-group list-group-flush bg-dark">
                <li class="list-group-item">{{$auto->merk}} {{$auto->type}}</li>
                <li class="list-group-item">Kenteken: {{$auto->kenteken}}</>
                <li class="list-group-item">Dagtarief: €{{$auto->prijs_per_dag}}</li>
                <a href="{{$auto->id}}" class="btn btn-primary">Reserveren</a>
            </ul>
            </div>
        </div>
@endforeach
</div>
</div>
@include('footer')
