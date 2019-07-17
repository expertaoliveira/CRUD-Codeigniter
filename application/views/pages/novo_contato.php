<section class='container'>
        <h1 class="text-center">Cadastrar Novo Contato</h1>
        <form action="/contatos/cadastrar" method="post">
            <div class="form-group row">
                <label for="staticid" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="staticnome" value="" placeholder="Seu nome completo">
                <span class="text-danger"><?php echo form_error('nome'); ?></span>
            </div>
            <div class="form-group row">
                <label for="staticid" class="form-label">Telefone:</label>
                <input type="text" class="form-control" name="telefone" id="statictelefone" value="" placeholder="Seu telefone">
                <span class="text-info">Exemplo: 71 95555-5555</span>

            </div>
            <div class="form-group row">
                <label for="staticid" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="staticemail" value="" placeholder="Seu email">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </section>