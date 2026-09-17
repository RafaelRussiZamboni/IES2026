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


    <!-- Lista -->
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Código</th>
            <th>Modelo</th>
            <th>Editar</th>
            <th>Visualizar</th>
        </tr>

        <tr>
            <td>DataShow</td>
            <td>Datashow com entrada HDMI </td>
            <td>123456</td>
            <td>EPSON 1000 Grau</td>
            <td>
                <button class="btn btn-primary">
                    Editar
                </button>
            </td>
            <td>
                <button class="btn btn-primary">
                    Visualizar
                </button>
            </td>
        </tr>

         <tr>
            <td>TV</td>
            <td>TV LG </td>
            <td>654321</td>
            <td>LG 1000 Grau</td>
            <td>
                <button class="btn btn-primary">
                    Editar
                </button>
            </td>
            <td>
                <button class="btn btn-primary">
                    Visualizar
                </button>
            </td>
        </tr>
		
		<tr>
            <td>DataShow</td>
            <td>Datashow com entrada HDMI </td>
            <td>123456</td>
            <td>EPSON 1000 Grau</td>
            <td>
                <button class="btn btn-primary">
                    Editar
                </button>
            </td>
            <td>
                <button class="btn btn-primary">
                    Visualizar
                </button>
            </td>
        </tr>

         <tr>
            <td>DVV</td>
            <td>DVV LG </td>
            <td>A221</td>
            <td>LG 2000 Grau</td>
            <td>
                <button class="btn btn-primary">
                    Editar
                </button>
            </td>
            <td>
                <button class="btn btn-primary">
                    Visualizar
                </button>
            </td>
        </tr>



    </table>

</div>
</body>
</html>