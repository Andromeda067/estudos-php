<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Loja.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../views/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="CreateAcont.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="LoginAcont.php">Entrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Signup Form -->
                <div id="signup-form" class="card p-4">
                    <h3 class="text-success text-center mb-4">Criar Conta</h3>
                    <form action="CreateAcont.php" method="post">
                        <div class="mb-3">
                            <label for="signupName" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="signupName" name="signupName" placeholder="Digite seu nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="signupEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="signupEmail" name="signupEmail" placeholder="Digite seu email" required>
                        </div>
                        <div class="mb-3">
                            <label for="signupPassword" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Digite sua senha" required>
                        </div>
                        <div class="mb-3">
                            <label for="signupConfirmPassword" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="signupConfirmPassword" name="signupConfirmPassword" placeholder="Confirme sua senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                    </form>
                    <p class="text-center mt-3">Já tem uma conta? <a href="#" onclick="toggleForm()">Entrar</a></p>
                </div>

                <!-- Login Form -->
                <div id="login-form" class="card p-4" style="display: none;">
                    <h3 class="text-success text-center mb-4">Entrar</h3>
                    <form action="LoginAcont.php" method="post">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Digite seu email" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Digite sua senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>
                    <p class="text-center mt-3">Não tem uma conta? <a href="#" onclick="toggleForm()">Cadastrar</a></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light py-3">
        <div class="container">
            <p class="text-center mb-0">© 2025 Sua Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script>
        function toggleForm() {
            const signupForm = document.getElementById('signup-form');
            const loginForm = document.getElementById('login-form');
            if (signupForm.style.display === 'none') {
                signupForm.style.display = 'block';
                loginForm.style.display = 'none';
            } else {
                signupForm.style.display = 'none';
                loginForm.style.display = 'block';
            }
        }
    </script>
</body>

</html>