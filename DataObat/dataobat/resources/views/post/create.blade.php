@extends('admin-template')


@section('content-wrapper')


<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $title }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('post') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Masukkan Data Obat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="{{ action('PostController@store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            
                <div class="form-group{{$errors->has('nama') ? ' has-error' : ''}}">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Enter ..." value="{{old('nama')}}">
                  @if($errors->has('nama'))
                    <span class="help-block">{{$errors->first('nama')}}</span>
                  @endif
                </div>

                <div class="form-group{{$errors->has('stok') ? ' has-error' : ''}}">
                  <label>Stok</label>
                  <input type="text" name="stok" class="form-control" placeholder="Enter ..." value="{{old('stok')}}">
                  @if($errors->has('stok'))
                    <span class="help-block">{{$errors->first('stok')}}</span>
                  @endif
                </div>

                <div class="form-group {{$errors->has('harga') ? ' has-error' : ''}}">
                  <label>Harga</label>
                  <input type="text" name="harga" class="form-control" placeholder="Enter ..." value="{{old('harga')}}">
                  @if($errors->has('harga'))
                    <span class="help-block">{{$errors->first('harga')}}</span>
                  @endif
                </div>
                <!-- select -->
                <div class="form-group{{$errors->has('jo') ? ' has-error' : ''}}">
                  <label>Jenis Obat</label>
                  <select class="form-control" name="jo" value="{{old('jo')}}">
                    <option></option>
                    <option>PUPUK</option>
                    <option>BOTOL</option>
                    <option>Saset</option>
                  </select>
                  @if($errors->has('jo'))
                    <span class="help-block">{{$errors->first('jo')}}</span>
                  @endif
                </div>

                <div class="form-group {{$errors->has('bobot') ? ' has-error' : ''}}">
                  <label>Bobot</label>
                  <input type="text" name="bobot" class="form-control" placeholder="Enter ..." value="{{old('bobot')}}">
                  @if($errors->has('bobot'))
                    <span class="help-block">{{$errors->first('bobot')}}</span>
                  @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    @stop