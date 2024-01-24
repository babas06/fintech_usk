@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="row">
        @foreach ($produks as $produk)
              <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>

               <div class="card-body">
                 <div class="card-title">
                    <h4> {{ $produk->name }}</h4>
                </div>
                <div class="card-text">
                    <p>{{ $produk->desc }}</p>
                    <h5 class="text-warning fw-bold">Rp. {{ $produk->price }}</h5>
                </div>
               </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
@endsection
