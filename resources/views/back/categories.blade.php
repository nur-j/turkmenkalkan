@extends('back.layout')

@section('content')
  
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Kategoriýalar</h3>

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
                      Türkmençe
                  </th>
                  <th style="width: 30%">
                      Rusça
                  </th>
                  <th>
                      Iňlisçe
                  </th>
                  <th style="width: 20%">
                  </th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>
                      #
                  </td>
                  <td>
                      <a>
                          AdminLTE v3
                      </a>
                      <br>
                      <small>
                          Created 01.01.2019
                      </small>
                  </td>
                  <td>
                      <ul class="list-inline">
                          <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                          </li>
                          <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                          </li>
                          <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                          </li>
                          <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar04.png">
                          </li>
                      </ul>
                  </td>
                  <td class="project_progress">
                      <div class="progress progress-sm">
                          <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                          </div>
                      </div>
                      <small>
                          57% Complete
                      </small>
                  </td>
                  <td class="project-state">
                      <span class="badge badge-success">Success</span>
                  </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>
                      <a class="btn btn-info btn-sm" href="#">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td>
              </tr>

          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <a href="#" class="btn btn-primary btn-lg">Kategoriýa goşmak</a>

</section>


@endsection 