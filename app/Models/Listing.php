<?php

namespace App\Models;

use Psy\Readline\Hoa\Console;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'loremDownload LDPlayer for Windows for free. Power Android 5.1 emulator. Enjoy the excellent mobile operating system Android from your computer with LDPlayer,...
                Rating: 4.4 · ‎42 votes · ‎Free · ‎Windows · ‎Game'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'loremDownload LDPlayer for Windows for free. Power Android 5.1 emulator. Enjoy the excellent mobile operating system Android from your computer with LDPlayer,...
                Rating: 4.4 · ‎42 votes · ‎Free · ‎Windows · ‎Game'
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();
        
    foreach($listings as $listing){
    //   echo $listing;
        if($listing['id'] ==$id){
            return $listing;
        }
    }
    }
};
