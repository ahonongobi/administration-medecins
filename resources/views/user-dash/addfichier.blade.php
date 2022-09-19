@extends('_layouts._indexuser')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <header>Téléchargement</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="btn-group">
                                <a href="{{url('addfile')}}" id="addRow1" class="btn btn-info">
                                    Ajouter une fichier<i class="fa fa-plus"></i>
                                </a>
                            </div><br><br>
                            

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">

                        </div>
                    </div>
                    <table
                        class="table table-striped table-bordered table-hover table-checkable order-column"
                        style="width: 100%" id="example4">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>NOM DU FICHIER  </th>
                            
                            <th> DATE </th>
                            <th> TELECHARGER </th>
                            
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data_fichier as $item)
                            <tr class="odd gradeX">
                                <td>
                                    {{$item->id}}
                                </td>
                                <td> {{$item->nom_fichier }} </td>
                                <td> {{$item->date_fichier }} </td>
                                
                                <td> 
                                    <a href="{{url('storage/uploads/'.$item->fichier)}}" download class="">
                                        <i class="fa fa-paperclip"></i>
                                    </a>
                                </td>
                               
                                <td class="valigntop">

                                   
                                    
                                    <a onclick="return confirm('êtes-vous sur de cette action ?')" href="{{url('deletefichier/'.$item->id)}}" class="tblDelBtn">
                                        <i class="fa fa-trash-o"></i>
                                    </a>

                                   

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

    <!-- end page content -->
@endsection
