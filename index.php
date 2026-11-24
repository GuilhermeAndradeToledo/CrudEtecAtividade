<?php
include_once 'include/header.php'
?>

<header class="bg-dark text-white py-5 position-relative border-bottom border-primary border-4" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;">
    <div class="container py-5 text-center">
        <h1 class="display-4 fw-bold mb-3">Explore um mundo de conhecimentos</h1>
        <p class="lead text-li
        ght mb-4">Consulte o nosso acervo físico e digital, reserve livros e acesse bases de dados acadêmicas.</p>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-2 shadow-lg border-0 bg-white">
                    <form class="row g-2">
                        <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0 text-muted">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-0" placeholder="Buscar por título, autor, assunto ou ISBN...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Todos os campos</option>
                                <option value="1">Título</option>
                                <option value="2">Autor</option>
                                <option value="3">Assunto</option>
                                <option value="4">ISBN</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100 fw-semibold">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="py-4 bg-white border-bottom">
    <div class="container">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="bi bi-journal-bookmark-fill text-primary fs-1"></i>
                    <div class="text-start">
                        <h5 class="fw-bold mb-0">+100.000</h5>
                        <small class="text-muted">Títulos Físicos</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="bi bi-laptop text-primary fs-1"></i>
                    <div class="text-start">
                        <h5 class="fw-bold mb-0">E-books</h5>
                        <small class="text-muted">Acesso Digital 24/7</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="bi bi-door-open-fill text-primary fs-1"></i>
                    <div class="text-start">
                        <h5 class="fw-bold mb-0">Salas Privativas</h5>
                        <small class="text-muted">Estudo em Grupo</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <i class="bi bi-wifi text-primary fs-1"></i>
                    <div class="text-start">
                        <h5 class="fw-bold mb-0">Wi-Fi Livre</h5>
                        <small class="text-muted">Para Frequentadores</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="acervo" class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <h2 class="fw-bold mb-1">Destaques do Acervo</h2>
                <p class="text-muted mb-0">Obras recém-chegadas e mais buscadas pelos leitores</p>
            </div>
            <a href="#" class="btn btn-outline-primary btn-sm fw-semibold">Ver Todo o Acervo <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="row g-4">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    <span class="badge bg-success position-absolute top-0 end-0 m-2">Disponível</span>
                    <div class="bg-secondary bg-opacity-10 text-center py-4 rounded-top">
                        <i class="bi bi-book fs-1 text-secondary"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <small class="text-primary fw-semibold text-uppercase">Literatura / Ficção</small>
                        <h5 class="card-title fw-bold fs-6 mt-1">Dom Casmurro</h5>
                        <p class="card-text text-muted small mb-3">Machado de Assis</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <small class="text-muted">Ano: 1899</small>
                            <button class="btn btn-sm btn-outline-primary">Detalhes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">Reservado</span>
                    <div class="bg-secondary bg-opacity-10 text-center py-4 rounded-top">
                        <i class="bi bi-journal-code fs-1 text-secondary"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <small class="text-primary fw-semibold text-uppercase">Tecnologia</small>
                        <h5 class="card-title fw-bold fs-6 mt-1">Código Limpo</h5>
                        <p class="card-text text-muted small mb-3">Robert C. Martin</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <small class="text-muted">Ano: 2009</small>
                            <button class="btn btn-sm btn-outline-primary">Detalhes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    <span class="badge bg-success position-absolute top-0 end-0 m-2">Disponível</span>
                    <div class="bg-secondary bg-opacity-10 text-center py-4 rounded-top">
                        <i class="bi bi-bank fs-1 text-secondary"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <small class="text-primary fw-semibold text-uppercase">História</small>
                        <h5 class="card-title fw-bold fs-6 mt-1">Sapiens: Uma Breve História</h5>
                        <p class="card-text text-muted small mb-3">Yuval Noah Harari</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <small class="text-muted">Ano: 2014</small>
                            <button class="btn btn-sm btn-outline-primary">Detalhes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    <span class="badge bg-info text-dark position-absolute top-0 end-0 m-2">E-Book</span>
                    <div class="bg-secondary bg-opacity-10 text-center py-4 rounded-top">
                        <i class="bi bi-mortarboard fs-1 text-secondary"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <small class="text-primary fw-semibold text-uppercase">Ciências</small>
                        <h5 class="card-title fw-bold fs-6 mt-1">O Gene Egoísta</h5>
                        <p class="card-text text-muted small mb-3">Richard Dawkins</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <small class="text-muted">Ano: 1976</small>
                            <button class="btn btn-sm btn-outline-primary">Ler Online</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="servicos" class="py-5 bg-white border-top border-bottom">
    <div class="container">
        <div class="text-center max-w-xl mx-auto mb-5">
            <h2 class="fw-bold">Nossos Serviços</h2>
            <p class="text-muted">Oferecemos recursos completos para leitores, estudantes e pesquisadores</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 bg-light h-100 p-3">
                    <div class="card-body text-center">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center p-3 mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-box-seam fs-3"></i>
                        </div>
                        <h5 class="fw-bold card-title">Empréstimo e Renovação</h5>
                        <p class="card-text text-muted small">Retire livros físicos ou renove seus prazos diretamente pela internet, sem complicações.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 bg-light h-100 p-3">
                    <div class="card-body text-center">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center p-3 mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-calendar-event fs-3"></i>
                        </div>
                        <h5 class="fw-bold card-title">Reserva de Salas</h5>
                        <p class="card-text text-muted small">Agende salas individuais ou em grupo equipadas com lousa, projetor e Wi-Fi de alta velocidade.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 bg-light h-100 p-3">
                    <div class="card-body text-center">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center p-3 mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-search-heart fs-3"></i>
                        </div>
                        <h5 class="fw-bold card-title">Apoio à Pesquisa</h5>
                        <p class="card-text text-muted small">Atendimento especializado de bibliotecários para orientação em normas ABNT e bases científicas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contato" class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Visite a nossa unidade</h2>
                <p class="text-muted mb-4">Estamos localizados no centro da cidade, com ambiente climatizado, acessibilidade completa e infraestrutura moderna.</p>

                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-geo-alt-fill text-primary fs-4 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Endereço</h6>
                        <p class="text-muted mb-0">Av. Paulista, 1000 - Bela Vista, São Paulo - SP</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <i class="bi bi-clock-fill text-primary fs-4 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Horário de Funcionamento</h6>
                        <p class="text-muted mb-0">Segunda a Sexta: 08:00 - 21:00<br>Sábados: 09:00 - 17:00</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <i class="bi bi-envelope-fill text-primary fs-4 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Contato e Dúvidas</h6>
                        <p class="text-muted mb-0">contato@bibliotecacentral.org.br | (11) 3000-0000</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-4 bg-white">
                    <h5 class="fw-bold mb-3">Fale Conosco</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Nome Completo</label>
                            <input type="text" class="form-control" placeholder="Seu nome">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">E-mail</label>
                            <input type="email" class="form-control" placeholder="nome@exemplo.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Mensagem</label>
                            <textarea class="form-control" rows="3" placeholder="Como podemos ajudar?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-semibold">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'include/footer.php'
?>