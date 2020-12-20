@include ('header')

<div class="container-sm m">
<table class="table">
    <thead class="table-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Merk</th>
        <th scope="col">Type</th>
        <th scope="col">Kenteken</th>
        <th scope="col">Prijs</th>
        <th scope="col">Wijzigen</th>
        <th scope="col">Toevoegen</th>
        <th scope="col">Verwijderen</th>
    </tr>
    </thead>
    <tbody>
    @foreach($autos as $auto)
    <tr>
        <td colspan="1">{{$auto ->id}}</td>
        <td colspan="1">{{$auto->merk}}</td>
        <td colspan="1">{{$auto->type}}</td>
        <td colspan="1">{{$auto->kenteken}}</td>
        <td colspan="1">{{$auto->prijs_per_dag}}</td>
        <td colspan="1"><a href="{{$auto->id}}" class=" btn btn-primary">Wijzigen</a></td>
        <td colspan="1"><a href="{{$auto->id}}" class=" btn btn-success">Toevoegen</a></td>
        <td colspan="1"><a href="{{$auto->id}}" class=" btn btn-danger">Verwijderen</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>

@include ('footer')