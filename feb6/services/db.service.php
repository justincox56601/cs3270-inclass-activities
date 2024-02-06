<?php
//this file mocks a database service;
if(!defined('ABS_PATH')){die;}

function get_feed():array{
    return [
        [
            'caption' => "PHP Rocks!",
            'author' => 'Justin',
            'comments' =>[
                [
                    'comment' => "PHP master language!!!",
                    'Author' => 'Penny',
                ],
                [
                    'comment' => "Node is sooooo much better!",
                    'Author' => 'Jerome',
                ],
            ],
            'likeCount' => 5,
        ],
        [
            'caption' => "What a beautfiul sunset!",
            'author' => 'Samantha',
            'comments' =>[
                [
                    'comment' => "I couldn't agree more!",
                    'Author' => 'fred',
                ],
                [
                    'comment' => "Where was this pic taken?",
                    'Author' => 'Alyx',
                ]
            ],
            'likeCount' => 115,
        ],
        [
            'caption' => "Who knows what this rock is?",
            'author' => 'Rachel',
            'comments' =>[
                [
                    'comment' => "That looks like obsidian to me",
                    'Author' => 'Jaquie',
                ],
                [
                    'comment' => "Yeah definitely obsidian",
                    'Author' => 'Ralph',
                ]
            ],
            'likeCount' => 7,
        ],
        [
            'caption' => "Drop a comment if you want a free business coaching session",
            'author' => 'Blaze',
            'comments' =>[],
            'likeCount' => 2,
        ],
        [
            'caption' => "Drinks in Thailand with my partner!",
            'author' => 'Samantha',
            'comments' =>[
                [
                    'comment' => "OMG!  I love it",
                    'Author' => 'Cynthia',
                ],
                [
                    'comment' => "You two are gorgeous!",
                    'Author' => 'Lexi',
                ]
            ],
            'likeCount' => 500,
        ],
        [
            'caption' => "Just caught my first pokemon!  Lets GOOOOO",
            'author' => 'Justin',
            'comments' =>[
                [
                    'comment' => "Pidgey for the win!",
                    'Author' => 'fred',
                ],
                [
                    'comment' => "Hit me up when you make it to Pewter City!",
                    'Author' => 'Alyx',
                ]
            ],
            'likeCount' => 25,
        ],
        [
            'caption' => "Who out there knows what obsidian is used for?",
            'author' => 'Rachel',
            'comments' =>[
                [
                    'comment' => "following",
                    'Author' => 'Blaze',
                ],
            ],
            'likeCount' => 45,
        ],
        [
            'caption' => "Yo!  Just pulled up to Pewter City, Where's my man Alyx?!?!",
            'author' => 'Justin',
            'comments' =>[
                [
                    'comment' => "Hey!  Lets meet up at Brock's Gym.  I wanna watch you get your badge",
                    'Author' => 'Alyx',
                ],
                [
                    'comment' => "Picachu I choose youuuu!  lol",
                    'Author' => 'randoSmash1912',
                ],
                [
                    'comment' => "Ayo!  what was your starter?",
                    'Author' => 'AshesMomsGotItGoingOn',
                ]
            ],
            'likeCount' => 222,
        ],
        [
            'caption' => "OMG!!!  She just proposed on the beach!  I said YES!!!",
            'author' => 'Samantha',
            'comments' =>[
                [
                    'comment' => "So happy for you!!!",
                    'Author' => 'mamabear75',
                ],
                [
                    'comment' => "It's about time!  Congrats!!!",
                    'Author' => 'AnkleLock47',
                ]
            ],
            'likeCount' => 999,
        ],
        [
            'caption' => "There is some kid here with a bulbasaur and a pidgey trying to take on my gym.  Best luck mate!",
            'author' => 'Brock',
            'comments' =>[
                [
                    'comment' => "Make him feel the strength of our Rock gym!",
                    'Author' => 'fred',
                ],
                [
                    'comment' => "Let us know how it goes!",
                    'Author' => 'rockTypeBestType77',
                ]
            ],
            'likeCount' => 145,
        ],
    ];
}