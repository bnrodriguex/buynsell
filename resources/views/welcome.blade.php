@extends('layouts.app')

@section('content')
        
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
                  <img src="images/carrologosite.svg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="images/carrologosite.svg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-3.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-4.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-5.jpg" class="rounded-circle" alt="Category Thumbnail">
                  <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
                </a>
                <a href="category.html" class="nav-link swiper-slide text-center">
                  <img src="images/category-thumb-6.jpg" class="rounded-circle" alt="Category Thumbnail">
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