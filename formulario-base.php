<tr>
                <td>Nome</td>
                    <td> 
                        <input class="form-control" type="text" name="nome" value="<?=$produto->nome?>">
                    </td>
            </tr>
            <tr>
                <td>Preço</td>
                    <td>
                        <input  class="form-control" type="number" name="preco" value="<?=$produto->preco?>">                        
                    </td>
            </tr>
            <tr>
                <td>Descrição</td>
                    <td>
                        <textarea class="form-control" name="descricao" ><?=$produto->descricao?></textarea>
                    </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?=$produto->usado?> value="true"> Usado</td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria) :
                         $SelecaoCategoria = $produto->categoria->id == $categoria->id;
                         $selecao = $SelecaoCategoria ? "selected='selected'" : "";
         
                        ?>
                        <option value="<?=$categoria->id?> "<?=$selecao?>>
                                <?=$categoria->nome?>
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