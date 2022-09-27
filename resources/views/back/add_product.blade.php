@extends('back.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assetsb/plugins/select2/css/select2.min.css') }}">
@endsection
@section('content')
  
  <section class="content">
    <div class="container-fluid">

      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Täze önüm</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="title_tm">Türkmençe ady</label>
              <input type="text" class="form-control" name="title_tm" id="title_tm" placeholder="">
            </div>
            <div class="form-group">
              <label for="title_ru">Rusça ady</label>
              <input type="text" class="form-control" id="title_ru" name="title_ru" placeholder="">
            </div>
            <div class="form-group">
              <label for="title_en">Iňlisçe ady</label>
              <input type="text" class="form-control" id="title_en" name="title_en" placeholder="">
            </div>
            <div class="form-group">
              <label for="price">Bahasy</label>
              <input type="number" class="form-control" id="price" name="price" placeholder="">
            </div>
            <div class="form-group">
              <label for="description">Giňişleýin</label>
              <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="colors">Reňkler</label>
              <select class="form-control" multiple name="colors[]" id="colors">
                @foreach ($colors as $color)
                  <option value="{{ $color->id }}">{{ $color->title }}</option>    
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="category_id">Kategoriýasy</label>
              <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->title_tm }}</option>
                @endforeach
              </select>
            </div>
            {{-- <div class="form-group">
              <label for="images">Suratlary</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="images" multiple name="images">
                  <label class="custom-file-label" for="images">Suratlary ýükläň</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Ýükle</span>
                </div>
              </div>
            </div> --}}
            <div class="form-group">
              <label for="images">Suratlar</label>
              <input type="file" class="form-control" id="images" name="images[]" multiple placeholder="">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Goşmak</button>
          </div>
        </form>
      </div>

    </div>
  </section>

@endsection

@section('scripts')
      
    <!-- BS custom file input -->
    <script src="{{ asset('assetsb/plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
    <script>
      $(function() {
        bsCustomFileInput.init();
      });
    </script>

    <!-- select2 -->
    <script src="{{ asset('assetsb/plugins/select2/js/select2.min.js') }}"></script>

@endsection