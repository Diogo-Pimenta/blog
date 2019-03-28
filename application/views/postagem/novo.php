<?=form_open('postagem-salvar')?>
    <table>
        <tr>
            <td>Título: </td>
            <td><input type="text" name="titulo"/></td>
        </tr>
        <tr>
            <td>Conteúdo: </td>
            <td><textarea name="conteudo" rows="20" cols= "100"></textarea>
            </td>
        </tr>
    </table>
    <input type="submit" value="Salvar"/>
<?=form_close()?>
<?=anchor('postagem-visualizar/voltar','Voltar')?>