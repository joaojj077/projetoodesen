<?php 
if (isset($_POST['submit']))
{
    print_r('<br>');
    print_r('nome:'  . $_POST['nome_completo']);
    print_r('<br>');
    print_r('idade:' . $_POST['idade']);
    print_r('<br>');
    print_r('cep:'   . $_POST['cep']);
    print_r('<br>');
    print_r('cidade:'. $_POST['cidade']);
    print_r('<br>');
    print_r('endereço:' . $_POST['endereco']);
    print_r('<br>');
    print_r('estado:' . $_POST['estado']);
    print_r('<br>');
    print_r('Email:' .  $_POST['email']);
    print_r('<br>');
    print_r('Telefone:'  . $_POST['telefone']);
    print_r('<br>');


    include_once('db.php');


    $nome = $_POST['NOME'];
    $idade = $_POST['idade'];
    $cep = $_POST['CEP'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereço'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $telefone = $_POST['TELEFONE'];
    
   
    $sql = "INSERT INTO correios(nome, idade, cep, endereco, cidade, estado, email, telefone, codigo_rastreio) VALUES ('$nome', '$idade', '$cep', '$endereco', '$cidade', '$estado', '$email', '$telefone')";
}

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnailCorreios - Cadastro</title>
    <link rel="icon" href="https://i.im.ge/2024/09/17/fv9Mp8.mascote2.png" type="image/png">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #2C3E50, #4A90E2);
            margin: 0;
            padding: 0;
            color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1E293B;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            text-align: left;
        }

        h1 {
            color: #4A90E2;
            margin-bottom: 15px;
            font-size: 1.8em;
            text-align: center;
        }

        .mascote {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }

        .mascote img {
            max-width: 100px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 12px;
            padding: 14px;
            background-color: #334155;
            border-radius: 6px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #ccc;
            font-weight: normal;
            font-size: 0.9em;
        }

        .form-group input,
        .form-group select,
        .form-group button {
            width: 97%;
            padding: 8px;
            border: none;
            font-size: 0.95em;
            background-color: #4A90E2;
            color: white;
            transition: 0.3s ease;
            border-radius: 14px;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border: 1px solid #5BB5F2;
        }

        .form-group button {
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:disabled {
            background-color: #666;
        }

        .form-group button:hover:not(:disabled) {
            background-color: #357ABD;
        }

        footer {
            margin-top: 20px;
            font-size: 0.8em;
            text-align: center;
            color: #aaa;
        }

        .cpf-table {
            width: 100%;
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .cpf-field {
            width: 80%;
            padding: 8px;
            border: 1px solid #ADD8E6;
            border-radius: 14px;
            background-color: #4A90E2;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mascote">
            <img src="https://i.im.ge/2024/09/17/fv9Mp8.mascote2.png" alt="Mascote SnailCorreios">
        </div>
        <h1>Cadastro SnailCorreios</h1>
        <form id="registration-form" action="snail.php" method="POST">
            <div class="form-group">
                <label for="name">Nome Completo</label>
                <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" id="idade" name="idade" min="1" max="99"
                    oninput="this.value=this.value.slice(0, 2);" required>
            </div>
            <html lang="pt-br"> <!-- Declaração do Idioma  -->

            <head>
                <meta charset="UTF-8">
                <title> MEU CEP </title>
                <div class="form-group">
                    <label for="CEP">CEP</label>
                    <input type="cep" id="CEP" name="CEP" min="1" max="99" oninput="this.value=this.value.slice(0, 8);"
                        required>
                </div>



                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereço" placeholder="Endereço" required>
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade" required>
                </div>

                <div class="form-group">
                    <label for="state">Estado</label>
                    <select name="estado">
                        <option value="estado">Selecione o Estado</option>
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="am">Amazonas</option>
                        <option value="ap">Amapá</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espírito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="ro">Rondônia</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="se">Sergipe</option>
                        <option value="sp">São Paulo</option>
                        <option value="to">Tocantins</option>
                    </select>
                    <br>

                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="text" id="phone" name="phone" pattern="\d{1,11}" maxlength="11" placeholder="Telefone"
                        required>
                </div>
                <div id="mensagens" class="classErro"></div>
                <br><br>
                    <input type="submit" name="submit"id="submit">
   
        </form>
    </div>
    <footer>
        <p>&copy; 2024 SnailCorreios - "Entregas lentas, mas com muito carinho!"</p>
    </footer>
</body>
</html>