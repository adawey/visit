@extends('serviceProvider.layout.layout')

@section('content')

<main>
    <div class="container mb-7">
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-center p-5" >
            <div class="sw-13 position-relative mb-3 mx-auto">
              <img src="{{$service->image?url('/').'/images/offer/'.$service->image :'https://via.placeholder.com/100'}}" class="img-fluid rounded-xl" alt="thumb" />
            </div>
            <a href="Instructor.Detail.html" class="body-link">{{$service->name}}</a>
            <div class="mb-2">
                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating=" @if($rates !== 0){{$rates->avg}}@else 0 @endif ">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
            </div>

            <div class="mb-3   sh-7" style='color:white'>{{$service->description}}</div>

          </div>
        </div>
      </div>
    </div>

    <div class="container "style="margin-top: 50px;">
      <!-- Title and Top Buttons Start -->
      <div class="page-title-container">
        <div class="row">
          <!-- Title Start -->
          <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 pt-10 display-4" id="title">التعليقات</h1>

          </div>
          <!-- Title End -->
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <!-- Content Start -->
      <div class="row g-5">
        @foreach ($comments as $comment )
        <!-- Right Side Start -->
        <div class="col-12 col-xl-12 col-xxl-12">
          <!-- Reviews Start -->
          <div class="card ">
            <div class="card-body">
              <div class="d-flex align-items-center pb-1 ">
                <div class="row g-0 w-100">
                  <div class="col pe-1">
                    <div>{{$comment->user_name}}</div>
                    <div class="text-medium text-alternate lh-1-25">
                        {{$comment->comment}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Reviews End -->
        </div>
        @endforeach
      </div>
      <!-- Content End -->
    </div>
</main>


@endsection
