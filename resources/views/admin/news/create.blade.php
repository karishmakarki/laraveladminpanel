@extends('layouts.admin')
@section('content')

<h1>Create News</h1>

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add News</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add News</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <section class="content">
      <div class="container-fluid">
       	<form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form/data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">    
             <div class="form-group">
                <div class="row">
		               <label class="col-md-3">Title</label>	
  				           <div class="col-md-7">
                        <input type="text" name="title" class="form-control"></div>
  		                <div class="clearfix"></div>
      			    </div>
            </div>

            <div class="form-group">
                <div class="row">
                   <label class="col-md-3">Author</label>  
                     <div class="col-md-7">
                        <input type="text" name="author" class="form-control"></div>
                      <div class="clearfix"></div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                   <label class="col-md-3">Image</label>  
                     <div class="col-md-7">
                        <input type="file" name="image" ></div>
                      <div class="clearfix"></div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                   <label class="col-md-3">Description</label>  
                     <div class="col-md-7">
                        <textarea name="description" class="form-control"></textarea></div>
                      <div class="clearfix"></div>
                </div>
              </div>

            <!--   <div class="form-group">
              <div class="row">
                 <label class="col-md-3">Slug</label>  
                   <div class="col-md-7">
                      <input type="text" name="slug" class="form-control"></div>
                    <div class="clearfix"></div>
              </div>
            </div> -->

                  <div class="form-group">
            		   <input type="submit" value="Save" class="btn btn-primary">
                  </div>
		    </form>
      </div>

@endsection


