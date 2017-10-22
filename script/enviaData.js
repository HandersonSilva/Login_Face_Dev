$(function(){
    //pegando o submit do form
    $("#frmCadUser").submit(function(e){
        //previnir o envio do formulario
        var nome = "Bruna";
         e.preventDefault();
          $.ajax({
          type:"POST",
          url:"service.php?p=cadastrar",
          data: {name:nome},
          success:function(data){
           // $('#status').append(data);
              alert("Logado"+" "+data);
              window.location = "sucesso.php";
          },
          error: function (result) {
            // Como requisitar $resposta e mostrar ela aqui
         }
      });

    });
  
});