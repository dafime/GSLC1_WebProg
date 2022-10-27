@extends('header')

@section('content')
    <h3> Saya dapat berlari hanya sampai 20 KM</h3>
  @for ($i = 0; $i <= 20; $i++)   
            @if ($i != 20)
                <h4>Anda sudah berlari selama {{$i+1}} km</h4>
            @elseif ($i == 20)
                <h4>Saatnya istirahat sejenak anda telah berlari selama {{$i}} km</h4>
            @endif    
        </div>
    @endfor
  
@endsection

 