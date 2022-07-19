<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PuzzleLogic extends Component
{
    public $name1, $occupation1, $colour1, $car1, $brought1, $borrowed1;
    public $name2, $occupation2, $colour2, $car2, $brought2, $borrowed2;
    public $name3, $occupation3, $colour3, $car3, $brought3, $borrowed3;
    public $name4, $occupation4, $colour4, $car4, $brought4, $borrowed4;
    public $name5, $occupation5, $colour5, $car5, $brought5, $borrowed5;
    public $name6, $occupation6, $colour6, $car6, $brought6, $borrowed6;
    public $name7, $occupation7, $colour7, $car7, $brought7, $borrowed7;
    public $name8, $occupation8, $colour8, $car8, $brought8, $borrowed8;

    public function render()
    {
        return view('livewire.puzzle-logic');
    }
}
