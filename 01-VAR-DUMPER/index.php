<?php

# Importation de l'Autoload de Composer
require_once 'vendor/autoload.php';


# Contenu de Démonstration
class Contact {
    private $_firstname,
            $_lastname;

    /**
     * Contact constructor.
     * @param $_firstname
     * @param $_lastname
     */
    public function __construct($_firstname, $_lastname)
    {
        $this->_firstname = $_firstname;
        $this->_lastname = $_lastname;
    }
}

$unString = 'Une chaîne de caractères';
$unArray  = ['Abdel-illah', 'Hocine', 'Benjamin', 'Clément', 'Romain', 'Joffrey', 'Jean-Marc'];
$unObjet  = new Contact('Abdel-illah', 'BOUKHATEB');

# Test de VarDumper
\Symfony\Component\VarDumper\VarDumper::dump($unString);
\Symfony\Component\VarDumper\VarDumper::dump($unArray);
\Symfony\Component\VarDumper\VarDumper::dump($unObjet);

