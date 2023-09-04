<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;


class ConstantController extends Controller
{

    const PAGINATE_PAGE_LENGTH = 10;
    const SORT_ASC = 'asc';
    const SORT_DESC = 'desc';
    const RADIUS = 2.0; // KM
    const STATUS_SUCCESS = "success";

    const DEFAULT_AVATAR = 'dashboards/assets/img/avatar/avatar-1.png';
    const NO_IMAGE = 'images/no-image.png';

}
