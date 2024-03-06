<?php include("header.php")?>

    <div class="container-fluid text-center">
        <h2>Acessar o Sistema:</h2>

        <div class="d-flex justify-content-center mb-3">
            <div class="row">
                <div class="col-12">
                    <form action="#login.php" class="was-validated">
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="emailUsuario" placeholder="Informe o seu email" name="emailUsuario" required>
                            <label for="emailUsuario" class="form-label">email:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                        
                        <div class="form-floating mb-3 mt-3">
                            <input type="password" class="form-control" id="senhaUsuario" placeholder="Informe a sua Senha" name="senhaUsuario" required>
                            <label for="senhaUsuario" class="form-label">Senha:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>
                        <button type="submit" class="btn bg-danger">Login</button>
                    </form>
                </div>
            </div>
        </div>    
        <br>
            <p>
                Ainda não possui cadastro?
                <a href="formUsuario.php" title="Cadastrar-se">
                    Clique aqui!
                </a>
            </p>        
    </div>   

<?php include("footer.php")?>