

@extends('_layouts._indexuser')
<style>
    .accordion .accordion-item {
  border-bottom: 1px solid #e5e5e5;
}
.accordion .accordion-item button[aria-expanded=true] {
  border-bottom: 1px solid #03b5d2;
}
.accordion button {
  position: relative;
  display: block;
  text-align: left;
  width: 100%;
  padding: 1em 0;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border: none;
  background: none;
  outline: none;
}
.accordion button:hover, .accordion button:focus {
  cursor: pointer;
  color: #03b5d2;
}
.accordion button:hover::after, .accordion button:focus::after {
  cursor: pointer;
  color: #03b5d2;
  border: 1px solid #03b5d2;
}
.accordion button .accordion-title {
  padding: 1em 1.5em 1em 0;
}
.accordion button .icon {
  display: inline-block;
  position: absolute;
  top: 18px;
  right: 0;
  width: 22px;
  height: 22px;
  border: 1px solid;
  border-radius: 22px;
  margin-right: 2%;
}
.accordion button .icon::before {
  display: block;
  position: absolute;
  content: "";
  top: 9px;
  left: 5px;
  width: 10px;
  height: 2px;
  background: currentColor;
}
.accordion button .icon::after {
  display: block;
  position: absolute;
  content: "";
  top: 5px;
  left: 9px;
  width: 2px;
  height: 10px;
  background: currentColor;
}
.accordion button[aria-expanded=true] {
  color: #03b5d2;
}
.accordion button[aria-expanded=true] .icon::after {
  width: 0;
}
.accordion button[aria-expanded=true] + .accordion-content {
  opacity: 1;
  max-height: 9em;
  transition: all 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transition: opacity 200ms linear, max-height 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content p {
  font-size: 1rem;
  font-weight: 300;
  margin: 2em 0;
}
</style>
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
        
        
        
        
    </div>	
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <header>Faq</header>
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
                                <a href="{{url('addfaq')}}" id="addRow1" class="btn btn-info">
                                    Ajouter une FAQ<i class="fa fa-plus"></i>
                                </a>
                            </div><br><br>
                            

                        </div>
                        <!-- start !-->
                        <div style="" class="container">
                            <h2>Foires Aux Questions</h2>
                            <div class="accordion">
                             @foreach($data_faq as $faq)
                              <div class="accordion-item">
                                <button id="accordion-button-{{$faq->id}}" aria-expanded="false"><span style="margin-left: 2%" class="accordion-title">
                                    {{$faq->question}}
                                    <!-- trash -->
                                    <a  href="{{url('deletefaq/'.$faq->id)}}" class="btn btn-danger btn-sm" style="float: right; margin-right: 2%; margin-top: -2%"><i class="fa fa-trash"></i></a>
                                </span><span class="icon" aria-hidden="true"></span></button>
                                <div style="margin-left: 2%" class="accordion-content">
                                @php 
                                //decode the html 
                                $html = htmlSpecialChars_decode($faq->reponse);
                                //remove the html tags
                                
                                //remove the spaces
                                
                                echo $html;
                                @endphp
                                
                                </div>
                                
                              </div>
                              <!--make delete button-->
                                

                                @endforeach
                             
                              
                            </div>
                          </div>
                          <!-- end of container -->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- end page content -->
    <script>
        const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>
@endsection
