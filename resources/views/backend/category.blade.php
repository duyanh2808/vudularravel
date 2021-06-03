@extends('backend.master')
@section('content')
    

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Categories</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			<h3>Add New Category</h3>
			<form method="post" action="{{url('addcategory')}}">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="title " id="name" class="form-control">
					<p>The name is how it appears on your site.</p>
				</div>

				<div class="form-group">
					<label>Slug</label>
					<input type="text" name="slug" id="slug" class="form-control" readonly="">
					<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
				</div>

				<div class="form-group">
					<label>Status</label>
					<select name="status" class="form-control">
						<option value="">on</option>
						<option value="">off</option>
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Add New Category</button>
				</div>
			</form>	


		</div>

		<div class="col-sm-8 cat-view">
			<div class="row">
				<div class="col-sm-3">
					<select name="bulk-action" class="form-control">
						<option>Bulk Action</option>
						<option>Move to Trash</option>
					</select>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-default">Apply</button>
				</div>
				<div class="col-sm-3 col-sm-offset-4">
					<input type="text" id="search" name="search" class="form-control" placeholder="Search Category">
				</div>	
			</div>
			<div class="content">
				<table class="table table-striped">
					<thead>
						<tr>
							<th><input type="checkbox" id="select-all"> Name</th>
							<th>Description</th>
							<th>Slug</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@if(count($data) > 0)
						@foreach ($data as $d)
						<tr>
							<td>
								<input type="checkbox" name="select-cat"> 
								<a href="#">{{$d->title}}</a>
							</td>
							<td>{{$d->slug}}</td>
							<td>{{$d->status}}</td>
						</tr>
						@endforeach
						@else
						<tr>
							<td colspan="3">
								No Data found.
							</td>
						</tr>
						@endif
					</tbody>
				</table>
			</div>
			{{-- <div class="row">
				<div class="col-sm-12">
			        <ul class="pagination">
			          <li><a href="#">&laquo;</a></li>
			          <li><a href="#">1</a></li>
			          <li><a href="#">2</a></li>
			          <li class="active"><a href="#">3</a></li>
			          <li><a href="#">4</a></li>
			          <li><a href="#">5</a></li>
			          <li><a href="#">&raquo;</a></li>
			        </ul>
			    </div>	
			</div>  						 --}}
		</div>
	</div>
</div>


	
@endsection