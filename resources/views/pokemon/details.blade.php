@extends('layouts.master')
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-12 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-12 lg:px-12">
 
              <h6>Identifier: {{ $pokemon->identifier}}</h6>

              <h6>Species: {{ $pokemon->species_id}}</h6>

              <h6>Height: {{ $pokemon->height}}</h6>

              <h6>Weight: {{ $pokemon->weight}}</h6>

              <h6>Base Experience: {{ $pokemon->base_experience}}</h6>

              <h6>Order: {{ $pokemon->order}}</h6>

                
            </div>
        </div>
    </body>
</html>
