@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Categories</h1>

    <div class="alert alert-success">
      123
         {{ session('status') }}
    </div>


  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Categories</h5>
           
           </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Category ID</th>
                  <th>Category Code</th>
                  <th>Category Order</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($categories as $key=>$category)
                <tr class="gradeX">
                  <td>{{$category->id}}</td>
                  <td>{{$category->code}}</td>
                  <td>{{$category->orderNum}}</td>
                   <td class="center">
                    <a href="{{ url('shop/admin/edit-category/'.$category->id) }}" class="btn btn-primary btn-mini">Edit</a> 
                    <a href="{{ url('shop/admin/delete-category/'.$category->id) }}" rel="{{ $category->id }}" rel1="delete-category" href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection