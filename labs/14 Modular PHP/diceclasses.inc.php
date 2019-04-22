<?php

class Dice {
    private $faces;
    private $freqs = array();
    private $bias;

    // Constructor
    public function __construct($faces, $bias) {
        $this->faces = $faces;
        $this->bias = $bias;
    }

    public function cast() {
        $check = rand(1,100);
        $vastaus = $this->bias * 100;
        if ($vastaus == 0){
            $res = rand(1,($this->faces));
            $this->freqs[$res]++;
        } elseif ($check < $vastaus) {
            $res = $this->faces;
            $this->freqs[$res]++;
        } else {
            $res = rand(1,($this->faces-1));
            $this->freqs[$res]++;
        }
        return $res;
    }
    
    public function getFreq($eyes) {
        $freq = $this->freqs[$eyes];
        if ($freq=="")
            $freq = 0;
        return $freq;
    }

    public function average($eyes, $throws) {
        $average = 0;
        for($i = 1; $i<=$eyes; $i++){
            $freq = $this->getFreq($i);
            $average = $average + $freq * $i;
        }
        $average = $average / $throws;
        return $average;
    }

    public function getMaterial(){
        return "The dice is made out of plastic. ";
    }
}

class PhysicalDice extends Dice {
    private $material;

    public function __construct($faces, $bias, $material) {
        parent::__construct($faces, $bias);
        $this->material = $material;
    }

    public function getMaterial(){
        return "The dice is made out of " .$this->material. ".";
    }
}

?>