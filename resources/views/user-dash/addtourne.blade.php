@extends('_layouts._indexuser')
@section('content')
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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                     <header>
							     <i class="fa fa-undo" aria-hidden="true"></i>
								 <a href="javascript:history.back()">Page précédente</a>
								 <i class="fa fa-angle-right"></i>
                                 Plan de tournée
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
                                {{--<a href="{{url('addplantournee')}}" id="addRow1" class="btn btn-info">
                                    Ajouter un plant de tournée<i class="fa fa-plus"></i>
                                </a>--}}
                                
                                <a data-bs-toggle="modal" data-bs-target="#exampleModaltournee" id="addRow"
                                    class="btn btn-info btn-circle">
                                    Ajouter un plant de tournée <i class="fa fa-plus"></i>
                             </a>
                            </div><br><br>
                            <!-- any error message will show here -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

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
                            <th>MOIS  </th>
                            
                            
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data_tournee_only as $item)
                            <tr class="odd gradeX">
                                <td>
                                    <!-- if loop is less than 10 add 00, if between 10 and 99 add 0 and son on -->
                                    @if($loop->iteration < 10)
                                        00{{$loop->iteration}}
                                    @elseif($loop->iteration < 100)
                                        0{{$loop->iteration}}
                                    @else
                                        {{$loop->iteration}}
                                    @endif
                                    
                                </td>
                        
                                <td> 
                                     {{date('d/m/Y', strtotime($item->date))}}
                                    
                                </td>
                                <td> 
                                    {{$item->mois}}
                                   
                               </td>
                              
                                <td class="valigntop">

                                    <a href="{{url('voir-tournee/'.$item->id)}}" class="tblEditBtn">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{url('edittourneeonly/'.$item->id)}}" class="tblEditBtn d-none">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a onclick="return confirm('êtes-vous sur de cette action ?')" href="{{url('deletetourneeonly/'.$item->id)}}" class="tblDelBtn">
                                        <i class="fa fa-trash-o"></i>
                                    </a>

                                    <a href="/print-pdf-tourne/{{$item->id}}"target="_blank">
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

    <div class="modal fade" id="exampleModaltournee" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="{{url('addTourneonly')}}">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Ajouter un plan de tournee</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="simpleFormEmail">Date</label>
                        <input name="date" required type="date" class="form-control" id="simpleFormEmail"
                               placeholder="12/11/2022">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Code de plan de tournee</label>
                        <input name="code" required type="text" class="form-control" id="simpleFormEmail"
                               placeholder="122022p">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Mois</label>
                        <input required name="mois" type="text" class="form-control" id="simpleFormEmail"
                               placeholder="Decembre 2022">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Creer</button>
                </div>
            </div>
        </div>
    </form>
</div>

    <!-- end page content -->
@endsection
