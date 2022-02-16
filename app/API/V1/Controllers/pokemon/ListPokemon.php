<?php

namespace App\Api\V1\Controllers\pokemon;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use App\Http\Repositories\pokemon\ListPokemonRepository;
use Illuminate\Http\Response;

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
        try {
            
            $pokemons = $this->pokemon->_handle();
            return $this->response(Response::HTTP_OK, __('messages.record-fetched'), $pokemons);

        } catch (NotFoundResourceException | ModelNotFoundException $err) {
            return $this->error(Response::HTTP_NOT_FOUND, __('messages.resource-not-found'));
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }
}
