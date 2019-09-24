<?php 
include __DIR__."/../model/traits/PDO_db.trait.php";
include __DIR__."/../model/traits/config.trait.php";
include __DIR__."/../model/traits/token_auth.trait.php";
include "../model/class/user.php";
include "../model/class/produtos.php";

?> 

<style>


.borda{
    padding:0px;
    border:3px solid black;
}

.titulo{
    width:100%;
    float:left;
}
text{
    padding:5px;
}

table{

    float:left;
    margin:10px;
}

</style>

<br>
<table class="borda">
    <th class="borda">Usuario</th>
    <tr class="borda">
        <th class="borda"><text>New user</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Login user</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Change info</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Change password</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Post comment</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Edit comment</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Delete comment</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>logout</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
</table>
<table class="borda">
    <th class="borda">Produto</th>
    <tr class="borda">
        <th class="borda"><text>Show all items</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>info item</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>comments item</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>search item</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>new item</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Delete item</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Add item</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Delete Price</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
    <tr class="borda">
        <th class="borda"><text>Alter Price</text></th>
        <td class="borda"><text>Resultado</text></td>
    </tr>
</table>
