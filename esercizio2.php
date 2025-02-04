<?php




// Classe astratta dei vertebrati (classe genitore)
abstract class Vertebrate {
    
    
    protected function specialization() {   // Con il protected rendo il mio attributo o metodo accessibile solo da dentro la mia classe e nelle classi figlie dirette, e in questo caso le classi figlie dirette sono ColdBlooded e WarmBlooded
        echo "Sono un animale Vertebrato\n";
    }

    // Costruttore per ogni classe figlia
    public function __construct() {
        $this->specialization(); // Chiamata al metodo di specializzazione protetto
    }
}





//--------------------------ColdBlooded---------------------------------------------------------------------------------------------------------------

// Classe astratta per gli Animali a Sangue Freddo
abstract class ColdBlooded extends Vertebrate {
    
    // Metodo protetto che stampa la specializzazione degli animali a sangue freddo
    protected function specialization() {
        parent::specialization();  // Qui andiamo a chiamare il metodo della classe madre protetto, tramite lo scope resolution ossia   echo "Sono un animale Vertebrato\n";

        echo "Sono un animale a Sangue Freddo\n";
    }
}




// Classe per il Pesce
class Fish extends ColdBlooded {
    
   
    protected function specialization() {
        parent::specialization(); // Chiama la specializzazione di ColdBlooded che andra a richiamare a sua volta ---->   "Sono un animale Vertebrato\n"; e poi --->   "Sono un animale a Sangue Freddo\n";

        echo "Splash!\n";
    }

        
    }





// Classe per i Rettili
class Reptiles extends ColdBlooded {
    
    protected function specialization() {
        parent::specialization(); 
        echo "Sono un Rettile\n";
    }
}





// Classe per gli Anfibi
class Amphibians extends ColdBlooded {
    
   
    protected function specialization() {
        parent::specialization(); 
        echo "Sono un Anfibio\n";
    }
}








//-------------------------WarmBlooded---------------------------------------------------------------------------------


// Classe astratta per gli Animali a Sangue Caldo
abstract class WarmBlooded extends Vertebrate {
    
    // Metodo protetto che stampa la specializzazione degli animali a sangue caldo
    protected function specialization() {

        parent::specialization();  // Chiamata al mretodo della classe madre

        echo "Sono un animale a Sangue Caldo\n";
    }
}





// Classe per i Mammiferi
class Mammals extends WarmBlooded {
    
    protected function specialization() {

        parent::specialization();

        echo "Sono un Mammifero\n";
    }
}





// Classe per gli Uccelli
class Birds extends WarmBlooded {
    
   
    protected function specialization() {

        parent::specialization();

        echo "Sono un Uccello\n";
    }
}






$magikarp = new Fish();
$pidgeotto = new Birds();
$politoed = new Amphibians();

?>




