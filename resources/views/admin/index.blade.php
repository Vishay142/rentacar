@include('header')

@foreach($admin as $admins)
    <h1>Dit is de {{$admins->name}}</h1>

@endforeach



@include('footer')