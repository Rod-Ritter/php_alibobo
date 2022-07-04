<main>
    <h1>Main</h1>

    <?php

//    $page = $_GET ['page'];
//    dump($page);


// if (isset($_GET['page'])){
//     $page =$_GET['page'];
//     dump($page);
// }
// else
// $page ="acceuil";

// // Opérateur ternaire
// $page = isset($_GET['page']) ? $_GET['page'] : "accueil";

// Null coalescent operator
$page = $_GET['page'] ?? "accueil";
autoInclude ($page);




// $pageName = "accueil";

// spl_autoload_register(function($pageName) {
//     include './includes/' . $pageName . '.php';
// });






    ?>
</main>