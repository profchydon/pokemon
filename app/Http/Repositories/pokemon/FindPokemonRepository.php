<?php

namespace App\Http\Repositories\pokemon;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class FindPokemonRepository
{

    public function _handle($id)
    {
        return Pokemon::whereId($id)->first();
    }

  }