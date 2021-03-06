@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
   	<p><a href="{{ route('admin.categories.create') }}" class="btn btn-info">Add New Category</a></p>
	<table class="table table-striped">
		<tr>
			<th>SN</th>
			<th>Title</th>
			<th>Action</th>
		</tr>
		<?php $i=0;?>
		@if(count($categories))
			@foreach($categories as $c)
				<?php $i++;?>
				<tr><td>{{ $i }}</td>
					<td>{{ $c->title }}</td> 
					<td><a href="{{ route('admin.categories.edit',$c->id) }}" class="btn btn-primary">Edit</a> 
						<a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
						<form action="{{ route('admin.categories.destroy',$c->id) }}" method="post">
							@method('DELETE')
							 <input type="hidden" name="_token" value="{{ csrf_token() }}">
						</form>

				</td></tr>
			@endforeach
		@else
			<tr><td colspan="3">No News found</td></tr>
		@endif
	</table>
</div>

@endsection