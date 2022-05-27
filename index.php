<!doctype html>
<html lang="en">
  <head>
    <title>Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <?php
                require 'elevador.php';

                $novoElevador = new Elevador();
                $capacidade = new Elevador();
                $totalAndares = new Elevador();
                $qtdPessoas = new Elevador();
                $verifica = new Elevador();

                print_r('A máxima capacidade do elevador é de ' .  $capacidade -> getCapacidade() . ' pessoas. <br>');
                print_r('O total de andares do prédio é de '. $totalAndares -> getTotalAnd() . ' andares <br>');
                print_r('O seu andar é: ' . $novoElevador -> getAndarAtual());
                if($novoElevador -> getAndarAtual() == 0){
                    echo ' (térreo) <br>';
                }else{
                    echo '<br>';
                }
                print_r('Total de pessoas no elevador: ' . $qtdPessoas -> getQtdPessoas());
                if($qtdPessoas -> getQtdPessoas() == 8 || $qtdPessoas -> getQtdPessoas() > 8 ){
                    echo ' (⚠ Elevador Lotado) ';
                }else{
                    echo '<br>';
                }
                
            ?>
                <a href="index.php"><button>Chamar elevador</button></a>
            </div>
        </div>
    </div>

    <style>
        *{
            margin-top:10px;
        }

        body{
            background-color: rgb(20,20,20);
            color:white;
        }

        button{
            padding:10px;
            border:1px;
            border-radius:5px;
            background-color: rgb(90,20,120);
            color:white;
            margin-top:10px;
            width:100%;
            transition: 0.2s ease;
        }

        button:hover{
            background-color: rgba(0,0,0,0);
            
            border:1px solid #fff;
        }
        
        .col-md-6{
            display:grid;
            margin:0 auto;
        }
    </style>

  </body>
</html>