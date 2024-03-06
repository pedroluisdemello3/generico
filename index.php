<?php

        include("header.php");?>

    <div class="container text-center mt3 mb-5">
        <!--Alerta criado para informar a quantidade de produtos-->
        <div class="alert alert-info text-center" style="width:50%;margin: auto;">
            Há <strong>X</strong> produtos cadastrados em nosso sistema!
        </div>
        <br>
        <form name="formFiltro"action="index.php" method="GET" style="width:50%;margin: auto;">
            <select class="form-select form-select lg"name="filtroProduto" required>
                <option value="todos">Visualizar todos os Produtos</option>
                <option value="disponivel">Visualizar apenas  Produtos Disponiveis</option>
                <option value="vendido">Visualizar apenas os Produtos Vendidos</option>
            </select><br>
            <button type="submit" class="btn btn-primary" style="float:right">
                    filtrar Produtos
            </button>
        </form>   

        <!--Inicio da primeira linha da GRID-->
        <div class="row mt-5">
            <div class="col-3">
                <div class="card" style="width:100%;height:100%">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Nome do Produto</h4>
                        <p class="card-text">Preço do Produto</p>
                        <a href="#" class="btn bg-danger">Ver Detalhes</a>
                    </div>
                </div>  
            </div>
            <div class="col-3">
                <div class="card" style="width:100%;height:100%">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Nome do Produto</h4>
                        <p class="card-text">Preço do Produto</p>
                        <a href="#" class="btn bg-danger">Ver Detalhes</a>
                    </div>
                </div>  
            </div>
            <div class="col-3">
                <div class="card" style="width:100%;height:100%">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Nome do Produto</h4>
                        <p class="card-text">Preço do Produto</p>
                        <a href="#" class="btn bg-danger">Ver Detalhes</a>
                    </div>
                </div>  
            </div>
            <div class="col-3">
                <div class="card" style="width:100%;height:100%">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Nome do Produto</h4>
                        <p class="card-text">Preço do Produto</p>
                        <a href="#" class="btn bg-danger">Ver Detalhes</a>
                    </div>
                </div>  
            </div>
        </div>  
    </div>
</div>

<?php include("footer.php");?>