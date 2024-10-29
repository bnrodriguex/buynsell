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
                  <img src="images/cars.svg" class="rounded-circle" alt="Category Thumbnail">
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
                  
                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-1.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-4">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-8 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18"> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-2.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Whole Grain Oatmeal</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(41)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$54.00</del>
                        <span class="text-dark fw-semibold">$50.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18">Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-3.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Sharp Cheddar Cheese Block</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(32)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$14.00</del>
                        <span class="text-dark fw-semibold">$12.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18"> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-4.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Organic Baby Spinach</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18"> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-5.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Organic Spinach Leaves (Fresh Produce)</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18"> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-6.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Fresh Salmon</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18"> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-7.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Imported Italian Spaghetti Pasta</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18"> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-8.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Granny Smith Apples</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18"> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-9.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Organic 2% Reduced Fat Milk </h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18"> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="product-item">
                    <figure>
                      <a href="index.html" title="Product Title">
                        <img src="images/product-thumb-10.png" alt="Product Thumbnail" class="tab-image">
                      </a>
                    </figure>
                    <div class="d-flex flex-column text-center">
                      <h3 class="fs-6 fw-normal">Greek Style Plain Yogurt</h3>
                      <div>
                        <span class="rating">
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-full"></use></svg>
                          <svg width="18" height="18" class="text-warning"><use xlink:href="#star-half"></use></svg>
                        </span>
                        <span>(222)</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center gap-2">
                        <del>$24.00</del>
                        <span class="text-dark fw-semibold">$18.00</span>
                        <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                      </div>
                      <div class="button-area p-3 pt-0">
                        <div class="row g-1 mt-2">
                          <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                          <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><img src='images/carrinhoicon.svg' width="18" height="18"> Add to Cart</a></div>
                          <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18"><use xlink:href="#heart"></use></svg></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              
              </div>
            <!-- / product-grid -->


            </div>
          </div>
        </div>
      </section>
    </div>

    <!------------------GRADE DE ANUNCIOS---------------------------->


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