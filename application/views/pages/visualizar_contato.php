    <section class='container'>
        <h1 class="text-center">Detalhes do Contato</h1>
        <table class="table table-bordered">
            <?php foreach ($contato[0] as $key=>$value) {
                echo '<tr>'.
                    '   <th scope="row">'. $key.':</th>'.
                    '   <td scope="row">'. $value.'</td>'.
                    '</tr>';
            }
            ?>
        </table>
    </section>