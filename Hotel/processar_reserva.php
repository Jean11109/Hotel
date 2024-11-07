<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $dataHora = $_POST['dataHora'];
    $numNoites = $_POST['numNoites'];
    $numHospedes = $_POST['numHospedes'];
    $valorTotal = $_POST['valorTotal'];
    $newslatter = $_POST['newslatter']; // Não é obrigatório
} else {
    echo "Erro: Dados não enviados corretamente.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Confirmada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #4CAF50;
        }
        .message {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
        }
        .details p {
            margin: 10px 0;
        }
        .details .label {
            font-weight: bold;
            color: #333;
        }
        .details .value {
            color: #555;
        }
        .newsletter {
            background-color: #e7f5e3;
            padding: 10px;
            border-radius: 6px;
            margin-top: 20px;
            border: 1px solid #c5e1a5;
        }
        .button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            text-align: center;
            font-size: 16px;
            text-decoration: none;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Reserva Confirmada</h1>
        <p class="message">Sua reserva foi realizada com sucesso. Confira os detalhes abaixo:</p>
    </div>

    <div class="details">
        <p><span class="label">Nome:</span> <span class="value"><?php echo $nome; ?></span></p>
        <p><span class="label">Sexo:</span> <span class="value"><?php echo ucfirst($sexo); ?></span></p>
        <p><span class="label">Email:</span> <span class="value"><?php echo $email; ?></span></p>
        <p><span class="label">Data e Hora de Entrada:</span> <span class="value"><?php echo date('d/m/Y H:i', strtotime($dataHora)); ?></span></p>
        <p><span class="label">Número de Noites:</span> <span class="value"><?php echo $numNoites; ?></span></p>
        <p><span class="label">Número de Hóspedes:</span> <span class="value"><?php echo $numHospedes; ?></span></p>
        <p><span class="label">Valor Total:</span> <span class="value">R$ <?php echo number_format($valorTotal, 2, ',', '.'); ?></span></p>
    </div>

    <?php if ($newslatter): ?>
        <div class="newsletter">
            <p>Você se inscreveu para receber nosso newsletter!</p>
        </div>
    <?php endif; ?>

    <a href="index.html" class="button">Voltar para a Página Inicial</a>
</div>

</body>
</html>
