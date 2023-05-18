<?Php

// Definir a fonte da fpdf
define('FPDF_FONTPATH','font/');
require './fpdf/fpdf.php';
require_once "conectar.php";
require 'CaracteresEspeciais.php';
/*  (portugues6+portugues7+ 
portugues8+portugues9+matematica6+matematica7+matematica8+matematica9+ciencias6+ciencias7+ciencias8+ciencias9+historia6+historia7+historia8+historia9+geografia6+geografia7+geografia8+geografia9+ingles6+ingles7+ingles8+ingles9+artes6+artes7
+artes8+artes9+edfisica6+edfisica7+edfisica8+edfisica9)/32
AS media */

//Classificados ampla concorrência (Pública)
$sql=("SELECT nome_completo,media FROM aluno where curso = 'enfermagem' and concorrencia = '[publica]' and deficiencia = 'nenhuma' and bairro <> 'Venânciosi' order by media desc limit 10");
$nsql = ("SELECT nome_completo,media FROM aluno where curso = 'enfermagem' and concorrencia = '[publica]' and deficiencia = 'nenhuma'  and bairro <> 'Venânciosi' order by media desc limit 5 offset 10");

//Classificados com deficiência 
$query = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and deficiencia <> 'nenhuma'  and bairro <> 'Venânciosi' order by media desc limit 2");
$nquery = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and deficiencia <> 'nenhuma'  and bairro <> 'Venânciosi' order by media desc limit 5 offset 2");

//Classificados por cota (pública)
$mysqll = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and deficiencia = 'nenhuma' and bairro = 'Venânciosi' and concorrencia ='[publica]' order by media desc limit 10");
$nmysqll = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and deficiencia = 'nenhuma' and bairro = 'Venânciosi' and concorrencia ='[publica]' order by media desc limit 5 offset 2");

//Classificados ampla concorrência (Privada)
$my = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and concorrencia = '[privada]'  order by media desc limit 10");
$nmy = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and concorrencia = '[privada]'  order by media desc limit 5 offset 10");

//Classificados por cota (privada)
$busquer = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and deficiencia = 'nenhuma' and bairro = 'Venânciosi' and concorrencia ='[privada]' order by media desc limit 10");
$nbusquer = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and deficiencia = 'nenhuma' and bairro = 'Venânciosi' and concorrencia ='[privada]' order by media desc limit 5 offset 2");


$busca = mysqli_query($conn,$sql);
$nbusca = mysqli_query($conn,$nsql);
$search =  mysqli_query($conn,$query);
$nsearch = mysqli_query($conn,$nquery);
$procurar =  mysqli_query($conn,$mysqll);
$nprocurar =  mysqli_query($conn,$nmysqll);
$ir =  mysqli_query($conn,$my);
$nir =  mysqli_query($conn,$nmy);
$busque =  mysqli_query($conn,$busquer);
$busquen =  mysqli_query($conn,$nbusquer);

$pdf = new TextNormalizerFPDF(); 
$pdf->AddPage();

//Fonte e dimensões dos títulos do pdf
$pdf->SetFont('Times','B',20);
$pdf->SetFillColor(219,223,239);
$pdf->Cell(180,10,('EEEP MANOEL MANO'),0,0,'C');
$pdf->ln(); 
$pdf->Cell(180,10,('Resultado Final'),0,0,'C');
$pdf->ln(); 
$pdf->Cell(180,10,('Curso Técnico em Enfermagem'),0,0,'C');

//Logo do Manoel Mano
$pdf->Image('eeep.png',15,5,30,21,'PNG'); 
$pdf->ln(6); 
$pdf->SetFont('Arial','B',16);

//Espaçamento entre linhas

$pdf->ln(20); 
$pdf->SetFont('Arial','B',12);
$pdf->Cell(170,7,'Classificados- Ampla Pública',1,0,'C','F'); 
$pdf->ln(); 
$pdf->Cell(120,7,'Nome',1,0,'C'); 
$pdf->Cell(50,7,'Média Geral',1,0,'C'); 
$pdf->ln(); 

while ($resultado=mysqli_fetch_array($busca)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->ln(10); 

$pdf->Cell(170,7,'Nâo Classificados-Ampla Pública',1,0,'C','F');
$pdf->ln(); 

while ($resultado=mysqli_fetch_array($nbusca)) {
    // dimensões das células do pdf   
    $pdf->setFillColor(220,220,220);
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0,); 
    $pdf->Cell(50,7,$resultado['media'],1,1,);   
}
$pdf->ln(10); 

$pdf->Cell(170,7,'Classificados com Deficiência',1,0,'C','F');
$pdf->ln();
$pdf->Cell(120,7,'Nome',1,0,'C'); 
$pdf->Cell(50,7,'Média Geral',1,0,'C'); 
$pdf->ln();  
while ($resultado=mysqli_fetch_array($search)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0,); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->Cell(170,7,'Não Classificados com Deficiência',1,0,'C','F');
$pdf->ln(); 
while ($resultado=mysqli_fetch_array($nsearch)) {
    // dimensões das células do pdf  
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->ln(10); 
$pdf->Cell(170,7,'Classificados por Território',1,0,'C','F');
$pdf->ln();
$pdf->Cell(120,7,'Nome',1,0,'C'); 
$pdf->Cell(50,7,'Média Geral',1,0,'C'); 
$pdf->ln(); 
while ($resultado=mysqli_fetch_array($procurar)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->Cell(170,7,'Não Classificados por Território',1,0,'C','F');
$pdf->ln();
while ($resultado=mysqli_fetch_array($nprocurar)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->ln(10); 
$pdf->Cell(170,7,'Privada',1,0,'C','F');
$pdf->ln();
$pdf->Cell(120,7,'Nome',1,0,'C'); 
$pdf->Cell(50,7,'Média Geral',1,0,'C'); 
$pdf->ln(); 
while ($resultado=mysqli_fetch_array($ir)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->Cell(170,7,'Não Classificados Privada',1,0,'C','F');
$pdf->ln();
while ($resultado=mysqli_fetch_array($nir)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->ln(10); 
$pdf->Cell(170,7,'Classificados Cota Privada',1,0,'C','F');
$pdf->ln();
$pdf->Cell(120,7,'Nome',1,0,'C'); 
$pdf->Cell(50,7,'Média Geral',1,0,'C'); 
$pdf->ln(); 
while ($resultado=mysqli_fetch_array($busque)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->Cell(170,7,'Não Classificados Cota Privada',1,0,'C','F');
$pdf->ln();
while ($resultado=mysqli_fetch_array($busquen)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->Output();
?>
