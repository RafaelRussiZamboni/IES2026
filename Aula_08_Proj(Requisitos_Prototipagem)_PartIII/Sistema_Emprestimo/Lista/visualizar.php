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
            <a class="nav-link active" href="#">
                Listagem
            </a>
       </li> 

       <li class="nav-item">
            <a class="nav-link" href="#">
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
            </div>
            <div class="col-md-6">
                <h3>DataShow</h3>
                <hr>

                <p>
                    <strong>Descrição:</strong>
                    Datashow com entrada HDMI 
                </p>

                <p>
                    <strong>Código:</strong>
                    123456
                </p>

                <p>
                    <strong>Modelo:</strong>
                    EPSON 1000 Grau
                </p>

                <p>
                    <strong>Disponibilidade:</strong>
                    <span class="badge badge-success">
                        Disponível
                    </span>
                </p>

                <hr>

                <a href="lista.php" class="btn btn-primary">
                    Voltar
                </a>

                 <a href="editar.php" class="btn btn-primary">
                    Editar
                </a>
                <br><br>

            </div>
        </div>
    </div>






</div>

</body>
</html>