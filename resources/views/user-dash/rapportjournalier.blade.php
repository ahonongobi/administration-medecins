@extends('_layouts._indexuser')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                     <header>
							     <i class="fa fa-undo" aria-hidden="true"></i>
								 <a href="javascript:history.back()">Page précédente</a>
								 <i class="fa fa-angle-right"></i>
                                 Liste des visites
					</header>
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
                                <a href="{{url('addrapportjournalier')}}" id="addRow1" class="btn btn-info">
                                    Ajouter un rapport journalier<i class="fa fa-plus"></i>
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
                            <th>DATE  </th>
                            
                            
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data_journalier as $item)
                            <tr class="odd gradeX">
                                <td>
                                    {{$item->id}}
                                </td>
                        
                                <td> 
                                     {{date('d/m/Y', strtotime($item->creted_at))}}
                                    
                                </td>
                               
                                <td class="valigntop">

                                    <a href="{{url('voir/'.$item->id)}}" class="tblEditBtn">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{url('editvisites/'.$item->id)}}" class="tblEditBtn">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a onclick="return confirm('êtes-vous sur de cette action ?')" href="{{url('deletevisites/'.$item->id)}}" class="tblDelBtn">
                                        <i class="fa fa-trash-o"></i>
                                    </a>

                                    <a href="/print-pdf-2/{{$item->id}}"target="_blank">
                                        <i class="fa fa-file-text-o"></i> </a>

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
