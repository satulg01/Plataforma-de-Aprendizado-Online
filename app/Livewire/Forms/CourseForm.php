<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Course;
use Livewire\Attributes\Rule;

class CourseForm extends Form
{
	#[Rule('required|min:5')]
    public string $name = '';
 
    #[Rule('required|min:5')]
    public float $value = 0;

	public function store()
    {
		$this->validate();

        return Course::create(['name' => $this->name, 'value' => (float) $this->value]);
    }
}
