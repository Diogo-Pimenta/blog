<?=form_open('postagem-atualizar')?>
    <input type="hidden" name="id" value="<?=$postagem['id']?>">
    <table>
        <tr>
            <td>Título: </td>
            <td><input type="text" name="titulo" value="<?=$postagem['titulo']?>"/></td>
        </tr>
        <tr>
            <td>Conteúdo: </td>
            <td><textarea name="conteudo"  rows="20" cols= "100"><?=$postagem['conteudo']?></textarea>
            </td>
        </tr>
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
<?=anchor('postagem-visualizar/voltar','Voltar')?>