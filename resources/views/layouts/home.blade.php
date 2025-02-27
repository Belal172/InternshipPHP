<body>
       @include('components.header')

       <main>
           @yield('content')
       </main>

       <footer>
           <p>&copy; {{ date('Y') }} My Laravel App</p>
       </footer>
   </body>
