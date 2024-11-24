<?php

namespace App\Enums;

enum ProductStatus: string
{
    case InStock = 'in-stock';
    case OutOfStock = 'out-of-stock';
}
