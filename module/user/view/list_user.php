<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE LIBROS</h3>
    	</div>
    	<div class="row">
        <div id="botones">
        <p><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>
        <p><a href="index.php?page=controller_user&op=delete_all"><img src="view/img/eliminar.png"></a></p>
      </div>
    		<table>
                <tr>
                    <td width=125><b>ISBN</b></th>
                    <td width=125><b>Titulo</b></th>
                    <td width=125><b>Autor</b></th>
                    <th width=350><b>Accion</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUN USUARIO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['ISBN'] . '</td>';
                    	   	echo '<td width=125>'. $row['titulo'] . '</td>';
                    	   	echo '<td width=125>'. $row['autor'] . '</td>';
                    	   	echo '<td width=350 align="center">';
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['ISBN'].'">R</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['ISBN'].'">U</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_user&op=delete&id='.$row['ISBN'].'">D</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>
