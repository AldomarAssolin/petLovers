<?php

namespace src\views\pages;

class ContactView
{
    public function render($data = [])
    {
        extract($data);

        // componentes 
        include('src/views/components/contactcomp.php');

    }
}