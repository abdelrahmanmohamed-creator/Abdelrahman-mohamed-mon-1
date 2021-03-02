<?php


//sol 6
//Abdelrahman-mohamed-mon-1

$userdata = [
    [
      'name' => 'ahmed hamdy',
       'job' => 'front-end',
      'experience' => 3
     ],
  
     [
         'name' => 'mohammed shaker',
         'job' => 'back-end',
         'experience' => 2
     ],
  
     [
         'name' => 'ali hasan',
         'job' => 'full-stack',
         'experience' => 4
     ],
 ];
 

?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>


    <div class="card" style="width: 18rem;">
    <?php foreach($userdata as $key => $value){ ?>
  <div class="card-body">
    <h5 class="card-title"><strong><?= $key;?></strong><?= $value; ?></h5>
    <p class="card-text"><?= $key;?><?= $value; ?></p>
    <p class="card-text"><?= $key;?><?= $value; ?></p>  
  </div>
  <?php } ?>
</div>



</ul>
</body>
</html>