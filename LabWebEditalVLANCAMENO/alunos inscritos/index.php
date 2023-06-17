<?php
include "connectBD.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>EEEP Manoel Mano | Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cssed.css">
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
      <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', '',],
        
          <?php
          
          $sql2 = mysqli_query($conexao, "SELECT curso, count(curso) as qtd FROM aluno WHERE curso LIKE 'Enf%' GROUP BY curso UNION SELECT curso, count(curso) as qtd FROM aluno WHERE curso LIKE 'Info%' GROUP BY curso UNION SELECT curso, count(curso) as qtd FROM aluno WHERE curso LIKE 'Com%' GROUP BY curso UNION SELECT curso, count(curso) as qtd FROM aluno WHERE curso LIKE 'Adm%' GROUP BY curso ORDER BY qtd ASC");
         
          while ($dados = mysqli_fetch_array($sql2) ) {
            $curso =  $dados['curso'];
            $total =  $dados['qtd'];
          ?>

          ['<?php echo $curso ?>', '<?php echo $total ?>', ], 

        <?php } ?>
        
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
            height: 500,
            width: 1200
          }
        };

        var chart = new google.charts.Bar(document.getElementById('grafico2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


    <div class="container">
        <div class="pai">
            <div id="grafico2" style="height: 500px; width: 1200px;" class="graf"></div>
    </div>
        </div>
     
    
        <footer><img src="./ondas-governo-rodape.png" alt=""></footer>
</body>
</html>
