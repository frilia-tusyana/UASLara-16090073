@extends('admin-template')


@section('content-wrapper')
    <section class="content-header">
      <h1>
        {{ $title }}
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('penghasilan/create') }}">Add Penghasilan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data List Penghasilan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Jumlah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($penghasilan as $hasil)
                <tr>
                  <td>{{$hasil->date}}</td>
                  <td>{{$hasil->jumlah}}</td>
                  <td>
                    <div class="btn-group">
                    <a class="btn btn-warning btn-sm" href="{{ url('penghasilan/edit', $hasil->id) }}">EDIT</a>    
                    <a href="{{ url('penghasilan/hapus') }}/{{$hasil->id}}" class="btn btn-danger btn-sm">DELETE</a> 
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Tanggal</th>
                  <th>Jumlah</th>
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