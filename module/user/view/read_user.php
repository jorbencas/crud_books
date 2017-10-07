<div id="contenido">
    <h1>Informacion del Libro</h1>
    <p>
    <table border='2'>
      <tr>
          <td>ISBN: </td>
          <td>
              <?php
                  echo $user['ISBN'];
              ?>
          </td>
      </tr>
        <tr>
            <td>Titulo: </td>
            <td>
                <?php
                    echo $user['titulo'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Genero: </td>
            <td>
                <?php
                    echo $user['genero'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Tipo de tapa: </td>
            <td>
                <?php
                    echo $user['tipo_de_tapa'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Autor: </td>
            <td>
                <?php
                    echo $user['autor'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Descripcion: </td>
            <td>
                <?php
                    echo $user['descripcion'];
                ?>
            </td>
        </tr>
        <tr>
            <td>idioma: </td>
            <td>
                <?php
                    echo $user['idioma'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Fecha de Publicación: </td>
            <td>
                <?php
                    echo $user['fecha_de_publicacion'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Volver</a></p>
</div>
