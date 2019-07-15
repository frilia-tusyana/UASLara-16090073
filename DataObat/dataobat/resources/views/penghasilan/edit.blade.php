@extends('admin-template')


@section('content-wrapper')
    <section class="content-header">
      <h1>
        {{ $title }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('penghasilan') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Update Data Penghasilan</li>
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
              <form method="post" action="{{ url('/penghasilan/'.$penghasilan->id) }}">
                <input type="hidden" name="_method" value="PATCH"/>
                <input type="hidden" name="_token" value="{{csrf_token() }}"/>

                <div class="form-group{{$errors->has('date') ? ' has-error' : ''}}">
                  <label>Tanggal</label>
                  <input type="date" name="date" class="form-control" value="{{ $penghasilan->date }}">
                  @if($errors->has('date'))
                    <span class="help-block">{{$errors->first('date')}}</span>
                  @endif
                </div>

                <div class="form-group{{$errors->has('jumlah') ? ' has-error' : ''}}">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" class="form-control" value="{{ $penghasilan->jumlah }}">
                  @if($errors->has('jumlah'))
                    <span class="help-block">{{$errors->first('jumlah')}}</span>
                  @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
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