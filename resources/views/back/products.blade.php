@extends('back.layout')

@section('content')
  
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Önümler</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      #
                  </th>
                  <th style="width: 20%">
                      Ady
                  </th>
                  <th style="width: 30%">
                      Suraty
                  </th>
                  <th style="width: 40%">
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                            {{ $product->title_tm }}
                    </td>
                    <td>
                        <img alt="Avatar" style="height: 120px; width: 120px" class="" src="{{ asset($product->images[0]->url) }}">
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" target="__blank" href="{{ route('product.single', $product->id) }}">
                            <i class="fas fa-eye">
                            </i>
                            Görmek
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Üýtgetmek
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">
                                <i class="fas fa-trash"></i>
                                Aýyrmak
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  {{-- <a href="#" class="btn btn-primary btn-lg">Kategoriýa goşmak</a> --}}
  {{ $products->links('pagination::bootstrap-4') }}

</section>


@endsection 