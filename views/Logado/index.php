<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja.com - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Loja.com</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Profile/UserProfile.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login/Logout.php">Sair</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <span class="navbar-text me-3">Bem-vindo, Usuário!</span>
                <a href="carrinho/Carrinho.php" class="btn btn-outline-secondary me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.tcdn.com.br/img/img_prod/1070779/produto_teste_imagem_1799_1_12776de39ee0bc59883518f5c22d3b7d.png" class="card-img-top" alt="Produto Incrível">
                    <div class="card-body">
                        <h5 class="card-title text-success">Produto Incrível</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <p class="fw-bold mb-2">R$ 99,90</p>
                        <div class="d-flex gap-2">
                            <a href="Produtos/Produtos.php" class="btn btn-outline-primary">Ver Mais</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.tcdn.com.br/img/img_prod/1070779/produto_teste_imagem_1799_1_12776de39ee0bc59883518f5c22d3b7d.png" class="card-img-top" alt="Produto Incrível">
                    <div class="card-body">
                        <h5 class="card-title text-success">Produto Incrível</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <p class="fw-bold mb-2">R$ 99,90</p>
                        <div class="d-flex gap-2">
                            <a href="Produtos/Produtos.php" class="btn btn-outline-primary">Ver Mais</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.tcdn.com.br/img/img_prod/1070779/produto_teste_imagem_1799_1_12776de39ee0bc59883518f5c22d3b7d.png" class="card-img-top" alt="Produto Incrível">
                    <div class="card-body">
                        <h5 class="card-title text-success">Produto Incrível</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <p class="fw-bold mb-2">R$ 99,90</p>
                        <div class="d-flex gap-2">
                            <a href="Produtos/Produtos.php" class="btn btn-outline-primary">Ver Mais</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.tcdn.com.br/img/img_prod/1070779/produto_teste_imagem_1799_1_12776de39ee0bc59883518f5c22d3b7d.png" class="card-img-top" alt="Produto Incrível">
                    <div class="card-body">
                        <h5 class="card-title text-success">Produto Incrível</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <p class="fw-bold mb-2">R$ 99,90</p>
                        <div class="d-flex gap-2">
                            <a href="Produtos/Produtos.php" class="btn btn-outline-primary">Ver Mais</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.tcdn.com.br/img/img_prod/1070779/produto_teste_imagem_1799_1_12776de39ee0bc59883518f5c22d3b7d.png" class="card-img-top" alt="Produto Incrível">
                    <div class="card-body">
                        <h5 class="card-title text-success">Produto Incrível</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <p class="fw-bold mb-2">R$ 99,90</p>
                        <div class="d-flex gap-2">
                            <a href="Produtos/Produtos.php" class="btn btn-outline-primary">Ver Mais</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.tcdn.com.br/img/img_prod/1070779/produto_teste_imagem_1799_1_12776de39ee0bc59883518f5c22d3b7d.png" class="card-img-top" alt="Produto Incrível">
                    <div class="card-body">
                        <h5 class="card-title text-success">Produto Incrível</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <p class="fw-bold mb-2">R$ 99,90</p>
                        <div class="d-flex gap-2">
                            <a href="Produtos/Produtos.php" class="btn btn-outline-primary">Ver Mais</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <footer class="bg-light py-3">
        <div class="container">
            <p class="text-center mb-0">© 2025 Sua Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>