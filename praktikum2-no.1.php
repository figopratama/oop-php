<?php

//CLASS
class gameCharacter{
    
    //PROPERTY
    use charHit;
    use charKick;
    public $name;
    public $lifePoint;
    public $attackHitPoint;
    public $attackKickPoint;

    //CONSTRUCT FUNCTION
    public function __construct($name, $lifePoint, $attackHitPoint, $attackKickPoint){
        $this->name = $name;
        $this->lifePoint = $lifePoint;
        $this->attackHitPoint = $attackHitPoint;
        $this->attackKickPoint = $attackKickPoint;
    }

    //GET FUNCTION
    public function getname(){
        return $this->name;
    }
    
    public function getlifePoint(){
        return $this->lifePoint;
    }
}

//HIT TRAIT
trait charHit{
	private $hit1 = 10;
	public function hit1(){
		$this->lifePoint -= $this->hit1;
	}

    private $hit2 = 5;
	public function hit2(){
		$this->lifePoint -= $this->hit2;
	}
}

//KICK TRAIT
trait charKick{
	private $kick1 = 20;
	public function kick1(){
		$this->lifePoint -= $this->kick1;
	}

    private $kick2 = 25;
	public function kick2(){
		$this->lifePoint -= $this->kick2;
	}
}

//OBJECT
$character1 = new gameCharacter("Raiden", 100, 10, 20);
$character2 = new gameCharacter("Sub-Zero", 100, 5, 25);

//METHOD
echo $character1->getname()."(".$character1->getlifePoint().")";
echo "  vs. ";
echo $character2->getname()."(".$character2->getlifePoint().")";

echo "<br>";
echo "<br>";
echo "[Raiden menendang Sub-Zero]";
$character2->kick1(); // Sub-Zero -20
echo "<br>";
echo $character1->getname()."(".$character1->getlifePoint().")";
echo "  vs. ";
echo $character2->getname()."(".$character2->getlifePoint().")";

echo "<br>";
echo "<br>";
echo "[Sub-Zero menendang balik Raiden]";
$character1->kick2();  // Raiden -25
echo "<br>";
echo $character1->getname()."(".$character1->getlifePoint().")";
echo "  vs. ";
echo $character2->getname()."(".$character2->getlifePoint().")";

echo "<br>";
echo "<br>";
echo "[Sub-Zero memukul Raiden sebanyak 3 kali]";
$character1->hit2(); // Raiden -5
$character1->hit2(); // Raiden -5
$character1->hit2(); // Raiden -5
echo "<br>";
echo $character1->getname()."(".$character1->getlifePoint().")";
echo "  vs. ";
echo $character2->getname()."(".$character2->getlifePoint().")";

echo "<br>";
echo "<br>";
echo "[Raiden menendang Sub-Zero sebanyak 4 kali]";
$character2->kick1(); // Sub-Zero -20
$character2->kick1(); // Sub-Zero -20
$character2->kick1(); // Sub-Zero -20
$character2->kick1(); // Sub-Zero -20
echo "<br>";
echo $character1->getname()."(".$character1->getlifePoint().")";
echo "  vs. ";
echo $character2->getname()."(".$character2->getlifePoint().")";

echo "<br>";
echo "<br>";
echo "PEMENANG: ";
echo $character1->getname()."(".$character1->getlifePoint().")";
?>