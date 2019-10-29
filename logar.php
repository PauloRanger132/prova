<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Formulário HTML</title>
</head>

<body>
    <main class="container-fluid">
        <section class="row mt-3">
            <div class="col-lg-6 offset-lg-3">
                <h1 class="bg-dark text-light rounded text-center">
                    Formulário HTML
                </h1>
                <form action="cadastro.php" method="post">
                    <div class="form-group">
                        <label for="nomeCompleto">Nome Completo</label>
                        <input type="text" name="nomeCompleto" id="nomeCompleto" required placeholder="Digite o seu nome completo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" required placeholder="Digite o seu E-mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dataNiver">Data de Aniversário</label>
                        <input type="date" name="dataNiver" id="dataNiver" required placeholder="Digite sua data de Aniversário" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="urlFacebook">Perfil do Facebook</label>
                        <input type="url" name="urlFacebook" id="urlFacebook" required placeholder="Página do perfil do Facebook" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="urlImagem">Imagem de Perfil</label>
                        <input type="url" name="urlImagem" id="urlImagem" required placeholder="Link da Imagem do seu Perfil" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" name="estado" id="estado">
                            <option value="PR">Paraná</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="SC"> Santa Catarina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <select class="form-control" name="cidade" id="cidade">
                            <option></option>
                            <option value="Brusque">Brusque</option>
                            <option value="Guabiruba">Guabiruba</option>
                            <option value="itajai">Itajai</option>
                            <option value="Gaspar">Gaspar</option>
                            <option value="Botuverá">Botuverá</option>
                            <option value="Nova Trento">Nova Trento</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Enviar" name="btnEnviar" class="btn btn-dark btn-block">
                    </div>

                </form>
            </div>
        </section>

    </main>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>