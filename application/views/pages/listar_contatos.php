    <section class='container'>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                        foreach ($contatos as $contato ) { 
                            echo '<tr>'.
                                '   <td scope="row">'.$contato->id.'</td>'.
                                '   <td scope="row">'.$contato->nome.'</td>'.
                                '   <td scope="row">'.
                                '       <a class="btn btn-success" href="contatos/visualizar/'.$contato->id.'">Editar</a> '.
                                '       <a class="btn btn-info" href="contatos/alterar/'.$contato->id.'">Alterar</a> '.
                                '       <a class="btn btn-danger" href="contatos/excluir/'.$contato->id.'" onclick="javascript:return confirm(\'Confirma Exclusão do Registro\');">Excluir</a>'.
                                '   </td>'.
                                '</tr>';
                        }
                    ?>
            </tbody>
        </table>
        <a href="contatos/novo" class="btn btn-default">Cadastrar</a>
    </section>