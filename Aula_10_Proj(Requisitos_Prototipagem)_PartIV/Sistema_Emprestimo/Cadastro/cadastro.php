<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listinha</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">


    <!-- Painel  -->
    <div class="bg-light rounded-3 shadow-sm">
        <div class="container-fluid">
            <h1>Listagem de Equipamentos</h1>
            <p>Equipamentos fofos!!!</p>
        </div>
    </div>

    <!-- Navegação -->
    <ul class="nav nav-tabs mb-3">
       <li class="nav-item">
            <a class="nav-link" href="#">
                Listagem
            </a>
       </li> 

       <li class="nav-item">
            <a class="nav-link active" href="#">
                Cadastro
            </a>
       </li> 

       <li class="nav-item">
            <a class="nav-link" href="#">
                ADM
            </a>
       </li>        
    </ul>


    <!-- Visualização do equipamentp -->
    <div class="card shadow">
        <div class="card-header">
            <h4>DataShow</h4>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img src="../Imagens/datashow.jpg" class="img-fluid rounded">
                <button type="file" class="btn btn-primary">
                    Alterar imagem
                </button>   
            </div>
            <div class="col-md-6">
                <form action="_cadastro.php" method="POST">
                    <div class="form-group">
                        
                        <label>
                            Nome:
                        </label>
                        <input name="nome" type="text" class="form-control">

                        <label>
                            Descrição:
                        </label>
                        <input name="descricao" type="text" class="form-control">

                        <label>
                            Código:
                        </label>
                        <input name="codigo" type="text" class="form-control">

                        <label>
                            Modelo:
                        </label>
                        <input name="modelo" type="text" class="form-control">

                        <label>
                            Status
                        </label>
                        <select class="form-control" name="disponibilidade">
                            <option>
                                ---
                            </option>

                             <option value="disponível">
                                Disponível 
                            </option>

                             <option value="indisponível">
                                Indisponível
                            </option>
                        </select>
        
                        <br><br>
                        <button type="submit" class="btn btn-primary">
                            Salvar Alterações
                        </button>
                        
                        <a href="lista.php" class="btn btn-primary">
                            Cancelar
                        </a>
                        



                    </div>
                </form>  

            </div>
        </div>
    </div>
</div>

</body>
</html>