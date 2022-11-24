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
											<header>Information patient</header>
									    </div>
									</center>
									<div class="body">
										<div class="user-btm-box">
										
										<div class="row text-center m-t-10">
												<div class="col-md-12"><strong>CODE PATIENT</strong>
													<p>{{$membre->code}}</p>
												</div>
											</div>
											
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

							<div class="white-box">
								
								<div class="cardbox">
									<center>
									    <div class="card-head">
											<header>Ajouter une visite</header>
									    </div>
									</center>
									<div class="body">
										<div class="user-btm-box">
										
											<form action="{{route('saveVisiteFromProfile')}}" method="post" id="form_sample_1" class="form-horizontal">
												@csrf
												<div class="form-group row">
													<label class="control-label col-md-4">Datede visite * : 
														<span class="required">  </span>
													</label>
					
													<div class="col-md-4">
														<input type="date" value="{{old('date_visite')}}" class="form-control" name="date_visite"
														placeholder="" />
												 @if($errors->has('date_visite'))
													 <span class="text-danger">{{$errors->first('date_visite')}}</span>
												 @endif
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label col-md-4">Type de visite : 
														<span class="required">  </span>
													</label>
					                                 <input type="hidden" value="{{$membre->email}}" name="email">
													<div class="col-md-4">
														<select  value="{{old('type_visite')}}" class="form-control" name="type_visite">
															<option value="">Selectionnez...</option>
															<option value="Structure">Structure</option>
															<option value="Téléphonique">Téléphonique </option>
															<option value="Bureau">Bureau</option>
															<option value="Domicile">Domicile</option>
														</select>
					
														@if($errors->has('type_visite'))
															<span class="text-danger">{{$errors->first('type_visite')}}</span>
														@endif
													</div>
												</div>

												<div class="form-group row">
													<label class="control-label col-md-4">Lieu de visite: 
														<span class="required"> * </span>
													</label>
													<div class="col-md-4">
														<input name="lieu_visite" value="{{old('lieu_visite')}}" type="text" class="form-control" />
														@if($errors->has('lieu_visite'))
															<span class="text-danger">{{$errors->first('lieu_visite')}}</span>
														@endif
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label col-md-4">Dose: 
														<span class="required"> * </span>
													</label>
													<div class="col-md-4">
														<input name="dose" value="{{old('dose')}}" type="text" class="form-control" />
														@if($errors->has('dose'))
															<span class="text-danger">{{$errors->first('dose')}}</span>
														@endif
													</div>
												</div>

												<div class="form-group">
													<div class="offset-md-3 col-md-9">
														<button type="submit" class="btn btn-info m-r-20">Valider</button>
														<a href="/user" class="btn btn-default">Annuler</a>
													</div>
												</div>
											</form>
										   
										
											
											
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
																			<th>Nom d'éducateur</th>
																			<th>Region</th>
																			<th>Programme</th>
																			<th>Depuis</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>{{Auth::user()->name ?? "admin"}}</td>
																			<td>{{$membre->region}}</td>
																			<td>{{$membre->programmes ??"RAS"}}</td>
																			<td>{{$membre->date_signature}}</td>
																		</tr>
																	</tbody>
																	<thead>
																		<tr>
																			<th>Structure</th>
																			<th>Service</th>
																			<th>Médecin</th>
																			<th>Tél médecin</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>{{$membre->etablissement ?? "..."}}</td>
																			<td>{{$membre->service ?? "..."}}</td>
																			<td>{{$membre->nom_responsable}}</td>
																			<td>{{$membre->tele_medecin}}</td>
																		</tr>
																	</tbody>
																	<thead>
																		<tr>
																			<th>Statut</th>
																			<th>Accompagnant</th>
																			<th>Email</th>
																			<th>Effect secondaire</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>{{$membre->statut}}</td>
																			<td>{{$membre->accompagnant}}</td>
																			<td>{{$membre->email}}</td>
																			<td>{{$membre->effet}}</td>
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