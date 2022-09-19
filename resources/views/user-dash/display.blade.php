@extends('_layouts._indexuser')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <header>PROGRAMME {{$keys ?? ""}}</header>
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
                                <a href="{{url('addmembres')}}" id="addRow1" class="btn btn-info">
                                    Ajouter un membre<i class="fa fa-plus"></i>
                                </a>
                            </div>
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
                            <th> Nom et Prénom </th>
                         
                            <th> Sexe </th>
                            <th> Âge </th>
                            <th> Addresse  </th>
                            <th> Téléphone </th>
                            <th> Departement </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($membres as $item)
                            <tr class="odd gradeX">
                                <td>
                                    {{$item->membre_id }}
                                </td>
                                <td> {{$item->nom }} </td>
                              
                                <td><span class=""> {{$item->sexe }} </span></td>
                                <td> {{$item->age}}ans </td>
                                <td> {{$item->addresse }} </td>
                                <td> {{$item->tel}} </td>
                                <td> {{$item->departement}} </td>
                                <td class="valigntop">

                                    <a href="{{url('voir/'.$item->id)}}" class="tblEditBtn">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{url('editmembres/'.$item->id)}}" class="tblEditBtn">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a onclick="return confirm('êtes-vous sur de cette action ?')" href="{{url('deletemembres/'.$item->id)}}" class="tblDelBtn">
                                        <i class="fa fa-trash-o"></i>
                                    </a>

                                    <a href="/print-pdf/{{$item->id}}">
                                        <i class="fa fa-file-pdf-o"></i> </a>

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
