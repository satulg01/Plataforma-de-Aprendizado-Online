<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Livewire\Forms\CourseForm;

class EditCourse extends Component
{
	public CourseForm $form;

    public function render()
    {
        return view('livewire.edit-course');
    }

	public function save()
    {
        $this->form->update();
 
        return $this->redirect('/courses', TRUE);
    }

	public function mount()
    {
		$data = Course::where('id', 1)->get()->first();
		
        $this->form->setCourse($data);
    }
}
