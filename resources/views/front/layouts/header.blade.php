<ul class="nav secondary-nav alternate">
    <li class="nav-item">  <a class="nav-link {{ Route::is('front.mobile*') ? 'active' : '' }}" href="{{ route('front.mobile') }}"><span><i class="fas fa-mobile-alt"></i></span> Recharge </a>  </li>
    <li class="nav-item">  <a class="nav-link {{ Route::is('front.dth*') ? 'active' : '' }}" href="{{ route('front.dth') }}"><span><i class="fas fa-tv"></i></span> DTH </a>  </li>
    <li class="nav-item">  <a class="nav-link {{ Route::is('front.broadband*') ? 'active' : '' }}" href="{{ route('front.broadband') }}"><span><i class="fas fa-wifi"></i></span> Broadband </a>  </li>
    <li class="nav-item">  <a class="nav-link {{ Route::is('front.cable*') ? 'active' : '' }}" href="{{ route('front.cable') }}"><span><i class="fas fa-plug"></i></span> CableTv </a>  </li>
    <li class="nav-item">  <a class="nav-link {{ Route::is('front.electricity*') ? 'active' : '' }}" href="{{ route('front.electricity') }}"><span><i class="fas fa-lightbulb"></i></span> Electricity </a>  </li>
    <li class="nav-item">  <a class="nav-link {{ Route::is('front.water*') ? 'active' : '' }}" href="{{ route('front.water') }}"><span><i class="fas fa-tint"></i></span> Water </a>  </li>
  </ul>