<?php

namespace App\Livewire;

use App\Models\Dish;
use App\Models\TableBook;
use Livewire\Component;

class HomePage extends Component
{
    public $name, $email, $drink, $dish_id, $comment, $tableNumber;
    public function save(){

        // dd($this->tableNumber);
        TableBook::create([
            "name"=> $this->name,
            "email"=> $this->email,
            "drink"=> $this->drink,
            "dish_id"=> $this->dish_id,
            "comment"=> $this->comment,
            "tableNumber"=> $this->tableNumber,

        ]);
    }

    public function render()
    {
        $dish = Dish::all();
        return view('livewire.home-page',compact('dish'));
    }
}
