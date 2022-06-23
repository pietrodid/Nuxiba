<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mini Framework - Pietro</title>
</head>
<body>
    <?php

      for ($i=0; $i < count($data['usuarios']); $i++) {
      
    ?>
    <div>
      <?= $data['usuarios'][$i]['name']; ?>
      </br>    
    </div>
    <?php } ?>
</body>
</html>