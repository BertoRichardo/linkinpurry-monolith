<?php

namespace App\Views\Company;

use App\Interfaces\ViewInterface;

class CompanyView implements ViewInterface
{
    public function render()
    {
        require_once __DIR__ . '/../../Pages/company/CompanyProfile.php';
    }
}