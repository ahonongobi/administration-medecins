@extends('_layouts._indexuser')
@section('content')

<div style="margin-bottom: 8%" class="container mt-3">
    @if(Session::has('success'))
    <div class="alert alert-success">
        
   {{Session::get('success')}}

       
    </div>
    @endif
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebars">
            <div class="card">
                <div class="card-body no-padding height-9">
                    <div class="row">
                        <div class="profile-userpic">
                            @if(Auth::user()->photo=='default.png')
                            <img src="img/dp.jpg" class="img-responsive" alt=""> </div>
                            @else
                            <img src="{{asset('uploads/'.Auth::user()->photo)}}" class="img-responsive" alt=""> </div>
                            @endif
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">{{Auth::user()->name ?? 'undefined'}} </div>
                        <div class="profile-usertitle-job"> {{Auth::user()->email ?? 'undefined'}} </div>
                    </div>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>BetaNurse</b> <a class="pull-right">{{$yourBetanurse ?? 0}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>VentaPlus</b> <a class="pull-right">{{$yourventaplus ?? 0}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>OncoPlus</b> <a class="pull-right">{{$youroncoplus ?? 0}}</a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons d-flex justify-content-center">
                        <button type="button" class="btn btn-circle green btn-sm d-none">Modifier mes informations</button>
                        <form action="{{URL('uploadphoto')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input required type="file" name="file" id="">
                            <button type="file" class="btn btn-circle red btn-sm">Modifier photo de profile</button>
                        </form>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                </div>
            </div>
            
            
            
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
</div>
@stop