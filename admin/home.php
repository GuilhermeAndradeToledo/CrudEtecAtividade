<?php
include_once './include/header.php';
?>

    
            <div class="row g-4 mb-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm border-primary h-100 p-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted mb-1 text-uppercase">Vendas Mensais</h6>
                                <h3 class="mb-0">R$ 12.450</h3>
                            </div>
                            <i class="bi bi-cart-check fs-1 text-primary opacity-50"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm border-success h-100 p-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted mb-1 text-uppercase">Novos Membros</h6>
                                <h3 class="mb-0">48</h3>
                            </div>
                            <i class="bi bi-people fs-1 text-success opacity-50"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm border-warning h-100 p-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted mb-1 text-uppercase">Tarefas</h6>
                                <h3 class="mb-0">12</h3>
                            </div>
                            <i class="bi bi-list-check fs-1 text-warning opacity-50"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card stat-card shadow-sm border-danger h-100 p-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-muted mb-1 text-uppercase">Alertas</h6>
                                <h3 class="mb-0">3</h3>
                            </div>
                            <i class="bi bi-exclamation-triangle fs-1 text-danger opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0 text-dark">Logs de Acesso Recentes</h5>
                        </div>
                        <div class="col text-end">
                            <button class="btn btn-sm btn-primary">Ver Tudo</button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">Email do Usuário</th>
                                    <th>Último Login</th>
                                    <th>Status</th>
                                    <th class="text-end pe-4">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4 fw-bold text-primary"><?php echo $_SESSION['email']; ?></td>
                                    <td>29/04/2026 - 09:20</td>
                                    <td><span class="badge rounded-pill bg-success">Conectado</span></td>
                                    <td class="text-end pe-4">
                                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
<?php
include_once './include/footer.php';
?>