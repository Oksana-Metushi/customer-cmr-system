<nav id="header" class="w-full z-30 top-0 pt-4 px-4">
  <div class="lg:flex lg:flex-inline items-center">
    <div class="flex flex-inline justify-between">
      <div class="w-48">
        <a class="text-purple-600 font-semibold text-2xl md:text-3xl" href="{{ url('/home') }}">
          CRM - System
        </a>
      </div>
      <div class="block lg:hidden pr-4">
        <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
    </div>
    <div class="w-full lg:flex lg:items-center hidden mt-2 lg:mt-0 bg-transparent text-black z-20" id="nav-content">
      <ul class="list-reset lg:flex justify-end flex-1 items-center lg:space-x-10">
        @guest
        @if (Route::has('login'))
        <li class="mr-3">
          <a class="inline-block text-gray-600 text-xl font-semibold no-underline hover:text-purple-600 hover:text-underline py-2 px-4" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="mr-3">
          <a class="inline-block text-gray-600 text-xl font-semibold no-underline hover:text-purple-600 hover:text-underline py-2 px-4" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        @include('layouts.inc.searchbar')
        <div>
          <ul class="list-reset lg:flex justify-end items-center mt-2">
            <li>
              <a class="inline-block text-gray-600 text-xl font-semibold no-underline hover:text-purple-600 hover:text-underline py-2 px-4" href="{{ url('customer') }}">Customers</a>
            </li>
            <li>
              <a class="inline-block text-gray-600 text-xl font-semibold no-underline hover:text-purple-600 hover:text-underline py-2 px-4" href="{{ url('contact') }}">Contacts</a>
            </li>
            <li class="mr-3 my-3 md:my-0">
              <div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out'">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
        @endguest
      </ul>
    </div>
  </div>
  <hr class="border-b border-gray-100 border-2 opacity-25 md:mt-3 mt-6"/>
</nav>

<script>
  var navMenuDiv = document.getElementById("nav-content");
  var navMenu = document.getElementById("nav-toggle");

  document.onclick = check;

  function check(e) {
    var target = (e && e.target) || (event && event.srcElement);

    if (!checkParent(target, navMenuDiv)) {
      if (checkParent(target, navMenu)) {
        if (navMenuDiv.classList.contains("hidden")) {
          navMenuDiv.classList.remove("hidden");
        } else {
          navMenuDiv.classList.add("hidden");
        }
      } else {
        navMenuDiv.classList.add("hidden");
      }
    }
  }

  function checkParent(t, elm) {
    while (t.parentNode) {
      if (t == elm) {
        return true;
      }
      t = t.parentNode;
    }
    return false;
  }
</script>