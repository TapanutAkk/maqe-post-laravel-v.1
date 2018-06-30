<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    

    const DATA = [
        [
            "id" => 1,
            "name" => "Jason Bourne",
            "role" => "Registered user",
            "place" => "New York",
            "avatar_url" => "https://api.adorable.io/avatars/250/jason-bourne"
        ],
        [
            "id" => 2,
            "name" => "Michael De Santa",
            "role" => "Moderator",
            "place" => "Los Santos",
            "avatar_url" => "https://api.adorable.io/avatars/250/michael"
        ],
        [
            "id" => 3,
            "name" => "Peter Parker",
            "role" => "Moderator",
            "place" => "New York",
            "avatar_url" => "https://api.adorable.io/avatars/250/peter-parker"
        ],
        [
            "id" => 4,
            "name" => "Harry Potter",
            "role" => "Admin",
            "place" => "Hogwarts",
            "avatar_url" => "https://api.adorable.io/avatars/250/harry"
        ],
        [
            "id" => 5,
            "name" => "Boromir",
            "role" => "Registered user",
            "place" => "Gondor",
            "avatar_url" => "https://api.adorable.io/avatars/250/boromir"
        ],
        [
            "id" => 6,
            "name" => "Bruce Wayne",
            "role" => "Sponsor",
            "place" => "Gotham City",
            "avatar_url" => "https://api.adorable.io/avatars/250/bruce-wayne"
        ]
    ];

}
