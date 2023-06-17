//cadastrar usuario
function enviarFormulario(){
    var nome = $("#nome").val();
    var telefone = $("#telefone").val();
    var email = $("#email").val();
    var senha = $("#senha").val();

    var url = "processar.php";
    var params = {
        nome: nome,
        telefone: telefone,
        email: email,
        senha: senha
    };

    $.post(url, params, function(data){
        if(data == "Cadastrado com Sucesso"){
        }
        console.log(data);
    });
    window.location.href = "login.php"
};
//cadastrar usuario

//--------------------------------------------------------------------

//login
function login() {
    var email = $("#email").val();
    var senha = $("#senha").val();

    var url = "processar.php";
    var params = {
        email: email,
        senha: senha
    };

    $.post(url, params, function(data) {
        if (data.trim() === 'Seja bem vindo') {
            window.location.href = "vendedor.php";
        } else {
            console.log(data);
        }
    });
};
//login

//--------------------------------------------------------------------

//cadastro de usuario
function CadCliente(){
    var nome = $("#nome").val();
    var telefone = $("#telefone").val();
    var rua = $("#rua").val();
    var bairro = $("#bairro").val();
    var cidade = $("#cidade").val();
    var estado = $("#estado").val();

    var url = "processar.php";
    var params = {
        nome: nome,
        telefone: telefone,
        rua: rua,
        bairro: bairro,
        cidade: cidade,
        estado: estado
    };

    $.post(url, params, function(data){
        if(data == "Cliente Cadastrado Com Sucesso!"){
        }
        console.log(data);
    });
    window.location.href = "clientes.php"
};
//cadastro de usuario

//--------------------------------------------------------------------

//consultar Clientes
function consultar(){
    $.ajax({
        url: "ConsultarClientes.php",
        type:"POST",
        success: function(data){
            $("#resultado").html(data);
        },
        erro: function(){
            $("#resultado").html("Erro ao consultar os Clientes.");
        }
    })
};

//consultar clientes

function Cadproduto(){
    var nome = $("#nome").val();
    var preco = $("#preco").val();
    var quantidade = $("#quantidade").val();

    var url = "processar.php";
    var params = {
        nome: nome,
        preco: preco,
        quantidade: quantidade
    };

    $.post(url, params, function(data){
        if(data == "Produto Cadastrado Com Sucesso!"){
        }
        console.log(data);
    });
    window.location.href = "produtos.php"
};