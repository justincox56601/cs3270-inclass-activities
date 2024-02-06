<?php
//this file mocks a userservice service;
if(!defined('ABS_PATH')){die;}


function get_user(string $username):array{
    $users = [
        'Justin' => [
                'username' => 'Justin',
                'following' => ['Brock', 'Alyx', 'Blaze', 'Samantha'],
                'followers' => 10000
            ],
        'Samantha' => [
            'username' => 'Samantha',
            'following' => ['Justin', 'Alyx', 'Rachel'],
            'followers' => 40000
        ],
        'Rachel' => [
            'username' => 'Rachel',
            'following' => ['Justin', 'Blaze', 'Samantha'],
            'followers' => 1000
        ],
    ];
    
    return $users[$username];
}