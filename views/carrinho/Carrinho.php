<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrinho - Loja.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Loja.com</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Login/CreateAcont.php">Cadastrar</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="../Login/LoginAcont.php">Entrar</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <a href="cart.html" class="btn btn-outline-secondary me-2">
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
        <h2 class="text-center mb-4">Seu Carrinho</h2>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <input type="checkbox" id="selectAll" onchange="toggleSelectAll()">
                        </th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="item-checkbox"></td>
                        <td><img src="https://images.tcdn.com.br/img/img_prod/1070779/produto_teste_imagem_1799_1_12776de39ee0bc59883518f5c22d3b7d.png" class="img-thumbnail" style="width: 50px; height: 50px;" alt="Produto Incrível 1"></td>
                        <td>Produto Incrível 1</td>
                        <td>Descrição breve do produto incrível 1, destacando suas características.</td>
                        <td>R$ 99,90</td>
                        <td><a href="#" class="btn btn-primary btn-sm">Comprar</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="item-checkbox"></td>
                        <td><img src="https://images.tcdn.com.br/img/img_prod/1070779/produto_teste_imagem_1799_1_12776de39ee0bc59883518f5c22d3b7d.png" class="img-thumbnail" style="width: 50px; height: 50px;" alt="Produto Incrível 2"></td>
                        <td>Produto Incrível 2</td>
                        <td>Descrição breve do produto incrível 2, destacando suas características.</td>
                        <td>R$ 99,90</td>
                        <td><a href="#" class="btn btn-primary btn-sm">Comprar</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="item-checkbox"></td>
                        <td><img src="https://images.tcdn.com.br/img/img_prod/1070779/produto_teste_imagem_1799_1_12776de39ee0bc59883518f5c22d3b7d.png" class="img-thumbnail" style="width: 50px; height: 50px;" alt="Produto Incrível 3"></td>
                        <td>Produto Incrível 3</td>
                        <td>Descrição breve do produto incrível 3, destacando suas características.</td>
                        <td>R$ 99,90</td>
                        <td><a href="#" class="btn btn-primary btn-sm">Comprar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <button class="btn btn-outline-primary" onclick="toggleSelectAll()">Selecionar Todos</button>
        </div>
        <div class="mt-3">
            <h5>Total: R$ 299,70</h5>
            <a href="#" class="btn btn-success w-100 mt-2">Finalizar Compra</a>
        </div>
    </div>

    <footer class="bg-light py-3">
        <div class="container">
            <p class="text-center mb-0">© 2025 Sua Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function toggleSelectAll() {
            const selectAllCheckbox = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('.item-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        }
    </script>
</body>

</html>