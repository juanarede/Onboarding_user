<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function step1()
    {
        return view('livewire.onboarding-step1');
    }

    public function step2()
    {
        return view('livewire.onboarding-step2');
    }

    public function step3()
    {
        return view('livewire.onboarding-step3');
    }

    public function step4()
    {
        return view('livewire.onboarding-step4');
    }

    public function step5()
    {
        return view('livewire.onboarding-step5');
    }
}
