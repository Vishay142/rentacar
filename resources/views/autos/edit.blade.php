@include('header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Voeg een auto toe') }}</div>
                <form method="POST" action="{{route('autos.update', $autos->id)}}">
                    @method('PUT')
                    @csrf

                    <div class="form-group row">
                        <label for="kenteken" class="col-md-4 col-form-label text-md-right">{{ __('kenteken') }}</label>

                        <div class="col-md-6">
                            <input id="kenteken" type="text" class="form-control @error('kenteken') is-invalid @enderror" name="kenteken" value=" {{$autos->kenteken}}" required autocomplete="kenteken" autofocus>

                            @error('kenteken')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    {{--        Hier overal waar email staat moet merk--}}
                    <div class="form-group row">
                        <label for="merk" class="col-md-4 col-form-label text-md-right">{{ __('merk') }}</label>

                        <div class="col-md-6">
                            <input id="merk" type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value=" {{$autos->merk}} " required autocomplete="merk" autofocus>

                            @error('merk')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    {{--                    tot hier--}}
                    {{--        Hier overal waar domain staat moet type--}}
                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('type') }}</label>

                        <div class="col-md-6">
                            <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{$autos->type}}" required autocomplete="type" autofocus>

                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    {{--                    tot hier--}}
                    {{--        Hier overal waar domain staat moet prijs--}}
                    <div class="form-group row">
                        <label for="prijs-per-dag" class="col-md-4 col-form-label text-md-right">{{ __('prijs per dag') }}</label>

                        <div class="col-md-6">
                            <input id="prijs-per-dag" type="text" class="form-control @error('prijs_per_dag') is-invalid @enderror" name="prijs_per_dag" value="{{$autos->prijs_per_dag}}" required autocomplete="prijs-per-dag" autofocus>

                            @error('prijs  ')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    {{--                    tot hier--}}

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Bewaard de auto') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>