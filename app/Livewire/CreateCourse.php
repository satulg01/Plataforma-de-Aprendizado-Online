<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Livewire\Forms\CourseForm;

class CreateCourse extends Component
{
	public CourseForm $form;

    public function render()
    {
        return view('livewire.create-course');
    }

	public function save()
    {
        $this->form->store();
 
        return $this->redirect('/courses', TRUE);
    }

	public function mount(Course $data)
    {
        $this->form->setCourse($data);
    }
}
