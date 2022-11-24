@extends('_layouts._indexuser')
@section('content')
    <div class="row">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ Session::get('success') }}

            </div>
        @endif
            @if(Session::has('error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ Session::get('error') }}

                </div>
            @endif
			<!-- if any errors -->
			@if ($errors->any())
				
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)

							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			
                    <div class="row">
						<div class="col-md-4 col-xs-12">
							<div class="white-box">
								
								<div class="cardbox">
									<center>
									    <div class="card-head">
											<header>Rapport journalier</header>
									    </div>
									</center>
									<div class="body">
										<div class="user-btm-box">
										
										<div class="row text-center m-t-10">
												
											</div>
											
											<div class="row text-center m-t-10">
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
													<strong>DATE:</strong>
													<p>{{date('d/m/Y', strtotime($data->creted_at))}}</p>
												</div>
												
											</div>
											
											
											<!-- .row -->
											
											<!-- /.row -->
										
											<!-- .row -->
											
										</div>
									</div>
								</div>
							</div>

							
						</div>
						<div class="col-md-8 col-xs-12">
							<div class="cardbox">
								<div class="body">
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-12">
													<div class="card">
														<div class="card-head">
															<header>Information interne</header>
														</div>
														<div class="card-body ">
															<div class="table-responsive">
																<table
																	class="table table-striped custom-table table-hover">
																	<thead>
																		<tr>
																			<th>N°</th>
																			<th>Description de la tâches</th>
																			
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>1</td>
																			<td>{{$data->tache_1 ?? '#' }}</td>

																		</tr>
                                                                        <tr>
																			<td>2</td>
																			<td>{{$data->tache_2 ?? '#' }}</td>

																		</tr>
                                                                        <tr>
																			<td>3</td>
																			<td>{{$data->tache_4 ?? '#' }}</td>

																		</tr>
                                                                        <tr>
																			<td>4</td>
																			<td>{{$data->tache_4 ?? '#' }}</td>

																		</tr>
                                                                        <tr>
																			<td>5</td>
																			<td>{{$data->tache_5 ?? '#' }}</td>

																		</tr>
                                                                        <tr>
																			<td>6</td>
																			<td>{{$data->tache_6?? '#' }}</td>

																		</tr>
																	</tbody>
																	
																	
																	
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-12">
													<div class="card">
														<div class="card-head">
															<header>Historique des visites</header>
														</div>
														<div class="card-body ">
															<div class="table-responsive">
																<table
																	class="table table-striped custom-table table-hover">
																	<thead>
																		<tr>
																			
																			<th>Remarque:</th>
																			
																		</tr>
																	</thead>
																	<tbody>
																		
																		<tr>
																			<td>{{$data->remarque ?? "##"}}</td>
																			
																		</tr>
																		
																		
																		
																	
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<hr>
								</div>
							</div>
						</div>
					</div>
    <!-- end page content -->
@endsection