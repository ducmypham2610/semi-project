@extends('user.layouts.master')
@section('content')
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="../img/{{$data['product_image']}}" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="btn btn-lg bg-warning text-white">New</span>
              </a>
              <a href="">
                <span class="btn btn-lg bg-info text-white">Bestseller</span>
              </a>
            </div>

            <h1 class="h1 text-danger">
                <span>{{$data['product_name']}}</span>
              </h1>

            <h4 class="h4 text-info">
              <span>{{$data['product_price']}}</span>
            </h4>

            <p class="lead font-weight-bold">Description</p>

            <p>{{$data['product_description']}}</p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

    </div>
  </main>
  <!--Main layout-->

  @stop
