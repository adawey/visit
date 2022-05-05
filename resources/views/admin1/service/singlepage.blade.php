@extends('admin1.layout.layout')

@section('content')

<main>
    <div class="container mb-7">
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-center">
            <div class="sw-13 position-relative mb-3 mx-auto">
              <img src="{{$service->image?url('/').'/images/offer/'.$service->image :'https://via.placeholder.com/100'}}" class="img-fluid rounded-xl" alt="thumb" />
            </div>
            <a href="Instructor.Detail.html" class="body-link">ألاسم:{{$service->name}}</a>
            <div class="mb-2">
                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
            </div>

            <div class="mb-3 text-muted sh-7">الوصف:{{$service->description}}</div>

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
        <!-- Right Side Start -->
        <div class="col-12 col-xl-12 col-xxl-12">
          <!-- Reviews Start -->
          <div class="card mb-5">
            <div class="card-body">
              <div class="d-flex align-items-center pb-3 mt-3">
                <div class="row g-0 w-100">
                  <div class="col-auto">
                    <div class="sw-5 me-3">
                      <img src="{{$service->image?url('/').'/images/offer/'.$service->image :'https://via.placeholder.com/100'}}" class="img-fluid rounded-xl" alt="thumb" />
                    </div>
                  </div>
                  <div class="col pe-3">
                    <div>{{$service->name}}</div>

                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">

                    </div>
                    <div class="text-medium text-alternate lh-1-25">
                      Chupa chups topping pastry halvah. Jelly cake jelly sesame snaps jelly beans jelly beans. Biscuit powder brownie powder sesame snaps
                      jelly-o dragée cake. Pie tiramisu cake jelly lemon drops. Macaroon sugar plum apple pie carrot cake jelly beans chocolate.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Reviews End -->
        </div>
      </div>
      <!-- Content End -->
    </div>
</main>


@endsection
