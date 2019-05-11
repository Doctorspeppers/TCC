<?php
namespace asInterface;
interface User{
    public function newUser($data);
    public function LoginUser( $ip, $array);
    public function UpdateUserInformation($informationsChanged, $data);
    ## The existing constraint on information that can be changed, eg password, for this there is another function
    public function DeleteUser($passwordUser);
    public function FavoriteAdd($idItem);
    public function ChangePassword($oldPasswordUser, $newPasswordUser);
    #public function requestNewPassword($email);
    public static function convertParams($parameters);
    
}

?>