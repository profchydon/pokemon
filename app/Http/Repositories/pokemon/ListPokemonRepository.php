<?php

namespace App\Http\Repositories\pokemon;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class ListPokemonRepository
{

    public function _handle()
    {
        return Pokemon::simplePaginate(20);
    }

  }