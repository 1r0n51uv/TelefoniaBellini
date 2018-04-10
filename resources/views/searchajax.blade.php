
<?php
if(!empty($phones))  
{ 
  $outputbody = '';  
  $outputhead = '';

  $count = 0;


  foreach ($phones as $phone)    
  {   

    

    if($count < 10) {
      $randomColorint = rand(0, 4);
      switch($randomColorint) {
        case 0:
          $color = 'text-primary';
          break;
        case 1:
          $color = 'text-info';
          break;
        case 2:
          $color = 'text-success';
          break;
        case 3:
          $color = 'text-warning';
          break;
        case 4:
          $color = 'text-danger';
          break;
      }
      
      $outputbody .=  '
    <div class="row">
        <div class="col-md-12 ">
            <a class="' . $color . '" href="/showBook/' . $phone->brand . '"><h5>' . $phone->model . ' - ' . $phone->color .'</h5></a>
        </div> 
     </div>   ';

      $count++;
    }



  }  

  echo $outputbody; 
}  

else  
{  
  echo 'Data Not Found';  
} 
?>  
