<?php

namespace App\Http\Repositories\pokemon;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class UpdatePokemonRepository
{

    public function _handle($request)
    {
        $pokemon = Pokemon::whereId($request['id'])->first();
        return $pokemon->update($request);
    }

  }