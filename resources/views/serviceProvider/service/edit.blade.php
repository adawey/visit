
@extends('serviceProvider.layout.layout')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>تعديل خدمة</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">edit service</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action='{{ route('update_provider',$service->id)}}' method='POST' enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">الإسم</label>
                        <input type="text" name="name" onchange='regfun()'  class="form-control" id="name"
                            placeholder="أدخل الإسم">
                        <div id='demo' style='display:none' class="alert alert-danger mt-3"> </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label"> اختر منطقة </label>
                        <select name="region_id" id="regions" class="form-control input-lg dynamic"
                            data-dependent="area">
                            <option value="">اختار منطقة </option>
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}"> {{ $region->name_ar }}</option>
                            @endforeach
                        </select>
                        @error('region_id')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </div>

                    <br />


                    <div class="form-group">
                        <label for="link">الرابط</label>
                        <input type="text" name="link" class="form-control" id="link">
                        @error('link')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">الوصف</label>
                        <textarea id="description" name="description" class="form-control"></textarea>
                        @error('description')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">الصورة</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="image">
                        @error('image')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>



@stop

@section('js')
    <script>
        function regfun() {

            var inputString = document.getElementById("name").value;
            const pattern = /^[a-zA-Z \u0600-\u065F\u066A-\u06EF\u06FA-\u06FF]+$/;
            const val = pattern.test(inputString);
            if (val) {
                document.getElementById("demo").style.display = 'none';
            } else {
                document.getElementById("demo").style.display = 'block';
                document.getElementById("demo").innerHTML = 'الاسم يجب ان يكون حروف عربي او انجليزي فقط';
            }
        }
    </script>
@endsection
