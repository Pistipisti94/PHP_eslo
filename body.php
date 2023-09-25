<body>
    <?php require_once("menu.php"); 
    switch ($menuItem) {
        case 'Home':
            require_once("Home.php");
            break;
        
        case 'Auto':
            require_once("Auto.php");
            break;
        
        case 'Készítő':
            require_once("Keszito.php");
            break;

        case 'Bereg':
            require_once("Bereg.php");
            break;

        case 'Pogácsa':
            require_once("Pogacsa.php");
            break;
        
        default:
        echo("Szia Lajos!");
            break;
    }
    
    ?>
</body>
</html>