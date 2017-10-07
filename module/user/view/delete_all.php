<div id="contenido">

    <form autocomplete="on" method="post" name="delete_user" id="delete_user" action="index.php?page=controller_user&op=delete_all">
        <table border='0'>
            <tr>

                <td align="center" colspan="2"><h3>¿Esta seguro de borrar todos los pilotos de la base de datos ?</h3></td>
                
            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green" name="delete_all" id="delete_all">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_user&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>