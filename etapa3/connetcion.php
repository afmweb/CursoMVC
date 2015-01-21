<?php
 $cfg = ActiveRecord\Config::instance();
 $cfg->set_model_directory( DIR_ROOT . '/App/Models');
 $cfg->set_connections(array('development' =>
  'mysql://USER:PASSWORD@HOST/BANCO'));
