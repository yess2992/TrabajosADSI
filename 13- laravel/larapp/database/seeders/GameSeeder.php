<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game = new game;
        $game->name = 'The legend of Zelda BOT';
        $game->image = 'images/zelda-bot.png';
        $game->description = 'Best Zelda Game';
        $game->user_id = '1';
        $game->category_id = '2';
        $game->slider = '0';
        $game->price = '59';
        $game->save();

        $game = new game;
        $game->name = 'God of war';
        $game->image = 'images/god-war.png';
        $game->description = 'exclusive';
        $game->user_id = '1';
        $game->category_id = '2';
        $game->slider = '0';
        $game->price = '77';
        $game->save();



    }
}
