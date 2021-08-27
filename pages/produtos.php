
<?php 
    $str = file_get_contents('js/produto.json');
    $dados = json_decode($str, true);
?>

<style>
    .container-highlight{
        padding: 20px 15px;
        margin: 0 auto;
    }

    .produto {
        display: inline-block;
        width: 230px;
        border: 1px solid #c8c8c8;
        padding: 20px;
        margin: 10px; 
        margin-bottom: 30px;
    }

    .produto img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .produto p{
        text-align: center;
    }

    .section-default img {
        padding-left: 0px;
        object-fit: cover;
    }

</style>
<section class="section-highlight">
    <div class="container-highlight">
        <h2 class="section-title">Nossos Produtos</h2>
    </div>
</section>
<section class="section-default">
    <div class="container"> 


   <?php foreach ($dados as $produto => $value): ?>
        <section  class="produto">
            <img src=" <?php echo $value["imagem"];?> " alt="doces caseiros">
            <p><?php echo $value["Produto"];?></p>
            <p><?php echo $value["Preço"];?></p>
            <p><?php echo $value["Quantidade"];?></p>
            <p><?php echo $value["peso"];?></p>
        </section>
    <?php endforeach;?>

    </div>
    

    <div class="container">
        <div class="pull-left divide-conteudo">
            <div class="box-txt">
             
            </div>
        </div>
        
    </div>
</section>    
