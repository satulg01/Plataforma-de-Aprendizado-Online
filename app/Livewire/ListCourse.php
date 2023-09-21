<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class ListCourse extends Component
{
	public ?string $filter = null;

    public function render()
    {
        $courses = Course::where('name','LIKE',"%{$this->filter}%")->get();

        return view('livewire.list-course', compact('courses'));
    }
}
