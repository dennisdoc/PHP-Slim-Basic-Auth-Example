# PHP-Slm-Basic-Auth-Example
Authenticação basica em servicos json para php slim


basic authenticação para php slim,

example de como chamar esse servico usando ajax

getRoute()= (url servidor tomcat);

$.ajax({
          url: getRoute()+"/rest.php/servico/lista"
          success: function(data){
          
          var resultado=JSON.parse(data);
          
          }, error: function(error){
            console.log(error);
          }
      });
