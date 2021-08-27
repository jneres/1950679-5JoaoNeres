 <?php
            if (!isset($_GET['pages'])) {
                include "pages/home.php"; 
           
            } else {
                switch ($_GET['pages']) {
                    case 'home':
                            include "pages/home.php";
                        break;
                    case 'produtos':
                            include "pages/produtos.php";
                        break;
                        case 'quemsomos':
                            include "pages/quemsomos.php";
                        break;
                    case 'contato':
                            include "pages/contato.php";
                        break;
                                      
                    default:
                        include "pages/home.php";
                        break;
                }
            }
        ?>