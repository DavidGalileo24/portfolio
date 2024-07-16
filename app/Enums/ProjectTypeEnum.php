<?php

namespace App\Enums;

enum ProjectTypeEnum: string
{
    case LANDING_PAGE = 'Landing page';
    case DASHBOARD = 'Dashboard';
    case API = 'API';
    case MONOLITH = 'Monolith';
}
