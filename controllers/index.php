<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Rully Ramanda
 * Date: 09/06/13
 * Time: 8:41
 */
switch($action){
	case 'index':        
        render('index.twig', array(
            'pageTitle'=>'Index Controller',
        ));
		break;
    case 'login':
        echo 'login';
	default:
        break;
}