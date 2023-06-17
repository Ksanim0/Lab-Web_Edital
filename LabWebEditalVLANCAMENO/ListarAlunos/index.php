<?php
include "connectBD.php";
include "listar.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>EEEP Manoel Mano | Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="btn-style.css">

</head>
<body>
    <div class="header">
        <div class="container-main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-0">
                        <a href="https://www.instagram.com/eeepmanoelmano/" target="_blank"><img src="logo-mm.svg" alt="Logo do Governo do Ceará"></a>
                        <a href="https://www.ceara.gov.br/" target="_blank"><img src="logo-governo.svg" alt="Logo da EEEP Manoel Mano"></a>
                    </div>
                    <div class="col-0">
                        <h3>alunos inscritos por curso</h3>

 <div class="links-btn">
        <a class="fcc-btn" href="https://www.freecodecamp.org/">Inicio</a>
        <a class="fcc-btn" href="https://www.freecodecamp.org/">Cursos</a>
        <a class="fcc-btn" href="https://www.freecodecamp.org/">Cadastros</a>
        <a class="fcc-btn" href="https://www.freecodecamp.org/">Relatorios</a>
    </div> 
                
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container-0">


            <div class="tabela">

                <div class="row" id="titulo">
                   <h3 id="titulocor">Alunos Cadastrados</h3>
                   </div>
                   <br>
                   <div class="container">
                   <table class="table table-striped">

                   <p>Filtrar por curso:</p>  
                    <input class="form-control" id="myInput" type="text" placeholder="Pesquisar..">
                     <br>

                 <thead>
                   <tr>  
                     <th scope="col">Nome</th>
                     <th scope="col">Media</th>
                     <th scope="col">Curso</th>
                   </tr>
                 </thead>
               
                 <?php while ($usuario = mysqli_fetch_assoc($listarSQL)) { ?>
               
                  <tbody id="myTable">
                    <tr>
                     
                       <td> <?php echo $usuario['nome_completo'];?></td>
                       <td> <?php echo $usuario['portugues6'];?></td>
                       <td> <?php echo $usuario['curso'];?></td>
                       
               
                       
                       
                    </tr>
               
                  
                 </tbody>
               
                 <?php } ?>
               
                 </table>

                 <script>
                    $(document).ready(function(){
                    $("#myInput").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                    });
                    </script>
               
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        </div>
    



        <footer><img src="./ondas-governo-rodape.png" alt=""></footer>
</body>
</html>
