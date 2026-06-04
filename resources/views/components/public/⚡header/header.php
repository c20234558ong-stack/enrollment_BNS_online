<?php

use Livewire\Component;

new class extends Component
{
    public bool $mobileOpen = false;

    public function toggleMobile(): void
    {
        $this->mobileOpen = !$this->mobileOpen;
    }
};
