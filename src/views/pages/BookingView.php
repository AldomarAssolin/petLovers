<?php

namespace src\views\pages;

class BookingView
{
    public function render($data = [])
    {
        extract($data);

        // componentes 
        include('src/views/components/bookingcomp.php');
        include('src/views/components/servicecomp.php');
        include('src/views/components/pricingcomp.php');
        include('src/views/components/teamcomp.php');

    }
}