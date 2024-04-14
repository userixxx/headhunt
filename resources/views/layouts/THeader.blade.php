@section('THeader')
    <nav>
        <div class="fworker"><span>F</span>Worker</div>
        <ul class="menu">
            <li class="menu_item"><a href="{{ route('vacancy') }}" class="menu_link">Вакансии</a></li>
            <li class="menu_item"><a href="{{ route('staff') }}" class="menu_link">Кандидаты</a></li>
            <li class="menu_item"><a href="{{ route('employee') }}" class="menu_link">Сотрудники</a></li>
            <li class="menu_item"><a href="{{ route('messages') }}" class="menu_link">Чат</a></li>
            <li class="menu_item"><a href="#" class="menu_link">Помощь</a></li>
        </ul>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Поиск по навыкам">
        </div>
        <div class="profile">
            <a href="{{ route('messages') }}" class="profile_link">
                <img src="../images/free-icon-chat-bubble-6421255 1.png" alt="" class="profile_messages">
            </a>
            <a href="{{ route('logout') }}" class="profile_link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="../images/free-icon-notification-4387318.png" alt="" class="profile_bell">
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('home') }}" class="profile_link"><img src="../images/logo-icm-2.png" alt="" class="profile_profile_photo"></a>
        </div>
    </nav>
@show
