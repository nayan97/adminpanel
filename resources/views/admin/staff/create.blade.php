
@extends('admin.layouts.app')


@section('main-section')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row row-cols-1 row-cols-2">


					<div class="col">
						<h6 class="mb-0 text-uppercase">Create Staff data </h6>
						<hr>
							@if( $errors -> any())
							<p class="alert alert-danger d-flex justify-content-between">{{ $errors -> first()}} <button class="btn-close" data-bs-dismiss ="alert"></button> </p>

							@endif
							@if( Session::has('success'))
							<p class="alert alert-success d-flex justify-content-between">{{ Session::get('success')}} <button class="btn-close" data-bs-dismiss ="alert"></button> </p>

							@endif

						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-primary"></i>
									</div>
									<h5 class="mb-0 text-primary">Staff Registration</h5>
								</div>
								<hr>
								<form class="row g-3" action={{ route('staff.store') }} method="POST" enctype="multipart/form-data">
									@csrf
									<div class="col-md-12">
										<label for="inputFirstName" class="form-label">Staff Name</label>
										<input name="name" type="text" class="form-control" id="inputFirstName">
									</div>
							
									<div class="col-md-12">
										<label for="inputFirstName" class="form-label">Facebook</label>
										<input name="fb" type="text" class="form-control" id="inputFirstName">
									</div>
									<div class="col-md-12">
										<label for="inputFirstName" class="form-label">Twitter</label>
										<input name="tw" type="text" class="form-control" id="inputFirstName">
									</div>
									<div class="col-md-12">
										<label for="inputFirstName" class="form-label">INSTAGRAM</label>
										<input name="in" type="text" class="form-control" id="inputFirstName">
									</div>
									<div class="col-md-12">
										<label for="inputFirstName" class="form-label">LINKEDIN</label>
										<input name="ln" type="text" class="form-control" id="inputFirstName">
									</div>
									<div class="mb-3">
									<label for="formFile" class="form-label">Photo</label>
									<input name="photo" class="form-control" type="file" id="formFile">
									</div>
							
									</div>

									<div class="col-12">
										<button type="submit" class="btn btn-primary px-5">Register</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				

				</div>
				<!--end row-->
		
				<!--end row-->
			</div>
		</div>

@endsection