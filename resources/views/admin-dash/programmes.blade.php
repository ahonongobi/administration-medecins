@extends('_layouts._index')
@section('content')
    <!-- alert success message if session has success -->
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ Session::get('success') }}

        </div>
    @endif

    <div class="col-md-6 col-sm-6 col-xs-6 mb-3">
        <div class="btn-group">
            <form class="d-flex justify-content-center" method="post" action="{{url('addprogrammes')}}">
                @csrf
                <input required type="text" name="programmes" placeholder="nom du programme..." class="form-control">
                <button type="submit" id="addRow"
                        class="btn btn-info">
                    Ajouter
                </button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table
            class="table table-striped table-bordered table-hover table-checkable order-column"
            id="example4">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>Nom du programmes</th>

                <th>Actions </th>
            </tr>
            </thead>
            <tbody>
            @foreach($programmes as $item)
                <tr class="odd gradeX">
                    <td>
                        {{$item->id}}
                    </td>
                    <td> {{$item->title}} </td>
                    <td class="center">
                        <div class="btn-group">
                            <button
                                class="btn btn-xs btn-warning btn-circle dropdown-toggle center no-margin"
                                type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"> Actions
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-left" role="menu">
                                <li>
                                    <a href="/deleteprogrammes/{{$item->id}}"><i class="fa fa-trash-o"></i>
                                        Supprimer
                                    </a>
                                </li>


                            </ul>
                        </div>
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
    <!-- end page content -->
@endsection
