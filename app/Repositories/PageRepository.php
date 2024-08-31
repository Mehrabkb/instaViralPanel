<?php

namespace App\Repositories;

use App\Interfaces\PagesRepositoryInterface;
use App\Models\page;

class PageRepository implements PagesRepositoryInterface {
    public function allPages()
    {
        // TODO: Implement allPages() method.
        return page::all();
    }
}
