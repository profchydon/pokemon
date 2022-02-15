<?php

namespace App\Api\Http\Controllers\pokemon;

use App\Http\Repositories\pokemon\ListPokemonRepository;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ListPokemon extends Controller
{

    public $pokemon;

    public function __construct(ListPokemonRepository $listPokemonRepository)
    {
        $this->pokemon = $listPokemonRepository;
    }

    /**
     * Show a list of all pokemons.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke()
    {
        $pokemons = $this->pokemon->_handle();
        return $this->response(Response::HTTP_OK, __('messages.record-fetched'), $pokemons);
    }
}
