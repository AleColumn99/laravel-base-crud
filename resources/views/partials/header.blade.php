<header>

  <div class="container">
  
    <div class="logo">
      <a href="/">
        <img src="{{ asset('img/dc-logo.png') }}" alt="Logo">
      </a>
    </div>

    <div class="menu">
      <ul>
      <li>
          <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}">
            Home
          </a>
        </li>
        <li>
          <a class="{{ (request()->is('characters')) ? 'active' : '' }}" href="{{ url('characters') }}">
            Characters
          </a>
        </li>
        <li>
          <a class="@if ( Request::route()->getName() === 'comics.index') active @endif" href="{{ route('comics.index') }}">
            Comics
          </a>
        </li>
        <li>
          <a class="{{ (request()->is('movies')) ? 'active' : '' }}" href="{{ url('movies') }}">
            Movies
          </a>
        </li>
        <li>
          <a class="{{ (request()->is('tv')) ? 'active' : '' }}" href="{{ url('tv') }}">
            TV
          </a>
        </li>
      </ul>
    </div>

  </div>

</header>