<?php

require_once ('..\src\App\entity\Article.php');
use App\entity\Article;

$article1 = new Article();
$article1->set_libelle("le jus le plus delicieux");
$article1->set_nomProduit('passion');
$article1->set_prix(10000);
$article1->augmenter_prix(45);
$article1->attribuerReference();


$article2 = new Article();
$article2->set_libelle("mangue a la fraise melange chocolat");
$article2->set_nomProduit('chocomangue');
$article2->set_prix(2500);
$article2->diminuer_prix(80);
$article2->attribuerReference();

//UTILISATION DES VARIABLE DE CLASSE
// "::" operateur de resolution de portee Appelé PAAMAYIM NEKUDOTAYIM
echo (Article::get_remise());
Article::set_remise(150.25);
echo (Article::get_remise());

echo ($article1::get_remise());



// var_dump($article1);
// var_dump($article2);
