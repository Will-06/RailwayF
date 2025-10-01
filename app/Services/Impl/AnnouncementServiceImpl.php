<?php

namespace App\Services\Impl;

use App\Models\Announcement;
use App\Services\AnnouncementService;

class AnnouncementServiceImpl extends BaseServiceImpl implements AnnouncementService
{
    public function __construct()
    {
        parent::__construct(new Announcement());
    }
}
