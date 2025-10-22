<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogLayout extends Component
{
    public function __construct(public string $metaTitle = 'Default title', public string $metaDescription = 'Default description')
    { }

    public function render(): View
    {
        return view('layouts.blog-layout');
    }
}
