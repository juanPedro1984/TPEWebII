
<table>
  <tr>
    <td>Id de usuario</td>
    <td>Nombre de usuario</td>
    <td>Permiso de administrador</td>
    <td></td>
  </tr>
  {foreach from=$usuarios item=user}

  <tr>
    <td>{$user['id_usuario']} </td>
    <td>{$user['Usuario']}</td>
    <td>{if $user['Admin_permiso'] == 1}
        Si
        {else}
        No
        {/if}
    </td>
    <td>
      <form class="" action="permiso" method="get">
      <input type="hidden" name="idUser" value="{$user['id_usuario']}">
      {if $user['Admin_permiso'] == 0}
        <button type="submit" name="permiso" value="1">Conceder permiso</button>
        {elseif  $user['Admin_permiso'] == 1}
        <button type="submit" name="permiso" value="0">Revocar permiso</button>
        {/if}
          </form>
    </td>
    <td>
      <form class="" action="delUser" method="get">
          <button type="submit"name="delUser" value="{$user['id_usuario']}">Eliminar Usuario</button></td>
      </form>
    </tr>

  {/foreach}
</table>
