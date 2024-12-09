<?php

namespace src\views\pages;

class BlogDetailsView
{
    public function render($data = [])
    {
        extract($data);

        // componentes 
        include('src/views/components/blogdetailscomp.php');
        include('src/views/components/teamcomp.php');

    }
}