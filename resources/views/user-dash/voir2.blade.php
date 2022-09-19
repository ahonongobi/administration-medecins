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
                    <div class="row">
						<div class="col-md-4 col-xs-12">
							<div class="white-box">
								
								<div class="cardbox">
									<center>
									    <div class="card-head">
											<header>Historique des visites</header>
									    </div>
									</center>
									<div class="body">
										<div class="user-btm-box">
											
											<div class="row text-center m-t-10">
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
													<strong>Nom</strong>
													<p>{{$membre->nom ?? "..." }}</p>
												</div>
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<strong>Age</strong>
													<p>{{$membre->age ?? "..."}} ans</p>
												</div>
											</div>
											
											
											<!-- .row -->
											<div class="row text-center m-t-10">
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>Téléphone 1</strong>
													<p>{{$membre->tel ?? ".."}}</p>
												</div>
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<strong>Téléphone 2</strong>
													<p> {{$membre->tel2 ?? "..."}}</p>
												</div>
											</div>
											<!-- /.row -->
										
											<!-- .row -->
											<div class="row text-center m-t-10">
												<div class="col-md-12"><strong>Adresse complète</strong>
													<p>{{$membre->addresse ?? "..."}}</p>
													<p>{{$membre->departement ?? "..."}}</p>
												</div>
											</div>
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
																			<th>Nom d'éducateur</th>
																			<th>Programme</th>
																			<th>Structure</th>
																			<th>Service</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>{{Auth::user()->name ?? "admin"}}</td>
																			<td>
																				@if($membre->programmes == 1)
																				BetaNurse
																				@elseif($membre->programmes == 2)

																				VentaPlus
																					@elseif($membre->programmes == 3)
																					Oncoplus
																				@endif
																			</td>
																			<td>{{$membre->etablissement ?? "..."}}</td>
																			<td>{{$membre->service ?? "..."}}</td>
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
																			<th>#</th>
																			<th>Type de visite</th>
																			<th>Lieu</th>
																			<th>Date</th>
																			<th>Dose</th>
																		</tr>
																	</thead>
																	<tbody>
																		@foreach ($historyvisite as $visite)
																		<tr>
																			<td>{{$loop->iteration}}</td>
																			<td>{{$visite->type_visite ?? "..."}}</td>
																			<td>{{$visite->lieu_visite ?? "..."}}</td>
																			<td>{{$visite->date_visite ?? "..."}}</td>
																			<td>{{$visite->dose ?? "..."}}</td>
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
									</div>
									<hr>
								</div>
							</div>
						</div>
					</div>
    <!-- end page content -->
@endsection