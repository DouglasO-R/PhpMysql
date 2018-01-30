<tr>
                <td>Nome</td>
                    <td> 
                        <input class="form-control" type="text" name="nome" value="<?=$produto->getNome()?>">
                    </td>
            </tr>
            <tr>
                <td>Preço</td>
                    <td>
                        <input  class="form-control" type="number" name="preco" value="<?=$produto->getPreco()?>">                        
                    </td>
            </tr>
            <tr>
                <td>Descrição</td>
                    <td>
                        <textarea class="form-control" name="descricao" ><?=$produto->getDescricao()?></textarea>
                    </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?=$produto->getUsado()?> value="true"> Usado</td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria) :
                         $SelecaoCategoria = $produto->getCategoria()->getId() == $categoria->getId();
                         $selecao = $SelecaoCategoria ? "selected='selected'" : "";
         
                        ?>
                        <option value="<?=$categoria->getId()?> "<?=$selecao?>>
                                <?=$categoria->getNome()?>
                        </option>
                    <?php endforeach ?>
                    </select>
                </td>                
            </tr>
            
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </td>
            </tr>