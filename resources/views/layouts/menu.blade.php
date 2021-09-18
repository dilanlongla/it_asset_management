
<li class="nav-item">
    <a href="{{ route('equipment.index') }}"
       class="nav-link {{ Request::is('equipment*') ? 'active' : '' }}">
        <p>Equipment</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('states.index') }}"
       class="nav-link {{ Request::is('states*') ? 'active' : '' }}">
        <p>States</p>
    </a>
</li>





<li class="nav-item">
    <a href="{{ route('equipmentStates.index') }}"
       class="nav-link {{ Request::is('equipmentStates*') ? 'active' : '' }}">
        <p>Equipment States</p>
    </a>
</li>


