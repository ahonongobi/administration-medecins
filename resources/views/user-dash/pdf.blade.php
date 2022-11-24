<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche notification {{$membre->code ??'...'}}</title>
    <style type="text/css" media="print">
        @page{
            size: auto;
            margin: 0;
        }
    </style>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="EDUCED" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="HAD" />
    <!-- google font -->
    <link href="../../../../../../fonts.googleapis.com/css6079.css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{asset('assets/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/fonts/font-awesome/v6/css/all.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="{{asset('assets/bundles/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{asset('assets/bundles/material/material.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
    <!-- Theme Styles -->
    <link href="{{asset('assets/css/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/bundles/jquery/jquery.min.js')}}"></script>

    <!-- Data Tables -->
    <!-- full calendar -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <!-- data tables -->
    <link href="{{asset('assets/bundles/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css')}}" rel="stylesheet"
          type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    </style>
</head>
<body>

<center>
                    <div class="col-sm-6">
						<div class="card">
						
                            <div class="sidebar-user">
                                <div class="sidebar-user-pdf">
                                    <img alt="image" src="{{asset('img/respidom.png')}}">
                                </div>
                            </div>
                         <div Align=Left>
							&nbsp;&nbsp;&nbsp;&nbsp;<B>MEDECINS ET INFIRMIERS A DOMICILE</B><br>
							&nbsp;&nbsp;&nbsp;&nbsp;AGR N° 125/MSPRH/DGSSRH/2018 <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Résidence orchidée, Groupe 840, N°02 Les dunes, CHERAGA. <br>
							&nbsp;&nbsp;&nbsp;&nbsp;Centre d'appel : (+213) 0660.63.67.67 &nbsp;&nbsp; (+213) 0550.64.64.64 <br>
							&nbsp;&nbsp;&nbsp;&nbsp;Coordinatrice : (+213) 0561.72.59.19 &nbsp;&nbsp; <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;www.had-respidom.com   &nbsp;&nbsp;&nbsp; &nbsp;   contact@had-respidom.com<br>
                            </div>
							<HR ALIGN=CENTER WIDTH="100"> 
							<P><HR NOSHADE></P>
								
									<div align="right">&nbsp;&nbsp;&nbsp;&nbsp;<B>DATE : </B>{{$membre->date_update ?? "RAS"}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
									
									<div Align=Left>&nbsp;&nbsp;&nbsp;&nbsp;<B>PROGRAMME :</B> {{$membre->programmes ??"RAS"}}</div>
									
									<div Align=Left>&nbsp;&nbsp;&nbsp;&nbsp;<B>EDUCATEUR : </B>{{Auth::user()->name ?? "admin"}}</div>
                                    
									
									<div class="card-head">                             
											<header><B>FICHE NOTIFICATION</B></header>
									</div>
										<div class="card-body ">
										

											<table class="table table-bordered">
														<B>Information Générale</B><br>
												<thead>
													<tr>
														<th><center>Date signature</center></th>
														<th><center>Age</center></th>
														<th><center>Genre</center></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><center>{{$membre->date_signature}}</center></td>
														<td><center>{{$membre->age}} ans</center></td>
														<td><center>{{$membre->sexe}}</center></td>
													</tr>
												</tbody>
												<thead>
													<tr>
														<th><center>Wilaya</center></th>
														<th><center>Code</center></th>
														<th><center>Carte CHIFA</center></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><center>{{$membre->departement}}</center></td>
														<td><center>{{$membre->code}}</center></td>
														<td><center>{{$membre->carte}}</center></td>
													</tr>
												</tbody>
											</table>
										</div>
										
										<div class="card-body ">
										

											<table class="table table-bordered">
														<B>Activité Générale</B><br>
												<thead>
													<tr>
														<th><center>Statut</center></th>
														<th><center>Remise matériel</center></th>
														<th><center>Traitement en association</center></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><center>{{$membre->statut}}</center></td>
														<td><center>{{$membre->equipement}}</center></td>
														<td><center>{{$membre->traitement_en_ass}}</center></td>
													</tr>
												</tbody>
												<thead>
													<tr>
														<th><center>Dose optimale</center></th>
														<th><center>Nombre d'inhalation</center></th>
														<th><center>Séance d'éducation</center></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><center>{{$membre->dose_optimale}}</center></td>
														<td><center>{{$membre->nombre_inhalation}}</center></td>
														<td><center>{{$membre->seance_education}}</center></td>
													</tr>
												</tbody>
											</table>
										</div>
										
										<div class="card-body ">
										

											<table class="table table-bordered">
														<B>Activité du programme </B><br>
												<thead>
													<tr>
														<th><center>Compréhension</center></th>
														<th><center>Maitrise</center></th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><center>{{$membre->comprehension}}</center></td>
														<td><center>{{$membre->maitrise}}</center></td>
														
													</tr>
												</tbody>
												
												
											</table>
										</div>
										<BR><BR><BR><BR><BR><BR><BR><BR>
											<div class="card-body ">
										

											<table class="table table-bordered">
														<B>Historique des visites de : [CODE PATIENT :{{$membre->code}}] </B><br>
												<thead>
													<tr>
														<th><center>N°</center></th>
														<th><center>Type</center></th>
														<th><center>Lieu</center></th>
														<th><center>Date</center></th>
														<th><center>Dose</center></th>
														
													</tr>
												</thead>
												<tbody>
													@foreach($visitehistorique as $visite)
													<tr>
														<td><center>{{$loop->iteration}}</center></td>
														<td><center>{{$visite->type_visite ?? "..."}}</center></td>
														<td><center>{{$visite->lieu_visite ?? "..."}}</center></td>
														<td><center>{{$visite->date_visite ?? "..."}}</center></td>
														<td><center>{{$visite->dose ?? "..."}}</center></td>
														
													</tr>
													@endforeach
												</tbody>
												
												
												
												
											</table>
										</div>
						</div>
						
					</div>
					
								</center>


                            
    <center> 

	
        <div class="printthis">
	       
                <button onclick="window.print()" class="print-button">MA-BET-DZ-0083-1</button>
				<br>
        </div><br><br>
	</center>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function loadOtherPage() {

        $("<iframe>")                             // create a new iframe element
            .hide()                               // make it invisible
            .attr("src", "bulletin-page2.html") // point the iframe to the page you want to print
            .appendTo("body");                    // add iframe to the DOM to cause it to load the page

    }
</script>

</body>
</html>




