<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style01.css">
    <link href="assets/css/simple-grid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrador</title>

    <head>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <span
                style="text-align: center;font-size: 20px;color:white;margin: 10px;padding: 10px;height: 50px; ">INTEGRA
                BCO OM30
                </br></br>CATEGORIAS</br></br>
                <h5 style="color:blue;margin-left: 1%;" ><a href="#" onclick="Voltar()" class="btn btn-primary" style="margin-left: 1%;"  >Voltar</a></h5>
                <!-- <i class="bx bx-log-out" aria-hidden="true" href="#" onclick="Voltar()">Voltar</i> -->
            </span>
        </div>
    </div>

    <div class="container">
     
        <div class="row">
            <div class="col-5">

                <table class="table table-striped">

                <h5 style="color:blue;margin-left: 1%;" >Categorias SESUITE <a href="/categorias/incluir_se" class="btn btn-warning" style="margin-left: 1%;"  >Incluir</a></h5>

        
                        <th style="padding: 3px; width:35 px; text-align: center;">#ID</th>
                        <th style="padding: 3px;">Nome</th>
                        <th style="padding: 3px;">Repositorio</th>
                        <th style="padding: 3px;">Ação</th>
        
                            <?php for($k=0; $k < count($cat_se); $k++) {; ?>
                            <tr>
                                <!-- <td style="padding: 1px;text-align: center;">{{ cliente.id }}</td> -->
                                <td style="padding: 3px;text-align: center;"><?php echo $cat_se[$k]->id ?></td>
                                <td style="padding: 3px;"><?php echo $cat_se[$k]->nome ?></td>
                                <td style="padding: 3px;"><?php echo $cat_se[$k]->repositorio ?></td>
                                <td style="padding: 1px;"><a href="/categorias/editar_se/<?php echo $cat_se[$k]->id?>" class="btn btn-info">Editar</a></td>
                            </tr>

                            <?php } ?>
                </table>

            </div>

           
                <div class="col-5">
                    <table class="table table-striped">
                    <h5 style="color:blue;margin-left: 1%;" >Categorias PRODIMAGE <a href="{{BASE}}cliente/incluir/" class="btn btn-warning" style="margin-left: 1%;"  >Incluir</a></h5>

        
                            <th style="padding: 3px; width:35 px; text-align: center;">#ID</th>
                            <th style="padding: 3px;">Nome</th>
                            <th style="padding: 3px;">Repositorio</th>
                            <th style="padding: 3px;">Edição</th>
        
                                <?php for($k=0; $k < count($cat_se); $k++) {; ?>
                                <tr>
                                    <!-- <td style="padding: 1px;text-align: center;">{{ cliente.id }}</td> -->
                                    <td style="padding: 3px;text-align: center;"><?php echo $cat_se[$k]->id ?></td>
                                    <td style="padding: 3px;"><?php echo $cat_se[$k]->nome ?></td>
                                    <td style="padding: 3px;"><?php echo $cat_se[$k]->repositorio ?></td>
                                    <td style="padding: 1px;"><a href="{{BASE}}cliente/editar/{{ cliente.id }}" class="btn btn-info">Editar</a></td>
                                </tr>

                                <?php } ?>
                    </table>

                </div>
   

        </div>

    </div>

    <footer>
    </footer>

<script>

   function Voltar() {
    //    alert('evento sair funcionando');
        window.location.href = "/menu";

    }

</script>

</body>


</html>



