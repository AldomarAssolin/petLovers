<?php

namespace src\views\pages;

class AboutView
{
    public function render($data = [])
    {
        extract($data);

        include('src/views/components/aboutcomp.php');
        include('src/views/components/featurescomp.php');
        include('src/views/components/teamcomp.php');
        include('src/views/components/testimonialcomp.php');
    }
}