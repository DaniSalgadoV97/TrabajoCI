<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
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