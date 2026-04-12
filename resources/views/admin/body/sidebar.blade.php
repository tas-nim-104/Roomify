<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Welcome</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <i class='bx bx-arrow-back'></i>
        </div>
    </div>

    <ul class="metismenu" id="menu">

        <!-- Dashboard -->
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <!-- Team -->
        @if(Auth::user()->can('team.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i></div>
                <div class="menu-title">Manage Teams</div>
            </a>
            <ul>
                @if(Auth::user()->can('team.all') && Route::has('all.team'))
                <li>
                    <a href="{{ route('all.team') }}">
                        <i class='bx bx-radio-circle'></i>All Team
                    </a>
                </li>
                @endif

                @if(Auth::user()->can('team.add') && Route::has('add.team'))
                <li>
                    <a href="{{ route('add.team') }}">
                        <i class='bx bx-radio-circle'></i>Add Team
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif

        <!-- Book Area -->
        @if(Auth::user()->can('bookarea.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i></div>
                <div class="menu-title">Manage Book Area</div>
            </a>
            <ul>
                @if(Auth::user()->can('update.bookarea') && Route::has('book.area'))
                <li>
                    <a href="{{ route('book.area') }}">
                        <i class='bx bx-radio-circle'></i>Update BookArea
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif

        <!-- Room Type -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i></div>
                <div class="menu-title">Manage Room Type</div>
            </a>
            <ul>
                @if(Route::has('room.type.list'))
                <li>
                    <a href="{{ route('room.type.list') }}">
                        <i class='bx bx-radio-circle'></i>Room Type List
                    </a>
                </li>
                @endif
            </ul>
        </li>

        <!-- Booking -->
        <li class="menu-label">Booking Manage</li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i></div>
                <div class="menu-title">Booking</div>
            </a>
            <ul>
                @if(Route::has('booking.list'))
                <li>
                    <a href="{{ route('booking.list') }}">
                        <i class='bx bx-radio-circle'></i>Booking List
                    </a>
                </li>
                @endif

                @if(Route::has('add.room.list'))
                <li>
                    <a href="{{ route('add.room.list') }}">
                        <i class='bx bx-radio-circle'></i>Add Booking
                    </a>
                </li>
                @endif
            </ul>
        </li>

        <!-- Room List -->
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i></div>
                <div class="menu-title">Manage RoomList</div>
            </a>
            <ul>
                @if(Route::has('view.room.list'))
                <li>
                    <a href="{{ route('view.room.list') }}">
                        <i class='bx bx-radio-circle'></i>Room List
                    </a>
                </li>
                @endif
            </ul>
        </li>

        <!-- Settings -->
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-cog'></i></div>
                <div class="menu-title">Setting</div>
            </a>
            <ul>
                @if(Route::has('smtp.setting'))
                <li>
                    <a href="{{ route('smtp.setting') }}">
                        <i class='bx bx-radio-circle'></i>SMTP Setting
                    </a>
                </li>
                @endif
            </ul>
        </li>

    </ul>
</div>