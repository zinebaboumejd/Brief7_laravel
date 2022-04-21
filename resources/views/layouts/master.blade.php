<x-app-layout>
    <x-slot name="header">

    </x-slot>

<!DOCTYPE html>
<html class="h-full" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="./tailwind.css" />
    <title>Chi Desk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <style>
      html {
        font-size: 14px;
        line-height: 1.285;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Arial,
          sans-serif;
      }
      html, body {
        width: 100%;
        height: 100%;
      }

      /* can be configured in tailwind.config.js */
      .group:hover .group-hover\:block {
        display: block;
      }

      .focus\:cursor-text:focus {
        cursor: text;
      }

      .focus\:w-64:focus {
        width: 16rem;
      }

      /* zendesk styles */
      .h-16 {
        height: 50px;
      }
      .bg-teal-900 {
        background: #03363d;
      }
      .bg-gray-100 {
        background: #f8f9f9;
      }
      .hover\:border-green-500:hover {
        border-color: #78a300;
      }
    </style>
  </head>

<body>

@yield('content')

</body>
</html>
</x-app-layout>

