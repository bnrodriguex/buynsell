@extends('layouts.app')

@section('content')

@foreach ($anuncios as $value)
            <div class="col">
              <div class="product-item justify-content-center">
                <figure>
                  <a href="{{ url('') }}" title="Product Title">
                    <img style="items-align:center" src="data:image/png;base64,{{ $value->imagem }}" alt="Product Thumbnail" class="tab-image" height="180">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-large justify-content-center" style="text-align: left;">{{ $value->titulo }}</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <div class="d-flex justify-content-center align-items-center gap-5">
                      <!-- COLOQUE O QUE QUISER -->
                    </div>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-4">
                    <span class="text-dark fw-semibold">$18.00</span>
                    <span style="color:yellow " class="badge border border-dark-subtle rounded-3 fw-normal px-2 fs-7 lh-1">{{ $value->autor->name }}</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach,


@endsection