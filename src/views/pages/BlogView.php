<?php

namespace src\views\pages;

class BlogView
{
    public function render($data = [])
    {
        extract($data);

        // componentes 
        include('src/views/components/blogcomp.php');
        include('src/views/components/teamcomp.php');

    }
}