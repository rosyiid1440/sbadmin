<li class="nav-item {{ (request()->is('example')) ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('example') }}">
        <i class="fas fa-calendar-week"></i>
      <span>Example</span>
    </a>
</li>