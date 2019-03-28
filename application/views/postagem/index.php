<?=anchor('postagem-novo','Nova Postagem')?>

<?php if ($postagens == FALSE): ?>
    <h3>Nenhuma postagem encontrada</h3>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Título</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postagens as $postagem): ?>
                <tr>
                    <td><?= $postagem['titulo'] ?></td>
                    <td><?=anchor('postagem-visualizar/'.$postagem['id'],'Visualizar'); ?> </td>
                    <td><?=anchor('postagem-editar/'.$postagem['id'],'Editar'); ?> </td>
                    <td><?=anchor('postagem-excluir/'.$postagem['id'],'Excluir'); ?> </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
<?php endif; ?>
