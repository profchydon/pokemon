<?php

namespace App\Api\V1\Controllers\pokemon;

use App\Http\Repositories\pokemon\FindPokemonRepository;
use Illuminate\Http\Response;

class FindPokemon extends Controller
{

    public $pokemon;

    public function __construct(FindPokemonRepository $findPokemonRepository)
    {
        $this->pokemon = $findPokemonRepository;
    }

    /**
     * Show a list of all pokemons.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke($id)
    {
        $pokemon = $this->pokemon->_handle($id);
        return $this->response(Response::HTTP_OK, __('messages.record-fetched'), $pokemon);
    }


}
