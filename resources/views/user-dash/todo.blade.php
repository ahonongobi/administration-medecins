@extends('_layouts._indexuser')
@section('content')
    <div class="row">
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
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card card-box">
                    <div class="card-head">
                
<header>
							     <i class="fa fa-undo" aria-hidden="true"></i>
								 <a href="javascript:history.back()">Page précédente</a>
								 <i class="fa fa-angle-right"></i>
                              Ajouter une tâches
					</header>  

                    </div>
                    <div class="card-body ">
                        <!---form start---->
                        <form method="post" action="{{ route('todo.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tâche</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer tâche" name="todo">
                                @if ($errors->all())
                                    <span class="text-danger">{{$errors->first("todo")}}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Liste des tâches</header>
                        <button id="panel-button"
                                class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            data-mdl-for="panel-button">

                            <a href="{{url('alltodo/delete/')}}" class="mdl-menu__item"><i class="material-icons">delete</i>Supprimer tous
                            </a>

                        </ul>
                    </div>
                    <div class="card-body ">
                        <ul class="to-do-list ui-sortable" id="sortable-todo">
                            @foreach($todos as $item)
                                @if($item->completed==0)
                                <li class="clearfix">
                                    <a href="/todo/completed/{{$item->id}}" class="todo-check pull-left">
                                        <i style="font-size: 10px" class="fa fa-square-oe"></i>
                                        <label for="todo-check2"></label>
                                    </a>
                                    <p class="todo-title">{{$item->title}}</p>
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="/delete/todo/{{$item->id}}" class="todo-removes"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                             @elseif($item->completed==1)
                                <li class="clearfix">
                                    <a class="todo-check pull-left">
                                        <input checked type="checkbox" value="None" id="todo-check{{$item->id}}">
                                        <label for="todo-check1"></label>
                                    </a>
                                    <p class="todo-title line-through">{{$item->title}}</p>
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="/delete/todo/{{$item->id}}" class="todo-removes"><i class="fa fa-times"></i></a>
                                        <a href="/undo/todo/{{$item->id}}" class="todo-removes"><i class="fa fa-undo"></i></a>
                                    </div>
                                </li>
                             @endif

                            @endforeach




                        </ul>
                    </div>
                </div>
            </div>

    </div>
    <script>
        //if checkbox is checked go to url


    </script>
    <!-- end page content -->
@endsection
