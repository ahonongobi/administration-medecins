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
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" id="addRow"
               class="btn btn-info btn-circle">
                Ajouter <i class="fa fa-plus"></i>
            </a>
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
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>E-mail</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Programme</th>
                <th>Actions </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $item)
                <tr class="odd gradeX">
                    <td>
                        {{$item->id}}
                    </td>
                    <td> {{$item->nom}} </td>
                    <td>
                        <a href="mailto:{{$item->email}}">{{$item->prenom}} </a>
                    </td>
                    <td class="center"> {{$item->date_naissance }} </td>
                    <td class="center"> {{$item->email}} </td>
                    <td class="center"> {{$item->tel}} </td>
                    <td class="center"> {{$item-> addresse }} </td>
                    <td class="center"> {{$item-> programmes }} </td>

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
                                    <a href="/delete/{{$item->id}}"><i class="fa fa-trash-o"></i>
                                        Supprimer </a>
                                </li>
                                <li>
                                    <a href="/edit/{{$item->id}}"><i class="fa fa-edit"></i>
                                        Editer </a>
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
