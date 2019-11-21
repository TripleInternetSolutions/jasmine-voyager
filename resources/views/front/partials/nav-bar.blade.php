<nav class="navbar navbar-expand-md sticky-top align-items-stretch" id="topNav">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="https://placehold.it/40" alt="סטריפל">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse align-items-stretch" id="navbarSupportedContent">
        <ul class="navbar-nav mr-md-5">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    ראשי
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="depsDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    מחלקות
                </a>

                <div class="dropdown-menu" aria-labelledby="despDropdown">
                    <a class="dropdown-item" href="#">
                        התחדשות עירונית
                    </a>
                    <a class="dropdown-item" href="#">
                        שימור
                    </a>
                    <a class="dropdown-item" href="#">
                        יזמות
                    </a>
                    <a class="dropdown-item" href="#">
                        ביצוע
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    ראשי
                </a>
            </li>
        </ul>
    </div>
</nav>