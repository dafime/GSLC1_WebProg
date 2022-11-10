@extends('header')

@section('content')
<body style="background-color: silver;">
    <div class="title">
        <h1>Kadafi Shop Shoes</h1>
    </div>
    <div>
        @for ($i = 0; $i <= 4; $i++)

            <div class="card bg-dark text-white text-center" style="width: 18rem; margin: 10px; display: flex; justify-content: space-between;">
                <div class="card-body">
                    <img class="card-img " src="{{ $image }}" alt="Air Jordan" style="width: 18rem;">
                    <h5 class="card-title">Air Jordan 1 Chichago</h5>
                    <p class="card-text">Descrption about air jordan 1</p>
                </div>
            </div>
        @endfor
    </div>
</body>
@endsection
