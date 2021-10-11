<?php
    if (isset($_GET['content'])) 
    {   
        // de basic dingen zoals de navbar en content
        if (file_exists('pagina-start/' . $_GET['content'] . '.php')) {
            require_once('pagina-start/' . $_GET['content'] . '.php');
        }
        // alle scripts die gebruikt zijn voor dit project
        elseif (file_exists('scripts/' . $_GET['content'] . '.php'))
        {
            require_once('scripts/' . $_GET['content'] . '.php');
        }
        // alle scripts die gebruikt zijn voor dit project
        elseif (file_exists('pagina/' . $_GET['content'] . '.php'))
        {
            require_once('pagina/' . $_GET['content'] . '.php');
        }
    }

    else 
    {
        require_once ('./pagina/home.php');
    }
?>