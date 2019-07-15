@extends('admin-template')


@section('content-wrapper')
    <section class="content-header">
      <h1>
        {{ $title }}
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('post/create') }}">Add Obat</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data List Obat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Stok</th>
                  <th>Harga</th>
                  <th>Jenis Obat</th>
                  <th>Bobot Obat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($post as $p)
                <tr>
                  <td>{{$p->nama}}</td>
                  <td>{{$p->stok}}</td>
                  <td>{{$p->harga}}</td>
                  <td>{{$p->jo}}</td>
                  <td>{{$p->bobot}}</td>

                  <td>
                    <div class="btn-group">
                    <a class="btn btn-warning btn-sm" href="{{ url('post/edit', $p->id) }}">Edit</a>    
                    <a href="{{ url('post/hapus') }}/{{$p->id}}" class="btn btn-danger btn-sm">DELETE</a>
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Stok</th>
                  <th>Harga</th>
                  <th>Jenis Obat</th>
                  <th>Bobot Obat</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
    </section>
    <!-- /.content -->
@stop