<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Admission;

class AdmitedStudents extends Component
{
    public function deleteAdmission($id){
        $admission = Admission::find($id);
        $admission->delete();
        session()->flash('message','Admission has been deleted successfully');
    }
    public function render()
    {
        $admissions = Admission::paginate(10);
        return view('livewire.admin.admited-students',['admissions'=>$admissions])->layout('layouts.admin');
    }
}
