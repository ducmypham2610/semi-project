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
              <span>${{$data['product_price']}}</span>
            </h4>

            <p class="lead font-weight-bold">Description</p>

            <p>{{$data['product_description']}}</p>

            <form action="{{ url('add-to-cart') }}" method="POST">
                @csrf
                <input type="text" value="{{$data['product_id'] }}" name="product_id">
                <input type="hidden" value="1" name="product_quantity">
                <button class="px-4 py-2 text-white bg-success rounded">Add to cart</button>
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
