@extends('layouts.app')

@section('content')

<div class="preloader-wrapper">
  <div class="preloader">
  </div>
</div>

<!-- ----------------- CARROUSEL CATEGORIAS --------------- -->

<section class="py-5 overflow-hidden">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-12">

        <div class="section-header d-flex flex-wrap justify-content-between mb-5">
          <h2 class="section-title">Category</h2>

          <div class="d-flex align-items-center">
            <a href="#" class="btn btn-primary me-2">View All</a>
            <div class="swiper-buttons">
              <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
              <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="category-carousel swiper">
          <div class="swiper-wrapper">
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/carrosa.svg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/movel.svg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/imoveis.svg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/eletronicoss.svg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/eletro.svg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/casadecor.svg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/category-thumb-7.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/category-thumb-8.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
            </a>
            <a href="category.html" class="nav-link swiper-slide text-center">
              <img src="images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
              <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
            </a>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- ----------------- CARROUSEL CATEGORIAS --------------- -->



<!------------------GRADE DE ANUNCIOS---------------------------->
<div class="container">
  <section class="pb-5">
    <div class="container-lg">

      <div class="row">
        <div class="col-md-12">

          <div class="section-header d-flex flex-wrap justify-content-between my-4">

            <h2 class="section-title">Best selling products</h2>

            <div class="d-flex align-items-center">
              <a href="#" class="btn btn-primary rounded-1">View All</a>
            </div>
          </div>

        </div>
      </div>
      <!-- / product-grid -->
      <div class="row">
        <div class="col-md-12">
          <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
            @foreach ($anuncios as $value)
            <div class="col">
              <div class="product-item justify-content-center">
                <figure>
                  <a href="index.html" title="Product Title">
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
            @endforeach
          </div>
          <!-- / product-grid -->


        </div>
      </div>
    </div>
  </section>
</div>

<!--- GRADE DE ANUNCIOS --->



<!------------------ BANNER DE INSCRIÇÃO ------------------------>
<div class="container">
  <div class="container-xl">

    <div class="bg-secondary text-light py-5 my-5" style="background: url('images/fundosa.svg') no-repeat; background-size:cover ;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5 p-3">
            <div class="section-header">
              <h2 style="color:yellow;" class="section-title display-8">Receba os anúncios em primeira mão se inscrevendo no site! </h2>
            </div>
            <strong>
              <p style="font-size: large;">Apenas Registre-se e torne-se o novo Membro da BuyN'Sell</p>
            </strong>
          </div>
          <div class="col-md-5 p-3">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label d-none">Nome</label>
                <input type="text"
                  class="form-control form-control-md rounded-0" name="nome" id="nome" placeholder="Nome">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label d-none">Email</label>
                <input type="email" class="form-control form-control-md rounded-0" name="email" id="email" placeholder="Email">
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning btn-md rounded-0">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!--- BANNER DE INSCRIÇÃO --->



<!-- ---------------GRADE IMAGENS AMOSTRATIVAS---------------------- -->
<section class="py-3">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-12">

        <div class="banner-blocks">

          <div class="banner-ad d-flex align-items-center large bg-info block-1" style="background: url('images/banner-ad-1.jpg') no-repeat; background-size: cover;">
            <div class="banner-content p-5">
              <div class="content-wrapper text-light">
                <h3 class="banner-title text-light">Items on SALE</h3>
                <p>Discounts up to 30%</p>
                <a href="#" class="btn-link text-white">Shop Now</a>
              </div>
            </div>
          </div>

          <div class="banner-ad bg-success-subtle block-2" style="background:url('images/banner-ad-2.jpg') no-repeat;background-size: cover">
            <div class="banner-content align-items-center p-5">
              <div class="content-wrapper text-light">
                <h3 class="banner-title text-light">Combo offers</h3>
                <p>Discounts up to 50%</p>
                <a href="#" class="btn-link text-white">Shop Now</a>
              </div>
            </div>
          </div>

          <div class="banner-ad bg-danger block-3" style="background:url('images/banner-ad-3.jpg') no-repeat;background-size: cover">
            <div class="banner-content align-items-center p-5">
              <div class="content-wrapper text-light">
                <h3 class="banner-title text-light">Discount Coupons</h3>
                <p>Discounts up to 40%</p>
                <a href="#" class="btn-link text-white">Shop Now</a>
              </div>
            </div>
          </div>

        </div>
        <!-- / Banner Blocks -->

      </div>
    </div>
  </div>
</section>

<!-- ---------------GRADE IMAGENS AMOSTRATIVAS---------------------- -->


@endsection