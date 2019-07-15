@extends('admin-template')


@section('content-wrapper')
    
	<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Aktifitas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
		<tr>
			<th>Subject</th>
			<th>URL</th>
			<th>Method</th>
			<th>Ip</th>
			<th>Action</th>
		</tr>
	</thead>
		@if($logs->count())
			@foreach($logs as $key => $log)
			<tr>
				<td>{{ ++$key }}</td>
				<td>{{ $log->subject }}</td>
				<td class="text-success">{{ $log->url }}</td>
				<td><label class="label label-info">{{ $log->method }}</label></td>
				<td class="text-warning">{{ $log->ip }}</td>
				<td><button class="btn btn-danger btn-sm">Delete</button></td>
			</tr>
			@endforeach
		@endif
	</table>
</div>
</div>
</div>
</div>
</section>
    <!-- /.content -->
@stop
