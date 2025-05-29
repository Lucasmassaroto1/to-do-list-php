<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>App Lista de Tarefas</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="img/logo.png" width="30" height="30" alt="" class="d-inline-block align-top">
                App Lista de Tarefas
            </a>
        </div>
    </nav>
    <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1){?>
        <div class="bg-success pt-2 text-white d-flex justify-content-center">
            <h5>Tarefa inserida com sucesso!</h5>
        </div>
    <?php } ?>
    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group">
                    <li class="list-group-item active"><a href="index.php">Tarefas pendentes</a></li>
                    <li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
                    <li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Nova Tarefa</h4>
                            <hr>
                            <form method="post" action="tarefa_controller.php">
                                <div class="form-group">
                                    <label for="">Descrição da tarefa:</label>
                                    <input type="text" name="tarefa" id="tarefa" class="form-control" placeholder="Digite a tarefa aqui">
                                </div>
                                <button class="btn btn-success">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>