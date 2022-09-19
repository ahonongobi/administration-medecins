@extends('_layouts._indexuser')
@section('content')

    <div style="margin-top: 5%" class="row">
           <h3>Choisir un programme</h3>
            <a href="chooseprogrames/1" class="col-xl-4 col-md-6 col-12">
                <div class="info-box bg-orange">
                    <span class="info-box-icon push-bottom"><img src=".../img/brain.png"> </span>
					
                    <div class="info-box-content">
                        <span class="info-box-text">Programme</span>
                        <span class="info-box-number">
                          BetaNurse
                    </span>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>

        <!-- /.col -->
        <a href="chooseprogrames/2" class="col-xl-4 col-md-6 col-12">
            <div class="info-box bg-purple">
									<span class="info-box-icon push-bottom"><i
                                            class="material-icons">book</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Programme</span>
                    <span class="info-box-number">02</span>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>
        <!-- /.col -->
        <a href="chooseprogrames/3" class="col-xl-4 col-md-6 col-12">
            <div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i
                                            class="material-icons">book</i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Programme</span>
                    <span class="info-box-number">
                       03
                                    </span>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>
    </div>

    <!-- end page content -->
@endsection
