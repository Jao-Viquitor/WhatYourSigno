<?php include('layouts/header.php'); ?>

<div class="d-flex justify-content-center align-items-center vh-100 bg-image">
    <div class="card bg-glass p-5 text-center" style="max-width: 500px;">
        <?php
        $data_nascimento = $_POST['data_nascimento'];
        list($ano, $mes, $dia) = explode("-", $data_nascimento);
        $data_usuario = DateTime::createFromFormat('d/m/Y', "$dia/$mes/2000");

        $signos = simplexml_load_file("signos.xml");

        foreach ($signos->signo as $signo) {
            $inicio = DateTime::createFromFormat('d/m/Y', $signo->dataInicio . "/2000");
            $fim = DateTime::createFromFormat('d/m/Y', $signo->dataFim . "/2000");

            if ($fim < $inicio) {
                $fim->modify('+1 year');
                if ($data_usuario < $inicio) $data_usuario->modify('+1 year');
            }

            if ($data_usuario >= $inicio && $data_usuario <= $fim) {
                echo "<h2 class='fw-bold mb-3'>Seu signo é: {$signo->signoNome}</h2>";
                echo "<p class='mb-4'>{$signo->descricao}</p>";
                break;
            }
        }
        ?>
        <a href="index.php" class="btn btn-secondary fw-bold rounded-sm">Voltar</a>
    </div>
</div>

