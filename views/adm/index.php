<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Loja.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Loja.com</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Deslogar</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-primary me-2" type="button" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg> Adicionar Produto
                </button>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Modal for Adding Product -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Adicionar Novo Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="productName" class="form-label">Nome do Produto</label>
                            <input type="text" class="form-control" id="productName" placeholder="Ex: Produto Incrível" required>
                        </div>
                        <div class="mb-3">
                            <label for="productDescription" class="form-label">Descrição</label>
                            <textarea class="form-control" id="productDescription" rows="4" placeholder="Descrição breve do produto" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Preço</label>
                            <input type="text" class="form-control" id="productPrice" placeholder="Ex: R$ 99,90" required>
                        </div>
                        <div class="mb-3">
                            <label for="productImage" class="form-label">URL da Imagem</label>
                            <input type="url" class="form-control" id="productImage" placeholder="Ex: https://example.com/image.jpg" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Adicionar ao Estoque</button>
                </div>
            </div>
        </div>
    </div>

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