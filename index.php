<?php

class Clothes {
    public string $brand;
    
    protected string $colour;
    protected string $size;

    public function __construct(string $brand, string $colour, string $size) {
        $this->brand = $brand;
        $this->colour = $colour;
        $this->size = $size;
    }

    protected function getBaseDetails(): string {
        return "Brand: {$this->brand} | Colour: {$this->colour} | Size: {$this->size}";
    }
}

class Jacket extends Clothes {
    public bool $hasHoodie;

    public function __construct(string $brand, string $colour, string $size, bool $hasHoodie) {
        
        parent::__construct($brand, $colour, $size);
        $this->hasHoodie = $hasHoodie;
    }

    public function getJacketInfo(): string {
        $hoodieStatus = $this->hasHoodie ? "Yes" : "No";
        return "[Jacket] " . $this->getBaseDetails() . " | Has Hoodie: {$hoodieStatus}";
    }
}

class Tshirt extends Clothes {
    public string $sleeveType; 

    public function __construct(string $brand, string $colour, string $size, string $sleeveType) {
        parent::__construct($brand, $colour, $size);
        $this->sleeveType = $sleeveType;
    }

    public function getTshirtInfo(): string {
        return "[T-Shirt] " . $this->getBaseDetails() . " | Sleeve: {$this->sleeveType}";
    }
}

class Pants extends Clothes {
    public string $cutType; 

    public function __construct(string $brand, string $colour, string $size, string $cutType) {
        parent::__construct($brand, $colour, $size);
        $this->cutType = $cutType;
    }

    public function getPantsInfo(): string {
        return "[Pants] " . $this->getBaseDetails() . " | Cut: {$this->cutType}";
    }
}



echo "<h3>=== Class Dalam Clothes ===</h3>";
$myJacket = new Jacket("Matahari", "White", "M", true);
$myTshirt = new Tshirt("Adidas", "Chocolatte", "S", "Short");
$myPants = new Pants("Levi's", "Sky Blue ", "26", "Baggy");


echo $myJacket->getJacketInfo() . "<br>";
echo $myTshirt->getTshirtInfo() . "<br>";
echo $myPants->getPantsInfo() . "<br><br>";

echo "<b>Akses Public Property (Brand):</b> " . $myTshirt->brand . "<br>";

?>