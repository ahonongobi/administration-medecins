@extends('_layouts._indexuser')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <header>Mes Contacts</header>
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
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <table
                        class="table table-striped table-bordered table-hover table-checkable order-column"
                        style="width: 100%" id="example4">
                        <thead>
                        <tr>

                             <th> ID </th>
                            <th> Email </th>
                            <th> Téléphone </th>
                            <th> Statut </th>
                            <th> Établissement  </th>
                            <th> Nom et Prénoms </th>
                            <th>Date de création</th>

                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $item)
                            <tr class="odd gradeX">

                                <td>
                                    {{$item->id }}
                                </td>
                                <td>
                                    <a href="mailto:{{$item->email }}">{{$item->email }} </a>
                                </td>
                                <td>
                                    <span class=""> {{$item->tel }} </span>
                                </td>
                                <td> {{$item->statut}}ans </td>
                                <td> {{$item->etablissement }} </td>
                                <td> {{$item->name}} </td>
                                <td>
                                    <!--convert to thuis format ;-->
                                    {{date('d-m-Y', strtotime($item->created_at))}}


                                </td>
                                <td class="valigntop">

                                    <a onclick="return confirm('êtes-vous sur de cette action ?')" href="{{url('deletecontact/'.$item->id)}}" class="tblDelBtn">
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
