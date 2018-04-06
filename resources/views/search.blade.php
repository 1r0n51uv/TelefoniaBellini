@extends('layouts.master')

@section('content')



  <div class="main main-raised">


    <div class="section section-tabs" style="background-color: #EEEEEE">
      <div class="container">

        <div class="row">



          <!-- search box container starts  -->
          <div class="search">
            <h3 class="text-center title-color">Cerca all'interno del nostro archivio</h3>
            <p>&nbsp;</p>
            <div class="row">
              <div class="col-md-4 col-md-offset-5 col-sm-offset-5 col-xs-offset-3">
                <div class="input-group">
                  <input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Cerca qualcosa">
                </div>
              </div>
            </div>   
          </div>  
          <!-- search box container ends  -->
          <div id="txtHint" class="title-color" style="text-align:center;" ></div>
          
        </div>


      </div>
    </div>

  </div>

</div>

<script>
  $(document).ready(function(){
    $("#search").keyup(function(){
      var str=  $("#search").val();
      if(str == "") {
        $( "#txtHint" ).html("<b>I risultati verrano mostrati qui...</b>"); 
      }else {
        $.get( "{{ url('/searcher?id=') }}"+str, function( data ) {
          $( "#txtHint" ).html( data );  
        });
      }
    });  
  }); 
</script>


@endsection



