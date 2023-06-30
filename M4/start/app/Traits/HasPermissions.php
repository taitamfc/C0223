<?php
trait HasPermissions {
    public function hasPermisson($role_name){
        $group_roles = $this->group->roles();
        if( in_array($role_name,$group_roles) ){
            return true;
        }
        return false;
    }

    public function hello(){
        echo 'Hello';
    }
}