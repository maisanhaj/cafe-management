<?php

namespace App\Enums;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Success = 'success';
}
