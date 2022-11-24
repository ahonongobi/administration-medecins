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
                                <a href="{{url('contacts')}}" id="addRow1" class="btn btn-info">
                                    Ajouter un contact<i class="fa fa-plus"></i>
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
                             
							 <th> Statut </th>
							 <th> Nom et Prénoms </th>
							 <th> Établissement  </th>
							 <th> Téléphone </th>
                             <th> Email </th>
                            <th>Date de création</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $item)
                            <tr class="odd gradeX">

                               
								<td> {{$item->statut}} </td>
								<td> {{$item->name}} </td>
								<td> {{$item->etablissement }} </td>
								<td><span class=""> {{$item->tel }} </span></td>
                                <td><a href="mailto:{{$item->email }}">{{$item->email }} </a></td>
                                <td>
                                    <!--convert to thuis format ;-->
                                    {{date('d-m-Y', strtotime($item->created_at))}}
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
