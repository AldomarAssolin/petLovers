<?php

namespace src\views\pages;

class ServiceView
{
    public function render($data = [])
    {
        extract($data);

        // componentes 
        include('src/views/components/servicecomp.php');
        include('src/views/components/featurescomp.php');
        include('src/views/components/pricingcomp.php');
        include('src/views/components/teamcomp.php');
        include('src/views/components/testimonialcomp.php');

    }
}