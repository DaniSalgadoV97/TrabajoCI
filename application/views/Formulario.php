<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
   <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
                 <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Station</th>
                            <th>Description</th>
                            <th>Latitude</th>
                            <th>Length</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($rutas)){ 
                            foreach($rutas as $station){ ?>
                        <tr>
                            <td><?php echo $station['id']; ?></td>
                            <td><?php echo $station['station']; ?></td>
                            <td><?php echo $station['description']; ?></td>
                            <td><?php echo $station['latitude']; ?></td>
                            <td><?php echo $station['length']; ?></td>
                        </tr>
                            <?php }
                        }?>
                    
                    </tbody>
                </table>
              </div>
    <a href="<?php echo site_url('Procesador/agregar')?>">Add Rute</a>
</body>
</html>