<?php
require_once('Cabecalho.php');


?>
<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
<script type = "text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'vendas', 'Gastos'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: ' Siscul Company ',
          hAxis: {title: 'Ano',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<link rel = "stylesheet" href = "../css/index.css">
<div  id  = "fundo">
<!-- Image and text -->
<nav class = "navbar navbar-dark bg-dark"style = "background-color: #282828;">
<a   class = "navbar-brand" href               = "#">
<img src   = "../imagens/ricardo.png" width    = "30" height = "30" class = "d-inline-block align-top" alt = "">
    Siscul
  </a>
</nav>
<div class = "container" id = "container">
    <br>
    <br>
                               <img src   = "https://diariodecaratinga.com.br/wp-content/uploads/2017/05/O-semin%C3%A1rio-%C3%A9-voltado-para-os-agricultores-familiares.jpg"
                                    class = "img-fluid" alt = "Responsive image" >
                               <br>
                               <br>
                               <br>
                               <br>
                               <br>
                               <p class = "text-justify" ><h2>
                                       A agricultura familiar é um tipo de agricultura desenvolvida em pequenas
                                       propriedades rurais.
                                       Recebe esse nome pois é realizada por grupos de famílias (pequenos agricultores e
                                       alguns empregados).
                                       A colheita dos produtos serve de alimentos para eles e ainda, para o consumo de
                                       parte da população..</h2>

                                   </p> 

                                   <a class = "text-center" href = "Login.php"><button type = "button" class = "btn btn-outline-primary btn-lg btn-block">Ir para o Sistema</button></a>
                                   
                                   <br>
                                   <br>
                                   <hr class = "featurette-divider">
                                   <br>
                                   <br>

                         <div class = "row">
                         <div class = "col-md-8">
                         <img src   = "https://blog.vr.com.br/wp-content/uploads/2019/01/263360-relatorio-contabil-como-ele-pode-ajudar-na-gestao-da-empresa-1280x640.jpg"
                              class = "img-fluid" alt = "Responsive image" >
                               </div>
                               <div class = "col-md-4">
                                   <h3>
                                           A gestão agrícola tornou-se indispensável em um dos principais 
                                           setores econômicos do país. O sucesso do agronegócio
                                            é determinante para a saúde econômica dentro e fora do Brasil.
                                   </h3>
                               </div>
                         </div>
                        <br>
                        <br>
                     
                        <br>
                        <br>
                         
                         <div class = "row">
                              
                               <div class = "col-md-4">
                                       <br>
                                       <br>
                                       <br>
                                       <br>
                                       <br>
                                   <h3>
                                          Monitore tudo de forma rapida!
                                   </h3>
                               </div> 
                               
                                   <div class = "col-md-8">
                                   <div class = "card">
                                   <div id    = "chart_div" style = "width: 100%; height: 500px;"></div>
                                   </div>
                               </div>
                         </div>

                         
                         <br>
                         <br>
                         <hr class = "featurette-divider">

                         <br>
                         <br>
                          
                          <div class = "row">

                                    <div class = "col-md-8">
                                    <img src   = "http://www.baciadasalmas.com/images/2009/fazenda-modelo-b.jpg"
                                         class = "img-fluid" alt = "Responsive image" >
                                </div>
                          
                          <div class = "col-md-4">
                               <br>
                         <br>
                         <br>
                         <br>
                         <br>
                                    <h3>
                                          Nossa ferramenta fornece a os
                                            produtores gerenciar e monitorar sua produção e 
                                            permite aos agrônomos fazer 
                                           levantamento dados que podem ser monitorados 
                                           e rastreados juntos .
                                           
                                    </h3>
                                </div> 

                               </div> 
                     
                     <br>
                     <br>
                     <hr class = "featurette-divider">
                     <br>
                     <br>
    </div>
</div>
</body>
<script src = "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity                       = "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin = "anonymous"></script>
<script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity   = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin = "anonymous"></script>
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity = "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin = "anonymous"></script>
</html>