<?php include('layouts/header.php'); ?>
<div class="d-flex justify-content-center align-items-center vh-100 bg-image">
    <div class="card bg-glass p-5 text-center" style="width: 100%; max-width: 500px;">
        <h2 class="fw-bold mb-4">Descubra o seu signo</h2>
        <form method="POST" action="show_zodiac_sign.php">
            <div class="mb-3 text-start">
                <label for="data_nascimento" class="form-label fw-medium">Data de Nascimento</label>
                <input type="date" name="data_nascimento" class="form-control rounded-sm px-4" required>
            </div>
            <button type="submit" class="btn btn-secondary fw-bold rounded-sm px-4 py-2 mt-2 w-100">
                Consultar
            </button>
        </form>
    </div>
</div>