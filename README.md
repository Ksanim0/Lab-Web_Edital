


<img src="https://raw.githubusercontent.com/iuricode/iuricode/6944132fcd081de8097a0fa9c97a3110325dfc3e/logo.svg" width="300px" min-width="300px" max-width="300px" align="right" alt="Img">

<h2>Formulário de inscrição EEEP Manoel Mano</h2>

<p>Criação de um site com um formulário para a inscrição de novos dicentes na Escola de ensino profissionalizante Manoel Mano.</p>

</br>

## Redes sociais da escola:

<div class= "social" align="float">
  <a href="https://www.instagram.com/eeepmanoelmano/" alt="Instagram">
    <img src="https://img.shields.io/badge/-Instagram-ff3a5e?style=for-the-badge&logo=Instagram&logoColor=FFF"/>
  </a>
</div>

<div class="social" align="float">
  <a href="https://youtube.com/@eeepmanoelmanocrateus-ce8055" alt="YouTube">
    <img src="https://img.shields.io/badge/YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white"/>
  </a>
</div>

<div class="social" align="float">
  <a href="https://m.facebook.com/EEEPManoelMano" alt="Facebook">
    <img src="https://img.shields.io/badge/Facebook-1877F2?style=for-the-badge&logo=facebook&logoColor=white"/>
  </a>
</div>




 
 ## Referência

 - [Edital](https://www.crede13.seduc.ce.gov.br/2021/12/08/edital-de-selecao-para-alunos-2022-da-eeep-manoel-mano-crateus/)
 - [Padrão Disign](https://drive.google.com/file/d/12E7VhyGMcMKk8xrO5K9vQBePep3xjL6b/view)
 

## Suporte

Para suporte, mande um email para lucasarimateia11@gmail.com ou entre em contato com o nucleo gestor da escola.

![](https://github.com/Ksanim0/Lab-Web_Edital/blob/main/EEEPFORM.gif)
 
 
 
 
## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/Ksanim0/Lab-Web_Edital
```

Entre no diretório do projeto

```bash
  cd Lab-Web_Edital
```

Entre no seu editor de códigos 

```bash
  code.
```



Instale as dependências

```bash
  npm install
```

Inicie o servidor

```bash
  npm run start
```

## 🛠 Backup SQL

Here will be explained the BKP part of the code

*Email and backup cronjob access credentials*

!(https://github.com/LuscasArimate/EEEP_EditalBD/assets/93049848/24c6f9)


 

## Aprendizados

O que aprendemos com esse projeto? Quais desafios enfrentamos e como os superamos?

<h4>Gerar tabela dos dados inseridos de HTML para PDF</h4>
  
  - [Video utilizado como base](
https://youtu.be/oYjseP_Qhv4?t=4242)
  - [Link da API](https://github.com/eKoopmans/html2pdf.js)
  

<h4>Problemática das inserções e atualização da tabela </h4>
  

<p> Durante o processo do projeto nos encontramos em um pequeno óbice, atualizar a tabela <bold> aluno </bold> em conjunto com a tabela<bold> nome_tabela </bold> </p>



> SQL triggers:

<p> O Trigger no MySQL é um objeto de banco de dados associado a uma tabela. Será ativado quando uma ação definida for executada para a tabela.
O trigger pode ser executado quando você executa uma das seguintes instruções do MySQL na tabela: INSERT ,
 UPDATE e DELETE e pode ser chamada antes ou depois do evento. </p>

 Syntax do comando 

```bash
CREATE TRIGGER [NOME DO TRIGGER]
ON [NOME DA TABELA]
[FOR/AFTER/INSTEAD OF] [INSERT/UPDATE/DELETE]
AS
    --CORPO DO TRIGGER
```


> Parâmetros:

NOME DO TRIGGER: nome que identificará o gatilho como objeto do banco de dados. Deve seguir as regras básicas de nomenclatura de objetos.

NOME DA TABELA: tabela à qual o gatilho estará ligado, para ser disparado mediante ações de insert, update ou delete.

FOR/AFTER/INSTEAD OF: uma dessas opções deve ser escolhida para definir o momento em que o trigger será disparado. FOR é o valor padrão e faz com o que o gatilho seja disparado junto da ação. AFTER faz com que o disparo se dê somente após a ação que o gerou ser concluída. INSTEAD OF faz com que o trigger seja executado no lugar da ação que o gerou.

INSERT/UPDATE/DELETE: uma ou várias dessas opções (separadas por vírgula) devem ser indicadas para informar ao banco qual é a ação que disparará o gatilho. Por exemplo, se o trigger deve ser disparado após toda inserção, deve-se utilizar AFTER INSERT.


<h4>Admitir virgula e ponto no input de notas</h4>

## Melhorias

Que melhorias você fez no seu código? Ex: refatorações, melhorias de performance, acessibilidade, etc.

 
## Complicações durante o projeto

Quais complicações você teve no seu código durante a criação?
  
Na implementação do bootstrap <br>
A criação da tabela de classificados no HTML e CSS
Fpdf aceitar caracteres especiais
 
## Linguagens e ferramentas utilizadas 

<div class="codes" align="float">
  <a href="https://www.google.com/amp/s/www.devmedia.com.br/amp/o-que-e-o-html5/25820" alt="HTML">
    <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>
  </a>
</div>


<div class="codes" align="float">
  <a href="https://www.hostinger.com.br/tutoriais/o-que-e-css-guia-basico-de-css" alt="CSS">
    <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
  </a>
</div>

<div class="codes" align="float">
  <a href="https://www.hostinger.com.br/tutoriais/o-que-e-javascript" alt="JavaScript">
    <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>
  </a>
</div>

<div class="codes" align="float">
  <a href="https://www.php.net/manual/pt_BR/intro-whatis.php" alt="PHP">
    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  </a>
</div>

<div class="codes" align="float">
  <a href="https://www.alura.com.br/artigos/o-que-e-git-github" alt="Git">
    <img src="https://img.shields.io/badge/Git-E34F26?style=for-the-badge&logo=git&logoColor=white"/>
  </a>
</div>








 


## ✨ Contribuidores 

<a href="https://github.com/Ksanim0/Lab-Web_Edital/graphs/contributors">

  <img alt="Grid of profile icons of the 200+ contributors" src="https://contrib.rocks/image?repo=Ksanim0/Lab-Web_Edital" />

</a>


<h1>👷‍♂️🚧 PROJETO EM CONTRUÇÃO 👷‍♂️🚧  </h1>
