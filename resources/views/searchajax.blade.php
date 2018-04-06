
<?php
if(!empty($users))  
{ 
  $outputbody = '';  
  $outputhead = '';

  $count = 0;


  foreach ($users as $user)    
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
            <a class="' . $color . '" href="/showBook/' . $user->id . '"><h5>' . $user->name . ' - ' . $user->email .'</h5></a>
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
