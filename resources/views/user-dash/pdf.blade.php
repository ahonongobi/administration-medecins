<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiiche technique de {{$membre->nom ??'...'}}</title>
    <style type="text/css" media="print">
        @page{
            size: auto;
            margin: 0;
        }
    </style>
    <style>

        @media print {
            body{
                -webkit-print-color-adjust: exact;
                color-adjust: exact;

            }
            html, body{
                height: 100%;
                margin: 0;
                padding: 0;
                font-size: small !important;
            }

            .page-break {
                page-break-after: always;
            }

            .page-break-before {
                page-break-before: always;
            }



        }
        @media only print {

            .printthis{
                visibility: hidden;
            }
        }
        /** not print blink page */
        @media print {
            .no-print {
                display: none;
            }
        }



        html, body {
            max-width: 100%;
            overflow-x: hidden;


        }
        *, *:before, *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            color: #384047;
        }

        table {

            width: 90%;
            margin: 5px auto;
        }

        caption {
            font-size: 1.6em;
            font-weight: 400;
            padding: 10px 0;
        }

        thead th {
            font-weight: 400;
            background: #6f42c1;
            color: #FFF;

        }

        tr {
            background: #f4f7f8;
            border-bottom: 1px solid #FFF;
            margin-bottom: 0px;
        }

        tr:nth-child(even) {
            background: #e8eeef;
        }

        th, td {
            text-align: left;
            padding: 10px;
            font-weight: 300;
        }

        tfoot tr {
            background: none;
        }

        tfoot td {
            padding: 10px 2px;
            font-size: 0.8em;
            font-style: italic;
            color: #8a97a0;
        }
        tr>th{
            width: 50% !important;
        }

        .printthis{
            display: flex;
            justify-content: center;
        }
        .logo{
            display: flex;
            justify-content: center;
        }
        button.print-button {
            width: 100px;
            height: 100px;
        }
        span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
            border: solid 4px #333;
        }
        span.print-icon::after {
            border-width: 2px;
        }

        button.print-button {
            position: relative;
            padding: 0;
            border: 0;

            border: none;
            background: transparent;
        }

        span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
            box-sizing: border-box;
            background-color: #fff;
        }

        span.print-icon {
            position: relative;
            display: inline-block;
            padding: 0;
            margin-top: 20%;

            width: 60%;
            height: 35%;
            background: #fff;
            border-radius: 20% 20% 0 0;
        }

        span.print-icon::before {
            content: " ";
            position: absolute;
            bottom: 100%;
            left: 12%;
            right: 12%;
            height: 110%;

            transition: height .2s .15s;
        }

        span.print-icon::after {
            content: " ";
            position: absolute;
            top: 55%;
            left: 12%;
            right: 12%;
            height: 0%;
            background: #fff;
            background-repeat: no-repeat;
            background-size: 70% 90%;
            background-position: center;
            background-image: linear-gradient(
                to top,
                #fff 0, #fff 14%,
                #333 14%, #333 28%,
                #fff 28%, #fff 42%,
                #333 42%, #333 56%,
                #fff 56%, #fff 70%,
                #333 70%, #333 84%,
                #fff 84%, #fff 100%
            );

            transition: height .2s, border-width 0s .2s, width 0s .2s;
        }

        button.print-button:hover {
            cursor: pointer;
        }

        button.print-button:hover .print-icon::before {
            height:0px;
            transition: height .2s;
        }
        button.print-button:hover .print-icon::after {
            height:120%;
            transition: height .2s .15s, border-width 0s .16s;
        }

    </style>
</head>
<body>

<div class="header">




</div>



<div id="bg-image-fluid" class="table">
<!-- make table with two columns -->
    <!-- image logo here  -->
    <div class="logo">
        <div class="text-center">
            <img alt="logo" width="100px" height="100px" src="https://chart.googleapis.com/chart?cht=qr&chl=Id+Membre:{{$membre->membre_id}}&chs=160x160&chld=L|0"
                 class="qr-code img-thumbnail img-responsive">
        </div>
        <img src="{{asset('clinique.jpg')}}" alt="logo" width="100px" height="100px">
    </div>

    <!-- table with two row libelle and value -->

    <table>


        <caption> Information fiche</caption>
        <thead>
        <tr>
            <th scope="col">Libéllé</th>
            <th scope="col">Valeurs</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="3"></td>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <th scope="row">ID Membre</th>
            <td>{{$membre->membre_id ?? 'RAS'}}</td>

        </tr>
        <tr>
            <th scope="row">Nom et Prénoms </th>
            <td>{{$membre->nom ?? 'RAS'}}</td>

        </tr>

        <tr>
            <th scope="row">Date de naissance</th>
            <td>{{$membre->birthdate ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{$membre->email ?? 'RAS'}}</td>

        </tr>

        <tr>
            <th scope="row">Sexe</th>
            <td>{{$membre->sexe}}</td>

        </tr>
        <tr>
            <th scope="row">Âge</th>
            <td>{{$membre->age}}</td>

        </tr>
        <tr>
            <th scope="row">Adresse</th>
            <td>{{$membre->addresse ?? 'RAS'}}</td>

        </tr>
        <tr>
            <th scope="row">Département</th>
            <td>{{$membre->departement ?? 'RAS'}}</td>

        </tr>
        <tr>
            <th scope="row">Téléphone 1</th>
            <td>{{$membre->tel ?? "RAS"}}</td>

        </tr>

        <tr>
            <th scope="row">Téléphone 2</th>
            <td>{{$membre->tel2 ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">Etablissement 1</th>
            <td>{{$membre->etablissement ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">Carte assurance</th>
            <td>{{$membre->caret ?? "RAS"}}</td>

        </tr>

        <tr>
            <th scope="row">Service</th>
            <td>{{$membre->service ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">Nom du responsible</th>
            <td>{{$membre->nom_responsable ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">Valable : oui - non</th>
            <td>{{$membre->valable ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">Arret : oui - non</th>
            <td>{{$membre->arret ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">Disponibilité oui- non</th>
            <td>{{$membre->disponibile ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">Équipement atribué</th>
            <td>{{$membre->equipement ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">Effet secondaire :</th>
            <td>{{$membre->effet ?? 'RAS'}}</td>

        </tr>
        <tr>
            <th scope="row">Mise a jour le :
            </th>
            <td>{{$membre->date_update ?? "RAS"}}</td>

        </tr>
        <tr>
            <th scope="row">Prochaine visite : </th>
            <td>{{$membre->visite ??"RAS"}}</td>
        </tr>
        </tbody>
    </table>

    <!-- table with two row like Nom            value  -->




    </div>

    <div class="printthis">
        <button onclick="window.print()" class="print-button"><span class="print-icon"></span></button>

    </div>

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
