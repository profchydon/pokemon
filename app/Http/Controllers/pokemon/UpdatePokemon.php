<?php

namespace App\Http\Controllers\pokemon;

use App\Http\Repositories\pokemon\UpdatePokemonRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UpdatePokemon extends Controller
{

    public $pokemon;

    public function __construct(UpdatePokemonRepository $updatePokemonRepository)
    {
        $this->pokemon = $updatePokemonRepository;
    }

    /**
     * Show a list of all pokemons.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        try {
            
            $pokemon = $this->pokemon->_handle($request->all());

            if (!$pokemon) {
                return redirect()->back()->with('error', 'An error occurred. Please try again later.');
            }

            return redirect()->back()->with('success', 'Pokemon has been succesfully updated');

        } catch (\Exception $e) {
            Log::error($e->getMessage(), $e->getTrace());
            return redirect()->back()->with('error', 'An error occurred. Please try again later.');
        }
    }
}
