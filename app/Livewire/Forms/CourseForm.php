<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Course;
use Livewire\Attributes\Rule;

class CourseForm extends Form
{
	#[Rule('required|min:5')]
    public $id 		= 0;

	#[Rule('required|min:5')]
    public $name 	= '';

    #[Rule('required|numeric')]
    public $value 	= 0;

	public ?Course $course = null;

	public function store()
    {
		$this->validate();

        return Course::create($this->all());
    }

    public function update()
    {
		$course = Course::where('id', $this->id)->get()->first();

		$course->id		= $this->id;
		$course->name	= $this->name;
		$course->value	= $this->value;

		return $course->save();
    }

	public function setCourse(Course $data)
    {
		$this->id 		= (int) $data->id;
		$this->name 	= (string) $data->name;
		$this->value 	= (float) $data->value;
		$this->course 	= $data;
    }

	public function setId(Int $id)
    {
		$this->id = $id;
    }
}
