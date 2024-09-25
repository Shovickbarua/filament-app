<?php

namespace App\Livewire;

use App\Models\Dish;
use App\Models\TableBook;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class HomePage extends Component
{
    public $name, $email, $drink, $dish_id, $comment, $tableNumber;
    public $successMessage;
    public function save(){

        TableBook::create([
            "name"=> $this->name,
            "email"=> $this->email,
            "drink"=> $this->drink,
            "dish_id"=> '1',
            "comment"=> $this->comment,
            // "tableNumber"=> $this->tableNumber,

        ]);
        
        $this->successMessage = 'Table booked successfully!';
    }

    public function render()
    {
        $dish = Dish::all();
        return view('livewire.home-page',compact('dish'));
    }
}
