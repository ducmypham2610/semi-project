@extends('user.layouts.master')
@section('content')
  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Products v.3-->
      <section class="text-center mb-4 mt-4 ">
          <div class="row">
              <div class="col-lg-12 mb-4">
                  <h1 class="h1">Best products</h1>
              </div>
          </div>

        <!--Grid row-->
        <div class="row wow fadeIn">

          @foreach($product as $product)
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card d-flex flex-column justify-content-around" style="height: 450px;">

              <!--Card image-->
              <div class="view overlay">
                <img src="{{asset('img/'.$product->product_image)}}" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body d-flex flex-column align-items-center">
                <!--Category & Title-->
                <a href={{"detail/".$product['product_id']}} class="text-dark">
                  <h5>{{$product->product_name}}</h5>
                </a>

                <h4 class="font-weight-bold text-info">
                  <strong>${{$product->product_price}}</strong>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          @endforeach
          <!--Grid column-->
        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">5</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--Pagination-->

    </div>
  </main>
  <!--Main layout-->
@stop
