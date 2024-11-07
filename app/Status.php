<?php

namespace App;

enum Status: string
{
    case Available = 'available';
    case OutOfStock = 'outofstock';
}
