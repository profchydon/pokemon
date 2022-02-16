@extends('layouts.master')
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-12 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-12 lg:px-12">

                <div class="mt-12 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                    <div class="grid grid-cols-1 md:grid-cols-2">
                      
                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Identifier</th>
                            <th scope="col">Species ID</th>
                            <th scope="col">Height</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Base Experience</th>
                            <th scope="col">Order</th>
                            <th scope="col">Action</th>

                          </tr>
                        </thead>
                        <tbody>

                          @foreach($pokemons as $pokemon)
                            <tr>
                              <td>{{ $pokemon->identifier }}</td>
                              <td>{{ $pokemon->species_id }}</td>
                              <td>{{ $pokemon->height }}</td>
                              <td>{{ $pokemon->weight }}</td>
                              <td>{{ $pokemon->base_experience }}</td>
                              <td>{{ $pokemon->order }}</td>
                              <td>
                                <a class="btn btn-sm btn-primary text-white" data-toggle="modal" data-target="#Modal-{{$pokemon->id}}">Edit</a>
                              </td>
                              <td>
                                <a class="btn btn-sm btn-primary text-white" href="/pokemon/find/{{$pokemon->id}}">View</a>
                              </td>
                            </tr>
                            @include('layouts.modal.edit', ['id' => $pokemon->id])
                          @endforeach

                        </tbody>
                      </table>
                      
          
                    </div>
                </div>
                  
            </div>
        </div>
    </body>
</html>
