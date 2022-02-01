<?php /**** Código elaborado por leandroip.com. ****/ ?>
<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/src/Styles/styles.css" media="screen" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-155TR7T5MS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-155TR7T5MS');
    </script>
    <script>
       document.getElementById().onclick = function () {
        location.href = "src/pages/agradecimento.html";}
      
       
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fauna+One&display=swap" rel="stylesheet">
    <link rel="icon" type="imagem/ico" href="/src/assets/8090LOGO-G71.ico"/>
    <title>G7 Marketing</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 

  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 


</head>

<body>

<div class="maincontainer">
       <header>
            <img src="./src/assets/Fatiados/G7-LANDING-PAGE-ORINGEN_01.jpg"/>
       </header>
       <main>
           <div>
               <img src="./src/assets/Fatiados/G7-LANDING-PAGE-ORINGEN_02.jpg"/>
           </div>
           <div>
               <img src="./src/assets/Fatiados/G7-LANDING-PAGE-ORINGEN_03.jpg"/>
           </div>
           <div class="part1">
               <img src="./src/assets/Fatiados/G7-LANDING-PAGE-ORINGEN_07.jpg"/>  
               <a href="#form1">Baixe aqui seu material</a>                      
           </div>
           <div>
               <img src="./src/assets/Fatiados/G7-LANDING-PAGE-ORINGEN_09.jpg"/>
           </div>
           <div>
               <img src="./src/assets/Fatiados/G7-LANDING-PAGE-ORINGEN_12.jpg"/>
           </div>
           <div>
               <img src="./src/assets/Fatiados/G7-LANDING-PAGE-ORINGEN_13.jpg"/> 
           </div>
           <div>
               <img src="./src/assets/Fatiados/G7-LANDING-PAGE-ORINGEN_15.jpg"/>
           </div>
           <div id="form1"  class="containertotal">
              
               <div  class="container">
               <div class="wrapper">
    
    
                    <div id="formResult"></div>
                    <div id="formDiv" class="flex-outer">
                      <form id="messageForm" method="POST" action="post_contato.php">
                        <div class="form-group">
                          <label>Nome</label>
                          <input type="text" name="nome" class="form-control" placeholder="Seu Nome" required>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                        </div>


                        <div class="form-group">
                          <label>Telefone</label>
                          <input type="tel" name="phone" class="form-control" placeholder="phone" require>
                        </div>
                        <button type="submit" class="btn btn-primary">Baixe aqui seu material</button>
                      </form>
                    </div>
                  </div>
                </div>
           </div>
           
       </main>
       <footer>
            <img src="./src/assets/Fatiados/G7-LANDING-PAGE-ORINGEN_19.jpg"/>
       </footer>
  

  <script>
    // Attach a submit handler to the form
    $("#messageForm").submit(function(event) {
      $(document).scrollTop($("#contato").offset().top);
      $("#formDiv").slideUp();
      $("#formResult").empty().append("<div style='text-align:center'><img src='images/ajax-loader.gif'></div>");
      // Stop form from submitting normally
      event.preventDefault();

      // Get some values from elements on the page:
      var $form = $(this),
        nome = $form.find("input[name='nome']").val(),
        email = $form.find("input[name='email']").val(),
        phone= $form.find("input[name='phone']").val(),
        url = $form.attr("action");

      // Send the data using post
      var posting = $.post(url, {
          nome: nome,
          email: email,
          phone: phone,
        },
        function(data) {
          $("#formResult").empty().append(data);
        });
    });
  </script>

</html>