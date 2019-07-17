    <section class='container'>
        <h1 class="text-center">Atualizar Contato</h1>
        <form action="<?php echo base_url().'/contatos/atualizar'; ?>" method="post">
            <?php 
                foreach ($contato[0] as $key=>$value) {
                    echo '<div class="form-group row">'.
                        '   <label for="static'.$key.'" class="form-label">'.ucfirst($key).'</label>'.
                        '   <input type="text" '.(($key == "id") ? "readonly" : "").' class="form-control" name="'.$key.'" id="static'.$key.'" value="'.$value.'">'.
                        '</div>';
                }
            ?>
            <div class="form-group row">
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
    </section>