<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche notification {{ $membre->code ?? '...' }}</title>
    <style type="text/css" media="print">
        @page {
            size: auto;
            margin: 0;
        }
    </style>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="EDUCED" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="HAD" />
    <!-- google font -->
    <link href="../../../../../../fonts.googleapis.com/css6079.css?family=Poppins:300,400,500,600,700" rel="stylesheet"
        type="text/css" />
    <!-- icons -->
    <link href="{{ asset('assets/fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/fonts/font-awesome/v6/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="{{ asset('assets/bundles/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/material/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/material_style.css') }}">
    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/theme_style.css') }}" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{ asset('assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme-color.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/bundles/jquery/jquery.min.js') }}"></script>

    <!-- Data Tables -->
    <!-- full calendar -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"
        integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <!-- data tables -->
    <link href="{{ asset('assets/bundles/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    </style>
</head>

<body>

    <center>
        <div class="col-sm-6">
            <div class="card">



                <HR ALIGN=CENTER WIDTH="100">
                <P>
                    <HR NOSHADE>
                </P>

                <div align="right">&nbsp;&nbsp;&nbsp;&nbsp;
                    <table style="width: 40%" class="table table-striped table-hover">
                        <tr>
                            <td><B>Code rapport :</B></td>
                            <td>
                                {{$data->code_rapport ?? 'RAS'}}
                            </td>
                        </tr>

                        <tr>
                            <td><B>NOM PATIENT :</B></td>
                            <td>
                                {{$data->psdmp_region ?? 'RAS'}}
                            </td>
                        </tr>
                        <tr>
                            <td><B>SEMAINES :</B></td>
                            <td>
                                {{$data->semaine ?? 'RAS'}}
                            </td>
                        </tr>
                        
                    </table>
                    </div>

                {{-- <div Align=Left>&nbsp;&nbsp;&nbsp;&nbsp;<B>PROGRAMME :</B> {{$membre->programmes ??"RAS"}}</div> --}}

                <div Align=Left>
                 {{-- make table like this: 
                    PSDMP: PSMSP
                    PSDMP2: PSMSP3
                    --}}
                    <h5>RAPPORT D'ACTIVITÉ HEBDOMADAIRE</h5>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <table style="width: 40%" class="table table-striped table-hover">
                        <tr>
                            <td><B>PSDMP :</B></td>
                            <td>
                                {{$data->programme->psdmp ?? 'RAS'}}
                            </td>
                        </tr>

                        <tr>
                            <td><B>PSDMP REGION :</B></td>
                            <td>
                                {{$data->psdmp_region ?? 'RAS'}}
                            </td>
                        </tr>
                        <tr>
                            <td><B>DATE DU RAPPORT :</B></td>
                            <td>
                                {{$data->date_rapport ?? 'RAS'}}
                            </td>
                        </tr>
                        <tr>
                            <td><B>NOM EDUCATEUR :</B></td>
                            <td>
                               {{Auth::user()->name}}
                            </td>
                        </tr>
                    </table>

                </div>


                <div class="card-head">
                    <header><B>RAPPORT JOURNALIER</B></header>
                </div>
                <div class="card-body ">


                    <table class="table table-striped custom-table table-hover">
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
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->date_visite ?? '...' }}</td>
                                    <td>{{ $data->code_patient ?? '...' }}</td>
                                    <td>{{ $data->type_visite ?? '...' }}</td>
                                    <td>{{ $data->wilaya ?? '...' }}</td>
                                    <td>{{ $data->structure ?? '...' }}</td>
                                    <td>{{ $data->statut ?? '...' }}</td>
                                    <td>{{ $data->equipement ?? '...' }}</td>
                                    <td>{{ $data->effet ?? '...' }}</td>
                                    <td>{{ $data->notification ?? '...' }}</td>
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
            <span onclick="window.print()">
                <i style="font-size: 30px" class="fa fa-print"></i>
            </span>
            <button onclick="window.print()" class="print-button d-none">MA-BET-DZ-0083-1</button>
            <br>
        </div><br><br>
    </center>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function loadOtherPage() {

            $("<iframe>") // create a new iframe element
                .hide() // make it invisible
                .attr("src", "bulletin-page2.html") // point the iframe to the page you want to print
                .appendTo("body"); // add iframe to the DOM to cause it to load the page

        }
    </script>

</body>

</html>
