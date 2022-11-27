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
												<div class="col-md-12"><strong>CODE RAPPORT</strong>
													<p>{{$data->code_rapport}}</p>
												</div>
											</div>
											
											<div class="row text-center m-t-10">
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
													<strong>CODE RAPPORT</strong>
													<p>{{$data->code_rapport ?? "..." }}</p>
												</div>
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<strong>PSDMP</strong>
													<p>{{$data->psdmp ?? "..."}}</p>
												</div>

                                                <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
													<strong>PSDMP REGION</strong>
													<p>{{$data->psdmp_region ?? "..." }}</p>
												</div>
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<strong>DATE DU RAPPORT</strong>
													<p>{{$data->date_rapport ?? "..."}}</p>
												</div>
											</div>
											
											
											<!-- .row -->
											<div class="row text-center m-t-10">
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r"><strong>NOM EDUCATEUR</strong>
													<p>{{ Auth::user()->name?? ".."}}</p>
												</div>
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<strong>NOMBRE DE PATIENT</strong>
													<p> {{$data->nombre_patient ?? "..."}}</p>
												</div>
                                                <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
													<strong>SEMAINE</strong>
													<p> {{$data->semaine ?? "..."}}</p>
												</div>
											</div>
											<!-- /.row -->
										
											<!-- .row -->

										</div>
									</div>
								</div>
							</div>

							<div class="white-box">
								
								<div class="cardbox">
									<center>
									    <div class="card-head">
											<header>Ajouter des données</header>
									    </div>
									</center>
									<div class="body">
										<div class="user-btm-box">
										
											<form action="{{route('savedatahebdo')}}" method="post" id="form_sample_1" class="form-horizontal">
												@csrf
                                                <input type="hidden" name="secret" value="{{$id}}">
												<div class="form-group row">
													<label class="control-label col-md-4">Date : 
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
													<label class="control-label col-md-4">Code patient: 
														<span class="required"> * </span>
													</label>
													<div class="col-md-4">
														<input name="code_patient" value="{{old('code_patient')}}" type="text" class="form-control" />
														@if($errors->has('code_patient'))
															<span class="text-danger">{{$errors->first('code_patient')}}</span>
														@endif
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label col-md-4">Type de visite : 
														<span class="required">  </span>
													</label>
					                                 <input type="hidden" value="{{$data->user_id}}" name="email">
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
													<label class="control-label col-md-4">Wilaya: 
														<span class="required"> * </span>
													</label>
													<div class="col-md-4">
														<input name="wilaya" value="{{old('wilaya')}}" type="text" class="form-control" />
														@if($errors->has('wilaya'))
															<span class="text-danger">{{$errors->first('wilaya')}}</span>
														@endif
													</div>
												</div>

                                                <div class="form-group row">
													<label class="control-label col-md-4">Structure: 
														<span class="required"> * </span>
													</label>
													<div class="col-md-4">
														<input name="structure" value="{{old('structure')}}" type="text" class="form-control" />
														@if($errors->has('structure'))
															<span class="text-danger">{{$errors->first('structure')}}</span>
														@endif
													</div>
												</div>

                                                <div class="form-group row">
													<label class="control-label col-md-4">Statut: 
														<span class="required"> * </span>
													</label>
													<div class="col-md-4">
														<input name="statut" value="{{old('statut')}}" type="text" class="form-control" />
														@if($errors->has('statut'))
															<span class="text-danger">{{$errors->first('statut')}}</span>
														@endif
													</div>
												</div>

                                                <div class="form-group row">
													<label class="control-label col-md-4">Equipement: 
														<span class="required"> * </span>
													</label>
													<div class="col-md-4">
														<input name="equipement" value="{{old('equipement')}}" type="text" class="form-control" />
														@if($errors->has('equipement'))
															<span class="text-danger">{{$errors->first('equipement')}}</span>
														@endif
													</div>
												</div>
                                                <div class="form-group row">
													<label class="control-label col-md-4">Effet indésirable: 
														<span class="required"> * </span>
													</label>
													<div class="col-md-4">
														<input name="effet" value="{{old('effet')}}" type="text" class="form-control" />
														@if($errors->has('effet'))
															<span class="text-danger">{{$errors->first('effet')}}</span>
														@endif
													</div>
												</div>
                                                <div class="form-group row">
													<label class="control-label col-md-4">Notification: 
														<span class="required"> * </span>
													</label>
													<div class="col-md-4">
														<input name="notification" value="{{old('notification')}}" placeholder="Oui / Non" type="text" class="form-control" />
														@if($errors->has('notification'))
															<span class="text-danger">{{$errors->first('notification')}}</span>
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
									{{--<div class="row">
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
																			<th>Date</th>
																			<th>Code patient</th>
																			<th>Type de visite</th>
                                                                            <th>Wilaya</th>
                                                                            <th>Structure</th>
                                                                            <th>Statut</th>
                                                                            <th>Equipement</th>
                                                                            <th>Effet indésirable</th>
                                                                            <th>Notification ?</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
                                                                            @foreach ($all_data as $item)
                                                                            <td>{{Auth::user()->name ?? "admin"}}</td>
																			<td>{{$data->id}}</td>
																			<td>{{$data->id}}</td>

                                                                            <td>{{$data->id}}</td>
                                                                            <td>{{$data->id}}</td>
                                                                            <td>{{$data->id}}</td>
                                                                            <td>{{$data->id}}</td>
                                                                            <td>{{$data->id}}</td>
                                                                            <td>{{$data->id}}</td>
                                                                            <td>{{$data->id}}</td>
                                                                            @endforeach
																			
																		</tr>
																	</tbody>
																	
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>--}}
									
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
																			<th>Date</th>
																			<th>Code patient</th>
																			<th>Type de visite</th>
                                                                            <th>Wilaya</th>
                                                                            <th>Structure</th>
                                                                            <th>Statut</th>
                                                                            <th>Equipement</th>
                                                                            <th>Effet indésirable</th>
                                                                            <th>Notification ?</th>
																		</tr>
																	</thead>
																	<tbody>
																		@foreach ($all_data as $data)
																		<tr>
																			<td>{{$loop->iteration}}</td>
																			<td>{{$data->date_visite ?? "..."}}</td>
																			<td>{{$data->code_patient ?? "..."}}</td>
																			<td>{{$data->type_visite ?? "..."}}</td>
																			<td>{{$data->wilaya ?? "..."}}</td>
                                                                            <td>{{$data->structure ?? "..."}}</td>
                                                                            <td>{{$data->statut ?? "..."}}</td>
                                                                            <td>{{$data->equipement ?? "..."}}</td>
                                                                            <td>{{$data->effet ?? "..."}}</td>
                                                                            <td>{{$data->notification ?? "..."}}</td>
																			<td>
																				<a href="/editdonnee/{{$data->id}}" 
																					class="btn btnsss-primary btn-xs">
																					<i class="fa fa-pencil"></i>
																				</a>
																				
																				<a href="/deletedonnee/{{$data->id}}" 
																					class="btn btn-danger btn-xs">
																					<i class="fa fa-trash-o"></i>
																				</a>
																				
																			</td>
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