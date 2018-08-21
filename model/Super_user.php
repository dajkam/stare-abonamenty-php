<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 21.08.18
 * Time: 15:20
 */

class Super_user extends User
{
    // privileges
    public  $view = true;
    public  $delete = true;
    public $modify = true;

    // an extra privilege for a Super_user

    public $create_user = true;



}