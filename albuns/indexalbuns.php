<?php
    include "conexao.php";

    $buscar_albuns = "SELECT * FROM albuns";
    $query_albuns = mysqli_query($connect, $buscar_albuns)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style22albuns.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Cadastros - Fleet Foxes</title>
</head>
<body class="body">
    <section>
        <br>
        <div class="container">
            <table class="table table-dark table-striped" id="tabela">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Spotify</th>
                    <th scope="col">Deezer</th>
                    <th scope="col">Youtube</th>
                    <th scope="col">Musicas</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Faixas</th>
                    <th scope="col">Ações</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    while($receber_clientes = mysqli_fetch_array($query_albuns)){
                ?>
                <tr>
                    <form action="editar.php" method="post">
                        <th scope="row"><?php echo $receber_clientes["id"] ?></th>
                        <td><input type="text" name="nome" value="<?php echo $receber_clientes["nome"] ?>"></td>
                        <td><input type="text" name="imagem" value="<?php echo $receber_clientes["imagem"] ?>"></td>
                        <td><input type="text" name="spotify" value="<?php echo $receber_clientes["spotify"] ?>"></td>
                        <td><input type="text" name="deezer" value="<?php echo $receber_clientes["deezer"] ?>"></td>
                        <td><input type="text" name="youtube" value="<?php echo $receber_clientes["youtube"] ?>"></td>
                        <td><input type="text" name="musicas" value="<?php echo $receber_clientes["musicas"] ?>"></td>
                        <td><input type="text" name="tipo" value="<?php echo $receber_clientes["tipo"] ?>"></td>
                        <td><input type="text" name="data" value="<?php echo $receber_clientes["data"] ?>"></td>
                        <td><input type="text" name="faixas" value="<?php echo $receber_clientes["faixas"] ?>"></td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $receber_clientes["id"] ?>">
                            <input type="submit" class="btn btn-primary" value="Salvar Edição">
                        </td>
                    </form>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $receber_clientes["id"] ?>">
                            <input type="submit" class="btn btn-danger" value="Deletar">
                        </form>
                    </td>
                </tr>
                <?php
                    };
                ?>
                <tr>
                    <form action="cadastraralbuns.php" method="post">
                    <td></td>
                    <td><input type="text" name="nome"></td>
                    <td><input type="text" name="imagem"></td>
                    <td><input type="text" name="spotify"></td>
                    <td><input type="text" name="deezer"></td>
                    <td><input type="text" name="youtube"></td>
                    <td><input type="text" name="musicas"></td>
                    <td><input type="text" name="tipo"></td>
                    <td><input type="text" name="data"></td>
                    <td><input type="text" name="faixas"></td>
                    <td><input type="submit" class="btn btn-success" value="Cadastrar"></td> 
                    <td></td> 
                    </form>
                </tr>  
                </tbody>
            </table>
        </div>

    </section>
</body>
</html>