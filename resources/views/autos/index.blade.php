@include ('header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Autos') }}</div>
                <div class="card-body">
                    <a href ="{{route('autos.create')}}" class="btn btn-success">
                        Voeg een auto toe</a>
                    <br> <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Type</th>
                            <th scope="col">Kenteken</th>
                            <th scope="col">Prijs</th>
                            <th scope="col">Wijzigen</th>
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
                                <td colspan="1"><a href="{{route('autos.edit',$auto->id)}}" class=" btn btn-primary">Wijzigen</a></td>
                                <form action="{{route('autos.destroy', $auto->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <td colspan="1">
                                        <button type="submit" href="{{route('autos.destroy',$auto->id)}}" onclick="return confirm('Weet je zeker dat je de auto wilt verwijderen?')" class=" btn btn-danger">
                                            Verwijderen</button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include ('footer')