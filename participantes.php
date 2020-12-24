<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo Secreto - Participantes</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Amigo Secreto</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="participantes.php">Participantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Sortear</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h1>Adicione Participantes</h1>
            </div>
            <div class="g-3 row">
            <form action="POST" class="needs-validation">
                <div class="col-6 mx-auto">
                    <label class="form-label" for="nomeParticipante">Nome do participante</label>
                    <input class="form-control" type="text" id="nomeParticipante" placeholder="João" required="">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" value="Adicionar" class="btn btn-primary btn-lg">
                </div>
            </form>
            </div>
        </main>
    </div>

    <footer class="footer fixed-bottom bg-dark text-white text-center text-lg-start">
        <div class="container">
            <div class="text-center p-3">
                © 2020 Copyright:
                <a class="text-white" href="#">Bruno Rodrígués</a>
              </div>
        </div>
    </footer>
</body>
</html>