<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Rully Ramanda
 * Date: 09/06/13
 * Time: 11:38
 */

switch($action){
    case 'index':
        $articles = ORM::for_table('article')->find_many();
        render('article/index.twig', array('pageTitle'=>'Article-Index', 'articles'=>$articles));
        break;
    case 'add':
        $article = ORM::for_table('article')->create();
        if(isset($_POST['Article'])){
            
        }
        render('article/add.twig', array('pageTitle'=>'Article-Add', 'article'=>$article));
}