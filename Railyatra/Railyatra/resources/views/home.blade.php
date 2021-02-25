@extends('layout')

@section('content')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-9">
			<div class="panel panel-login">
				<div class="panel-heading">
					<h1>Book Ticket</h1>
				</div>
				<div class="panel panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form
								id="login-form"
								action=""
								method="post"
								role="form"
								style="display: block"
								>@csrf
								<div class="form-group row" style="padding: 0">
									<div class="col-md-6">
										
									</div>
									<div class="col-md-6 text-center">
										DD/MM/YYYY
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="&#xf124; From" style="font-family:Arial, FontAwesome;" />
									</div>
									<div class="col-md-6">
										<input type="date" class="form-control" placeholder="&#xf073;" style="font-family:Arial, FontAwesome;" />
									</div>
								</div>
								<div class="form-group row" style="padding: 0">
									<div class="col-md-6 text-center">
										<i class="fas fa-exchange-alt"></i>
									</div>
									<div class="col-md-6">
										
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="&#xf3c5; To" style="font-family:Arial, FontAwesome;" />
									</div>
								</div>

								<div class="form-group">
									<div class="row justify-content-md-center">
										<div class="col-sm-8">
											<input
											type=""
											name=""
											id=""
											tabindex="4"
											class="form-control btn btn-login"
											value="Search"
											/>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
