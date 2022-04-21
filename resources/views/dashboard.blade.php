

    @extends('layouts.master')
    @section('content')

  <!-- you can clone or fork the repo if you want -->
<!-- https://github.com/bluebrown/tailwind-zendesk-clone   -->

<div class="h-full w-full flex overflow-hidden antialiased text-gray-800 bg-white">
  <!-- section body side nav -->
  <nav aria-label="side bar" aria-orientation="vertical" class="flex-none flex flex-col items-center text-center bg-teal-900 text-gray-400 border-r">


    <ul>
      <li>
        <a title="Home" href="#home" class="h-16 px-6 flex items-center text-white bg-teal-700 w-full">
          <i class="mx-auto">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M12 6.453l9 8.375v9.172h-6v-6h-6v6h-6v-9.172l9-8.375zm12 5.695l-12-11.148-12 11.133 1.361 1.465 10.639-9.868 10.639 9.883 1.361-1.465z" />
            </svg>
          </i>
        </a>
      </li>
      <li>
        <a title="Views" href="#views" class="h-16 px-6 flex items-center hover:text-white w-full">
          <i class="mx-auto">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M18.546 3h-13.069l-5.477 8.986v9.014h24v-9.014l-5.454-8.986zm-3.796 12h-5.5l-2.25-3h-4.666l4.266-7h10.82l4.249 7h-4.669l-2.25 3zm-9.75-4l.607-1h12.787l.606 1h-14zm12.18-3l.607 1h-11.573l.607-1h10.359zm-1.214-2l.606 1h-9.144l.607-1h7.931z" />
            </svg>
          </i>
        </a>
      </li>
      <li>
        <a title="Customer Lists" href="#customer-lists" class="h-16 px-6 flex items-center hover:text-white w-full">
          <i class="mx-auto">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z" />
            </svg>
          </i>
        </a>
      </li>
      <li>
        <a title="Reporting" href="#reporting" class="h-16 px-6 flex items-center hover:text-white w-full">
          <i class="mx-auto">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M5 19h-4v-4h4v4zm6 0h-4v-8h4v8zm6 0h-4v-13h4v13zm6 0h-4v-19h4v19zm1 2h-24v2h24v-2z" />
            </svg>
          </i>
        </a>
      </li>
      <li>
        <a title="Admin" href="#admin" class="h-16 px-6 flex items-center hover:text-white w-full">
          <i class="mx-auto">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M24 13.616v-3.232c-1.651-.587-2.694-.752-3.219-2.019v-.001c-.527-1.271.1-2.134.847-3.707l-2.285-2.285c-1.561.742-2.433 1.375-3.707.847h-.001c-1.269-.526-1.435-1.576-2.019-3.219h-3.232c-.582 1.635-.749 2.692-2.019 3.219h-.001c-1.271.528-2.132-.098-3.707-.847l-2.285 2.285c.745 1.568 1.375 2.434.847 3.707-.527 1.271-1.584 1.438-3.219 2.02v3.232c1.632.58 2.692.749 3.219 2.019.53 1.282-.114 2.166-.847 3.707l2.285 2.286c1.562-.743 2.434-1.375 3.707-.847h.001c1.27.526 1.436 1.579 2.019 3.219h3.232c.582-1.636.75-2.69 2.027-3.222h.001c1.262-.524 2.12.101 3.698.851l2.285-2.286c-.744-1.563-1.375-2.433-.848-3.706.527-1.271 1.588-1.44 3.221-2.021zm-12 2.384c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z" />
            </svg>
          </i>
        </a>
      </li>
    </ul>

    <div class="mt-auto h-16 flex items-center w-full">
      <img style="filter: invert(85%);" class="h-8 w-10 mx-auto" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/chi.png" />
    </div>
  </nav>

  <div class="flex-1 flex flex-col">
    <!-- section body top nav -->
    <nav aria-label="top bar" class="flex-none flex justify-between bg-white h-16">
      <!-- top bar left -->
      <ul aria-label="top bar left" aria-orientation="horizontal" class="flex">
        <!-- add button -->
        <li class="group relative">
          <button aria-controls="add" aria-expanded="false" aria-haspopup="listbox" class="flex items-center h-full px-4 text-sm">
            <i>
              <svg class="fill-current w-3 h-3 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M24 10h-10v-10h-2v10h-10v2h10v10h2v-10h10z" />
              </svg>
            </i>
            <span class="ml-2">Add</span>
          </button>
          <span class="absolute p-1 hidden group-hover:block">
            <ul id="add" role="listbox" class="outline-none py-2 bg-white border rounded-md w-screen max-w-md w-dropdown-large shadow-lg focus:outline-none leading-relaxed">
              <li role="separator" class="mb-2">
                <label class="block px-4 py-3 font-semibold">
                  New
                </label>
                <hr />
              </li>
              <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                {{-- <a href="{{ route('addticket') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
                Ticket
              {{-- </a> --}}
              </li>
              <li role="option" class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer">
                User
              </li>
            </ul>
          </span>
        </li>
      </ul>

      <!-- to bar right  -->
      <ul aria-label="top bar right" aria-orientation="horizontal" class="px-8 flex items-center">
        <li class="relative">
          <input title="Search Bar" aria-label="search bar" role="search" class="pr-8 pl-4 py-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out focus:border-black focus:cursor-text w-4 focus:w-64 placeholder-transparent focus:placeholder-gray-500" type="text" placeholder="Search Chi Desk Support" />
          <i class="pointer-events-none absolute top-0 right-0 h-full flex items-center pr-3">
            <svg class="fill-current w-4 h-4 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z" />
            </svg>
          </i>
        </li>

        <li class="h-8 w-8 ml-3">
          <button title="Notifications" aria-label="notifications" class="w-full h-full text-white bg-gray-600 rounded-md focus:outline-none focus:shadow-outline">
            <i>
              <svg class="fill-current w-4 h-4 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.137 3.945c-.644-.374-1.042-1.07-1.041-1.82v-.003c.001-1.172-.938-2.122-2.096-2.122s-2.097.95-2.097 2.122v.003c.001.751-.396 1.446-1.041 1.82-4.667 2.712-1.985 11.715-6.862 13.306v1.749h20v-1.749c-4.877-1.591-2.195-10.594-6.863-13.306zm-3.137-2.945c.552 0 1 .449 1 1 0 .552-.448 1-1 1s-1-.448-1-1c0-.551.448-1 1-1zm3 20c0 1.598-1.392 3-2.971 3s-3.029-1.402-3.029-3h6z" />
              </svg>
            </i>
          </button>
        </li>




      </ul>
    </nav>

    <!-- section body header -->
    <header aria-label="page caption" class="flex-none flex h-16 bg-gray-100 border-t px-4 items-center">
      <h1 id="page-caption" class="font-semibold text-lg">Dashboard USER</h1>
    </header>

    <!-- main content -->
    <main class="flex-grow flex min-h-0 border-t">
      <!-- section update to tickets -->
      <section class="flex flex-col p-4 w-full max-w-sm flex-none bg-gray-100 min-h-0 overflow-auto">
        <h1 class="font-semibold mb-3">
          Updates to your tickets
        </h1>
        <ul>
          <li>
            <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
              <span class="flex-none pt-1 pr-2">
                <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
              </span>
              <div class="flex-1">
                <header class="mb-1">
                  Tarun T <span class="font-semibold">commented</span> on
                  <h1 class="inline">"RE: WPMS issue".</h1>
                </header>
                <p class="text-gray-600">
                  Hi Mazhar, Please note this issue comes when user is not
                  closing or logout sy…
                </p>
                <footer class="text-gray-500 mt-2 text-sm">
                  Friday 22:16
                </footer>
              </div>
            </article>
          </li>
          <li>
            <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
              <span class="flex-none pt-1 pr-2">
                <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
              </span>
              <div class="flex-1">
                <header class="mb-1">
                  Tarun T <span class="font-semibold">commented</span> on
                  <h1 class="inline">"RE: WPMS issue".</h1>
                </header>
                <p class="text-gray-600">
                  Hi Mazhar, Please note this issue comes when user is not
                  closing or logout sy…
                </p>
                <footer class="text-gray-500 mt-2 text-sm">
                  Friday 22:16
                </footer>
              </div>
            </article>
          </li>
          <li>
            <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
              <span class="flex-none pt-1 pr-2">
                <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
              </span>
              <div class="flex-1">
                <header class="mb-1">
                  Tarun T <span class="font-semibold">commented</span> on
                  <h1 class="inline">"RE: WPMS issue".</h1>
                </header>
                <p class="text-gray-600">
                  Hi Mazhar, Please note this issue comes when user is not
                  closing or logout sy…
                </p>
                <footer class="text-gray-500 mt-2 text-sm">
                  Friday 22:16
                </footer>
              </div>
            </article>
          </li>
          <li>
            <article tabindex="0" class="cursor-pointer border rounded-md p-3 bg-white flex text-gray-700 mb-2 hover:border-green-500 focus:outline-none focus:border-green-500">
              <span class="flex-none pt-1 pr-2">
                <img class="h-8 w-8 rounded-md" src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
              </span>
              <div class="flex-1">
                <header class="mb-1">
                  Tarun T <span class="font-semibold">commented</span> on
                  <h1 class="inline">"RE: WPMS issue".</h1>
                </header>
                <p class="text-gray-600">
                  Hi Mazhar, Please note this issue comes when user is not
                  closing or logout sy…
                </p>
                <footer class="text-gray-500 mt-2 text-sm">
                  Friday 22:16
                </footer>
              </div>
            </article>
          </li>







        </ul>
      </section>

      <!-- section content -->
      <section aria-label="main content" class="flex min-h-0 flex-col flex-auto border-l">
        <!-- content navigation -->
        <nav class="bg-gray-100 flex p-4">

          <!-- stats nav -->
          <section aria-labelledby="ticket-statistics-tabs-label" class="pb-2">
            <label id="ticket-statistics-tabs-label" class="font-semibold block mb-1 text-sm">Ticket Statistics
              <span class="font-normal text-gray-700">(this week)</span></label>
            <ul class="flex">
              <li>
                <button class="focus:outline-none focus:bg-yellow-200 p-2 rounded-l-md border border-r-0 bg-white flex flex-col items-center w-24">
                  <p class="font-semibold text-lg">16</p>
                  <p class="uppercase text-gray-600 text-sm">
                    good
                  </p>
                </button>
              </li>
              <li>
                <button class="focus:outline-none focus:bg-yellow-200 p-2 border border-r-0 bg-white flex flex-col items-center w-24">
                  <p class="font-semibold text-lg">2</p>
                  <p class="uppercase text-gray-600 text-sm">
                    bad
                  </p>
                </button>
              </li>

              <li>
                <button class="focus:outline-none focus:bg-yellow-200 p-2 border rounded-r-md bg-white flex flex-col items-center w-24">
                  <p class="font-semibold text-lg">32</p>
                  <p class="uppercase text-gray-600 text-sm">
                    solved
                  </p>
                </button>
              </li>
            </ul>
          </section>
        </nav>

        <!-- content caption -->
        <header class="bg-white border-t flex items-center py-1 px-4">
          <div class="flex">
            <h2 id="content-caption" class="font-semibold">
              Tickets requiring your attention (6)
            </h2>
            <span class="ml-3 group relative">

              <div role="tooltip" id="info-popup" class="absolute pt-1 rounded-md rounded-t-lg right-0 transform translate-x-40 mx-auto hidden group-hover:block z-50">
                <div class="border rounded-md rounded-t-lg shadow-lg bg-white w-full max-w-xs w-screen">
                  <header class="font-semibold rounded-t-lg bg-gray-300 px-4 py-2">
                    People are waiting for replies!
                  </header>
                  <div class="p-4 border-t">
                    <p class="mb-4">
                      These are new or open tickets that are assigned to
                      you, unassinged in your group(s) or not assigned to
                      any group.
                    </p>
                    <p class="mb-1">
                      They are ordered by priority and requester update date
                      (oldest first).
                    </p>
                  </div>
                </div>
              </div>
            </span>
          </div>

        </header>

        <!-- content overflow section
                remove table and thead but keep tbody and change tbody to section, in order
                to have scrollable overflow section -->
        <table aria-describedby="info-popup" aria-label="open tickets" class="border-t w-full min-h-0 h-full flex flex-col">
          <thead class="flex w-full flex-col px-4">
            <tr class="border-b flex">

              <th class="font-semibold text-left py-3 px-1 w-24 truncate">
                ID
              </th>
              <th class="font-semibold text-left py-3 px-1 w-full max-w-xs xl:max-w-lg truncate">
               Titre
              </th>
              <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                Service
              </th>
              <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
               Question
              </th>
              <th class="font-semibold text-left py-3 px-1 flex-1 truncate">
                idUser
              </th>

            </tr>
          </thead>
          <tbody class="flex w-full flex-col flex-1 min-h-0 overflow-hidden px-4">
            <!-- low -->

                @foreach ($tickets as $ticket)
                <tr class=" border-b flex">
                <td class="text-left py-3 px-1 flex-1">{{$ticket->id}}</td>
                <td class="text-left py-3 px-1 flex-1">{{$ticket->titre}}</td>
                <td class="text-left py-3 px-1 flex-1">{{$ticket->service}}</td>
                <td class="text-left py-3 px-1 flex-1">{{$ticket->quetion}}</td>
                <td class="text-left py-3 px-1 flex-1">{{$ticket->iduser}}</td>
            </tr>
                @endforeach


            {{-- {{print_r($tickets)}} --}}
          </tbody>
        </table>






















        <!-- content footer, currently hidden -->
        <footer aria-label="content footer" class="flex p-3 bg-white border-t hidden">
          footer
        </footer>
      </section>
    </main>
  </div>
</div>

@endsection

