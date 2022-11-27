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
						<div class="col-md-3 col-xs-12">
							<div class="white-box">
								
								<div class="cardbox">
									<center>
									    <div class="card-head">
											<header>Information du Plan de tournée</header>
									    </div>
									</center>
									<div class="body">
										<div class="user-btm-box">
										
										<div class="row text-center m-t-10">
												
											</div>
											
											<div class="row text-center m-t-10">
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
													<strong>Code plan de tournee:</strong>
													<p>{{$data->code}}</p>
												</div>
                                                <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
													<strong>MOIS:</strong>
													<p>{{$data->mois ??'##'}}</p>
												</div>
												<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12 b-r">
													<strong>Date:</strong>
													<p>{{date('d/m/Y', strtotime($data->date))}}</p>
												</div>
											</div>
											
											
											
											<!-- .row -->
											
											<!-- /.row -->
										
											<!-- .row -->
											
										</div>
									</div>
								</div>
							</div>

							<div class="white-box">
								
								<div class="cardboxx">
									<center>
									    <div class="card-head">
											<header>Plan de tournée</header>
									    </div>
									</center>
									<form method="POST" action="{{URL('addplanpost')}}">
										@csrf 
										<div class="form-group row mt-3">
											<label class="control-label col-md-4">Date:
												<span class="required"> * </span>
											</label>
											<div class="col-md-6">
												<input type="date" value="{{old('date')}}" name="date" data-required="1"
													   class="form-control" />
												@if($errors->has('date'))
													<span class="text-danger">{{$errors->first('date')}}</span>
												@endif
											</div>
			
			
										</div>

										<div class="form-group row">
											<label class="control-label col-md-4">Mois:
												<span class="required"> * </span>
											</label>
											<div class="col-md-6">
												<input type="text" placeholder="Ex: Janvier" value="{{old('mois')}}" name="mois" data-required="1"
													   class="form-control" />
												@if($errors->has('mois'))
													<span class="text-danger">{{$errors->first('mois')}}</span>
												@endif
											</div>
			
			
										</div>

										<div class="form-group row">
											<label class="control-label col-md-4">Type d'activité:
												<span class="required"> </span>
											</label>
											<div class="col-md-6">
												<input type="text" value="{{old('type_activite')}}" name="type_activite" data-required="1"
													   class="form-control" />
												@if($errors->has('type_activite'))
													<span class="text-danger">{{$errors->first('type_activite')}}</span>
												@endif
											</div>
			
			
										</div>

										<div class="form-group row">
											<label class="control-label col-md-4">Secteur:
												<span class="required"> * </span>
											</label>
											<div class="col-md-6">
												<input type="text" value="{{old('secteur')}}" name="secteur" data-required="1"
													   class="form-control" />
												@if($errors->has('secteur'))
													<span class="text-danger">{{$errors->first('secteur')}}</span>
												@endif
											</div>
			
			
										</div>
										<div class="form-group row">
											<label class="control-label col-md-4">Services:
												<span class="required"> * </span>
											</label>
											<div class="col-md-6">
												<input type="text" value="{{old('service')}}" name="service" data-required="1"
													   class="form-control" />
												@if($errors->has('service'))
													<span class="text-danger">{{$errors->first('service')}}</span>
												@endif
											</div>
			
			
										</div>

										<div class="form-group row">
											<label class="control-label col-md-4">Medecin:
												<span class="required"> * </span>
											</label>
											<div class="col-md-6">
												<input type="text" value="{{old('medecin')}}" name="medecin" data-required="1"
													   class="form-control" />
												@if($errors->has('medecin'))
													<span class="text-danger">{{$errors->first('medecin')}}</span>
												@endif
											</div>
			
			
										</div>
			
										<div class="form-group row">
											<label class="control-label col-md-4">Programme:
												<span class="required"> * </span>
											</label>
											<div class="col-md-6">
												<input type="text" value="{{old('programme')}}" name="programme" data-required="1"
													   class="form-control" />
												@if($errors->has('programme'))
													<span class="text-danger">{{$errors->first('programme')}}</span>
												@endif
											</div>
			
			
										</div>
										<div class="form-group row">
											<label class="control-label col-md-4">Objectif de deplacement:
												<span class="required"> * </span>
											</label>
											<div class="col-md-6">
												<input type="text" value="{{old('objectif')}}" name="objectif" data-required="1"
													   class="form-control" />
												@if($errors->has('objectif'))
													<span class="text-danger">{{$errors->first('objectif')}}</span>
												@endif
											</div>
			
			
										</div>

										<div class="form-group row">
											<label class="control-label col-md-4">Observation:
												<span class="required"> * </span>
											</label>
											<div class="col-md-6">
												<input type="text" value="{{old('observation')}}" name="observation" data-required="1"
													   class="form-control" />
												@if($errors->has('observation'))
													<span class="text-danger">{{$errors->first('observation')}}</span>
												@endif
											</div>
			
			
										</div>
										<div class="form-group">
											<div class="offset-md-3 col-md-9">
												<button type="submit" class="btn btn-info m-r-20">Créer</button>
												<a href="/addtournee" class="btn btn-default">Annuler</a>
											</div>
										</div>
									</form>
								</div>
							</div>
							

							
						</div>
						<div class="col-md-9 col-xs-12">
							<div class="cardbox">
								<div class="body">
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-12">
													<div class="card">
														<div class="card-head">
															<header>Plan de tournée</header>
														</div>
														<div class="card-body ">
															<div class="table-responsive">
																<table class="table table-bordered">
														
                                                                    <thead>
                                                                        <tr>
                                                                            <th><center>DATE</center></th>
                                                                            <th><center>TYPE ACTIVITÉ</center></th>
                                                                            <th><center>SECTEUR</center></th>
                                                                            <th><center>SERVICE</center></th>
                                                                            <th><center>MEDECIN</center></th>
                    
                                                                            <th><center>PROGRAMME</center></th>
                                                                            <th><center>OBJECTIF</center></th>
                                                                            <th><center>OBSERVATION</center></th>
                                                                            
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($tournees as $item)
                                                                        <tr>
                                                                            <td><center>{{$item->date}}</center></td>
                                                                            <td><center>{{$item->type_activite ?? "..."}}</center></td>
                                                                            <td><center>{{$item->secteur ?? "..."}}</center></td>
                                                                            <td><center>{{$item->service ?? "..."}}</center></td>
                                                                            <td><center>{{$item->medecin ?? "..."}}</center></td>
                    
                                                                            <td><center>{{$item->programme ?? "..."}}</center></td>
                                                                            <td><center>{{$item->objectif ?? "..."}}</center></td>
                                                                            <td><center>{{$item->observation ?? "..."}}</center></td>
                                                                            <td class="valigntop d-flex">

																				
																				<a href="{{url('edittournee/'.$item->id)}}" class="tblEditBtn">
																					<i class="fa fa-pencil"></i>
																				</a>
																				<a onclick="return confirm('êtes-vous sur de cette action ?')" href="{{url('deletetournee/'.$item->id)}}" class="tblDelBtn">
																					<i class="fa fa-trash-o"></i>
																				</a>
											
																				{{--<a href="/print-pdf-tourne/{{$item->id}}"target="_blank">
																					<i class="fa fa-file-text-o"></i> </a>--}}
											
																				<!-- make edit, delete, and print pdf icon  in flex  -->
											
											
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