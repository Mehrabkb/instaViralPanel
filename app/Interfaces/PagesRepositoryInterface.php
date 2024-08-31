<?php
namespace App\Interfaces;
interface PagesRepositoryInterface{
    public function allPages();
    public function addPage(array $pageData);
}
