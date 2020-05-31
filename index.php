<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <script src="https://kit.fontawesome.com/f544440f57.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>

    <title>PHP</title>

    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <h1>Paganti Hotel Database</h1>

    <div id="paganti">





    </div>


<!-- handlebars ------------------------------------------------->
    <script id="paganti-template" type="text/x-handlebars-template">

      <div class="pagante" data-id="{{id}}">

        <i class="fas fa-trash"></i>
        <h4>Nome: {{name}}</h4>
        <h4>Cognome: {{lastname}}</h4>
        <h4>Indirizzo: {{address}}</h4>

      </div>
    </script>



  </body>
</html>
