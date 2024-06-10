<div>
    <div class="navbar bg-base-100 border-b">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0"
                     role="button"
                     class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a wire:navigate
                           href="{{ route('teams') }}">Teams</a>
                    </li>
                    <li>
                        <a wire:navigate
                           href="{{ route('games') }}">Games</a>
                    </li>
                    <li>
                        <a wire:navigate
                           href="{{ route('schedule') }}">Schedule</a>
                    </li>
                    <li>
                        <a wire:navigate
                           href="{{ route('home') }}">Table</a>
                    </li>
                </ul>
            </div>
            <a wire:navigate
               href="{{ route('home') }}"
               class="btn btn-ghost text-xl">Tournament</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <a wire:navigate
                       href="{{ route('teams') }}">Teams</a>
                </li>
                <li>
                    <a wire:navigate
                       href="{{ route('games') }}">Games</a>
                </li>
                <li>
                    <a wire:navigate
                       href="{{ route('schedule') }}">Schedule</a>
                </li>
                <li>
                    <a wire:navigate
                       href="{{ route('home') }}">Table</a>
                </li>
            </ul>
        </div>

    </div>
</div>
