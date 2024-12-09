<?php

namespace src\views\pages;

class HomeView
{
    public function render($data = [])
    {
        extract($data);

        // componentes 
        include('src/views/components/bannercomp.php');
        include('src/views/components/bookingcomp.php');
        include('src/views/components/aboutcomp.php');
        include('src/views/components/servicecomp.php');
        include('src/views/components/featurescomp.php');
        include('src/views/components/teamcomp.php');
        include('src/views/components/testimonialcomp.php');
        include('src/views/components/contactcomp.php');

    }
}