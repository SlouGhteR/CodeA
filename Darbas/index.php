<?php
include 'darbas.php';
$a = new auto();
$b = $a->getList();

?>
<!DOCTYPE html>
<html lang="lt"
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="auto.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="auto.css" type="text/css">

</head>
<body>
<div class="container-flex">
    <div class="site-header">
    <table class="mx-auto w-100">
         <tr>
             <td><img class="site-logo" src="http://eder.lt/Darbas/HD-Mustang.jpeg"></td>
             <td><h1 class="site-title">Automobilių nuoma 24/7</h1>
                     <div class="row site-header-top-grid">
                         <div class="col p-0"><button class="btn m-0 p-0 pb-1 pl-2 pr-1"><i class="fa fa-handshake-o" aria-hidden="true"></i>+370 625 49867</button></div>
                         <div class="col p-0"><a target="blank" href="https://www.facebook.com/paulius.mileris.9" class="brn m-0 p-0 pb-1 pl-1 pr-1"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></div>
                         <div class="col p-0" class="brn m-0 p-0 pb-1 pl-1 pr-1"><i class="fa fa-twitter" aria-hidden="true"></i></></div>
                     <div class="col p-0"><a target="_blank" href="http://google.lt" class="brn m-0 p-0 pb-1 pl-1 pr-3"><i class="fa fa-google-plus" aria-hidden="true"></i></a></div>
                     </div>
                </div>
             </td>
            </tr>
    </table>
    </div>
    <div class="site-menu">
        <div class="mx-auto">
            <nav class="navbar navbar-expand-sm m-0 p-0">
                <ul class="navbar-nav nav-pills">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Titulinis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="auto-actions.php"><i class="fa fa-car" aria-hidden="true"></i>Įdėti naują automobilį</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="mx-auto site-body">
        <form action="auto-actions.php" method=POST >
         <table class="table table-relative table-striped mt-1 site-car-list">
             <thead class="thead-light">
                <tr>
                    <th class="col-sm-2">Nuotrauka</th>
                    <th class="col-sm-2">Gamintojas</th>
                    <th class="col-sm-2">Modelis</th>
                    <th class="col-sm-2">Metai</th>
                    <th class="col-sm-2">Kaina</th>
                    <th class="col-sm-2">Veiksmai</th>


                </tr>
                </thead>
                <tbody class="tbody">
                <?php
                        foreach ($b as $c){
                            echo '<tr>';
                            echo '<td>'.'<img src="data:'. $c["mime"].';base64,'. base64_encode ($c["nuotrauka"]).'">' . '<td>';
                            echo '<td>'.$c['gamintojas'] . '<td>';
                            echo '<td>'.$c['modelis']. '<td>';
                            echo '<td>'.$c['metai'] .' m.'. '<td>';
                            echo '<td>'.$c['kaina'] .'$'. '<td>';
                            echo '<td style="white-space:nowrap">' .

                                '<button class="btn btn-info mr-1" type="submit" name="auto-update-form"  value="'.$c['id'].'">Redaguoti</button>'.
                                '<button class="btn btn-succes mr-1" type="submit" name="rent-form" value="'.$c['id'].'" >Išsinuomuoti</button>'.
                                '<button class="btn btn-danger mr-1" type="submit" name="delete" value="'.$c['id'].'">Pašalinti</button>'.'</td>';
                            echo '</tr>';
                    }

                ?>
                </tbody>
        </table>
        </form>
    </div>
</div>



</body>
</html>
<?php
?>
