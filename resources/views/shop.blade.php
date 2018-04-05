@extends('layouts.master')

@section('content')



<div class="section">
        <div class="container">
            <p><button onclick="sortTable()">Sort</button></p>
                <div class="row">
                        
                    <div class="col-md-3 col-sm-3 col-xs-3" style="border: 1px red solid">

                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <table class="table" id="myTable">
                            
                            <tbody>
                              <tr>
                                <td> 
                                        <div class="card">
                                                <img class="card-img-top" src="..." alt="Card image cap">
                                                <div class="card-body">
                                                  <p id="price" class="card-text">1</p>
                                                </div>
                                             </div>
                                </td>
                                <td>
                                        <div class="card">
                                                <img class="card-img-top" src="..." alt="Card image cap">
                                                <div class="card-body">
                                                  <p id="price" class="card-text">2</p>
                                                </div>
                                             </div>
                                </td>
                                
                                <td>
                                    <div class="card">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                          <p id="price" class="card-text">3</p>
                                        </div>
                                     </div>
                                    </td>
                              </tr>

                              <tr>
                                    <td> 
                                            <div class="card">
                                                    <img class="card-img-top" src="..." alt="Card image cap">
                                                    <div class="card-body">
                                                      <p  id="price" class="card-text">4</p>
                                                    </div>
                                                 </div>
                                    </td>
                                    <td>
                                            <div class="card">
                                                    <img class="card-img-top" src="..." alt="Card image cap">
                                                    <div class="card-body">
                                                      <p  id="price" class="card-text">5</p>
                                                    </div>
                                                 </div>
                                    </td>
                                    
                                    <td><div class="card">
                                            <img class="card-img-top" src="..." alt="Card image cap">
                                            <div class="card-body">
                                              <p id="price" class="card-text">6</p>
                                            </div>
                                         </div>
                                        </td>
                                  </tr>

                                  <tr>
                                        <td> 
                                                <div class="card">
                                                        <img class="card-img-top" src="..." alt="Card image cap">
                                                        <div class="card-body">
                                                          <p id="price" class="card-text">7</p>
                                                        </div>
                                                     </div>
                                        </td>
                                        <td>
                                                <div class="card">
                                                        <img class="card-img-top" src="..." alt="Card image cap">
                                                        <div class="card-body">
                                                          <p id="price" class="card-text">8</p>
                                                        </div>
                                                     </div>
                                        </td>
                                        
                                        <td><div class="card">
                                                <img class="card-img-top" src="..." alt="Card image cap">
                                                <div class="card-body">
                                                  <p id="price" class="card-text">9</p>
                                                </div>
                                             </div>
                                            </td>
                                      </tr>

                             
                            </tbody>
                    </table>

                    </div>
                      
                
                            </div>
        </div>
</div>

<script>
        function sortTable() {
          var table, rows, switching, i, x, y, shouldSwitch;
          table = document.getElementById("myTable");
          switching = true;
          /*Make a loop that will continue until
          no switching has been done:*/
          while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.getElementsByTagName("TR");
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 0; i < (rows.length); i++) {
              //start by saying there should be no switching:
              shouldSwitch = false;
              /*Get the two elements you want to compare,
              one from current row and one from the next:*/
              x = rows[i].getElementsByTagName("P")[0];
              y = rows[i + 1].getElementsByTagName("P")[0];
              //check if the two rows should switch place:
              nmx = parseInt(x.innerHTML);
              nmy = parseInt(y.innerHTML);
              //alert(nmx);
              //alert(nmy);
              if (nmx < nmy) {
                //if so, mark as a switch and break the loop:
                shouldSwitch= true;
                break;
              }
            }
            if (shouldSwitch) {
              /*If a switch has been marked, make the switch
              and mark that a switch has been done:*/
              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
              switching = true;
            }
          }
        }
        </script>

@endsection