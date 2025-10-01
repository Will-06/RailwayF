<?php

namespace App\Services\Impl;
use App\Models\Chat;
use App\Services\ChatService;

class ChatServiceImpl extends BaseServiceImpl implements ChatService 
{
    public function __construct()
    {
        parent::__construct(new Chat());
    }
}