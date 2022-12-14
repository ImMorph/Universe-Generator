<?php

class Planet {

    public string $name;
    public int $size;
    public bool $inhabited;
    public int $inhabitantsAmount;
    public $naturalBodies = [];
    
    public function __construct(string $name, int $size, bool $inhabited, int $inhabitantsAmount) {
        $this->name = $name;
        $this->size = $size;
        $this->inhabited = $inhabited;
        $this->inhabitantsAmount = $inhabited ? $inhabitantsAmount : 0;
    }
}
