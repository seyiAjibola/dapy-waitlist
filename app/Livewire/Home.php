<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Waitlist;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;

class Home extends Component
{
    #[Validate('required|string|max:255')]
    public string $fullName;

    #[Validate('required|email|unique:waitlists|max:255')]
    public string $email;
    
    #[Validate('nullable|string|unique:waitlists|max:20')]
    public string $phone;
    
    #[Validate('required|in:employee,employer')]
    public string $employmentType = 'employee';

    public int $waitlistNumber = 257;

    public function submit()
    {
        // if($this->employmentType === 'Select Employment Type') {
        //     $this->addError('employmentType', 'The employment type field is required.');
        //     return;
        // }
        $this->validate();
        
        $waitlist = Waitlist::create([
            'full_name' => $this->fullName,
            'email' => $this->email,
            'phone' => $this->phone,
            'employment_type' => $this->employmentType,
        ]);

        if($waitlist) $this->waitlistNumber = $this->waitlistNumber + Waitlist::count();
            
        $this->reset(['fullName', 'email', 'phone', 'employmentType']);
        session()->flash('success', 'Form submitted successfully!');
    }

    public function render()
    {
        return view('livewire.home')->layout('livewire.layouts.home');
    }
}
