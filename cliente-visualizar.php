<?php
$titulo_da_pagina = "Cliente Visualizar";
include "inc-cabecalho.php";
include "inc-conexao.php";

// 1. SEGURANÇA: Garante que o ID seja um número inteiro, evitando SQL Injection
$id_cliente = isset($_GET['id_cliente']) ? (int)$_GET['id_cliente'] : 0;

$nome = $cpf = $email = $telefone = "";

if ($id_cliente > 0) {
    // 2. BOAS PRÁTICAS: Usando Prepared Statements para proteger o banco de dados
    $sql = "SELECT nome, cpf, email, telefone FROM tb_cliente WHERE id_cliente = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_cliente);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        
        // Como o ID é único, não precisamos de um laço 'while', apenas um 'if' basta
        if ($linha = mysqli_fetch_assoc($resultado)) {
            $nome     = htmlspecialchars($linha['nome']); // Evita ataques XSS ao exibir na tela
            $cpf      = htmlspecialchars($linha['cpf']);
            $email    = htmlspecialchars($linha['email']); 
            $telefone = htmlspecialchars($linha['telefone']);
        } else {
            echo "<script>alert('Cliente não encontrado.'); window.location='listar-clientes.php';</script>";
            exit;
        }
        mysqli_stmt_close($stmt);
    }
} else {
    echo "<script>alert('ID inválido.'); window.location='listar-clientes.php';</script>";
    exit;
}
?>
<body>
    <?php include "inc-menu.php";?>
    
    <main class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
            <h1 class="h2 text-dark m-0">Visualizar Detalhes do Cliente</h1>
            <a href="cliente-listagem.php" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Voltar para a lista
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="card-title mb-0 d-flex align-items-center">
                            <i class="bi bi-person-vcard me-2 fs-4"></i> Info. do Perfil
                        </h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <label class="text-muted small text-uppercase fw-bold mb-1">Nome Completo</label>
                                <p class="fs-5 text-dark border-bottom pb-2 mb-0 fw-semibold"><?=$nome; ?></p>
                            </div>

                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold mb-1">CPF</label>
                                <p class="fs-6 text-dark border-bottom pb-2 mb-0"><?=$cpf; ?></p>
                            </div>

                            <div class="col-sm-6">
                                <label class="text-muted small text-uppercase fw-bold mb-1">Telefone / WhatsApp</label>
                                <p class="fs-6 text-dark border-bottom pb-2 mb-0"><?=$telefone; ?></p>
                            </div>

                            <div class="col-12">
                                <label class="text-muted small text-uppercase fw-bold mb-1">E-mail Cadastrado</label>
                                <p class="fs-6 text-dark border-bottom pb-2 mb-0">
                                    <a href="mailto:<?=$email; ?>" class="text-decoration-none text-primary"><?=$email; ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light d-flex justify-content-end gap-2 py-3">
                        <a href="cliente-editar.php?id_cliente=<?=$id_cliente;?>" class="btn btn-warning px-4">
                            <i class="bi bi-pencil-square me-1"></i> Editar Dados
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php 
mysqli_close($conexao);
include "inc-footer.php";
?>
</body>