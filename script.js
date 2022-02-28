// LIMPAR MENSAGEM
const resetar = setInterval(() => {
    let concluido = document.getElementById("concluido");
    if(concluido){
        if(concluido != "")
        concluido.innerHTML = "";
    }}, 4000);

// CADASTRO PRODUTO
$(document).ready(function(){
        $("#cadastrarProduto").on('click', function(){
            $.ajax({
                url:'insert.php',
                type:'POST',
                data:{
                    nome:$("#nome").val(),
                    estoque:$("#estoque").val(),
                    preco:$("#preco").val(),
                },
                success:function(data){
                    $("#concluido").html(data);
                    $("#nome").val(''),
                    $("#estoque").val(''),
                    $("#preco").val('')
                }
            });
        });
    });

// CADASTRO CLIENTE 
$(document).ready(function(){
        $("#cadastrarCliente").on('click', function(){
            $.ajax({
                url:'signup.php',
                type:'POST',
                data:{
                    nome:$("#nome").val(),
                    cpf:$("#cpf").val(),
                    senha:$("#senha").val(),
                },
                success:function(data){
                    $("#concluido").html(data);
                    $("#nome").val('');
                    $("#cpf").val('');
                    $("#senha").val('');
                }
            });
        });
    });

// BUSCA
$(document).ready(function(){
        $("#search").keyup(function(){
            $.ajax({
                url:'busca_produto.php',
                type:'POST',
                data:{
                    search:$("#search").val()
                },
                success:function(data){
                    $("#resultados").html(data);
                }
            });
        });
    });
// FIM BUSCA

// LISTA TUDO
$(document).ready(function(){
        $.ajax({
            url:'busca_produto.php',
            type:'POST',
            data:{
                search:$("#search").val()
            },
            success:function(data){
                $("#resultados").html(data);
            }
        });
});

