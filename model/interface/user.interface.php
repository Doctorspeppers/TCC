<?php
namespace asInterface;
interface User{
    public function LoginUser($ip, $emailUser, $passwordUser);
    public function UpdateUserInformation($informationsChanged,$data);
    ## The existing constraint on information that can be changed, eg password, for this there is another function
    public function DeleteUser($passwordUser);
    public function FavoriteAdd($idItem);
    public function ChangePassword($newPasswordUser,$oldPasswordUser);
    #public function requestNewPassword($email);
}

?>