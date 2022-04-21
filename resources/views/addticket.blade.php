@extends('layouts.master')
@section('content')

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-1 px-80  md:gap-6 mt-5">
      {{-- <div class="md:col-span-1 ">

      </div> --}}
      <div class="mt-5 md:mt-0 md:col-span-2">
        <h1 class="p-10 text-sky-400">form ajouter ticket </h1>
        <form action="#" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="Titre" class="block text-sm font-medium text-gray-700">Titre</label>
                  <input type="text" name="Titre" id="Titre" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>




                <div class="col-span-6 sm:col-span-3">
                  <label for="Service" class="block text-sm font-medium text-gray-700">Service</label>
                  <select id="Service" name="Service" autocomplete="Service" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>achat</option>
                    <option>production</option>
                    <option>logistique</option>
                  </select>
                </div>

                <div class="col-span-6">
                    <label for="Question" class="block text-sm font-medium text-gray-700">Question</label>
                    <input type="text" name="Question" id="Question" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>





              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
