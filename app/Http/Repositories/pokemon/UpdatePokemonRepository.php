<?php

namespace App\Repositories\pokemon;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class UpdatePokemonRepository
{

    public function _handle()
    {
        return Pokemon::simplePaginate(20);
    }

  }