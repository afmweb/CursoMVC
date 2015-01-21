<?php

namespace app\models\site;
class userModel {
    public function cadastrar() {
        return 'Cadastrar com namespace no site';
    }
    

}

namespace app\models\admin;
class userModel {
    public function cadastrar() {
        return 'Cadastrar com namespace no ADMIN';
    }
    

}

use  app\models\site\userModel as user;
use  app\models\admin\userModel as userAdmin;
$userSite = new user();
echo $userSite->cadastrar();
echo '<hr />';

$userAdmin = new userAdmin();
echo $userAdmin->cadastrar();
