      <div class="flex space-x-5">
          {{-- <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
              href="http://127.0.0.1:8000/login">
              Login
          </a>
          <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
              href="http://127.0.0.1:8000/register">
              Register
          </a> --}}
          <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
              {{ __('Login') }}
          </x-nav-link>
          <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
              {{ __('Register') }}
          </x-nav-link>
      </div>
