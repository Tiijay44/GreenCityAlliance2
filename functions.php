<?php

function calculatePriceCategory($price)
{
    $priceCategory = null;

    if ($price >= 0 && $price <= 50) {
        $priceCategory = 'Affordable';
    } else if ($price > 100 && $price <= 200)
        $priceCategory = 'Moderate';
    else {
        $priceCategory = 'Premium';
    }
    return $priceCategory;
}

  