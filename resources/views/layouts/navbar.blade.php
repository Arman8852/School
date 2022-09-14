<div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg mainmenu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li id='logo'><a href="/" id='logo' > <i class="fa-solid fa-mosque nav-logo" style="padding-right: 25px;font-size:25px;color:black;"></i></a></li>
                         @foreach($data as $key => $value )
                        <li class="active dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$key}}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($value as $district)
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$district}}</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="/profile/জেলা/district/{{$district}}/কওমী">কওমী</a></li>
                                <li><a href="/profile/জেলা/district/{{$district}}/আলিয়া">আলিয়া</a></li>
                                <li><a href="/profile/জেলা/district/{{$district}}/আহলে সুন্নাত">আহলে সুন্নাত</a></li>
                                <li><a href="/profile/জেলা/district/{{$district}}/জামায়েতে ইসলামী">জামায়েতে ইসলামী</a></li>
                                <li><a href="/profile/জেলা/district/{{$district}}/all">সকল ধরনের মাদ্রাসা</a></li>
                                </ul>
                            </li>
                            @endforeach
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">সকল জেলা</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="/profile/বিভাগ/division/{{$key}}/কওমী">কওমী</a></li>
                                <li><a href="/profile/বিভাগ/division/{{$key}}/আলিয়া">আলিয়া</a></li>
                                <li><a href="/profile/বিভাগ/division/{{$key}}/আহলে সুন্নাত">আহলে সুন্নাত</a></li>
                                <li><a href="/profile/বিভাগ/division/{{$key}}/জামায়েতে ইসলামী">জামায়েতে ইসলামী</a></li>
                                <li><a href="/profile/বিভাগ/division/{{$key}}/all">সকল ধরনের মাদ্রাসা</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        @endforeach
                        <li class="nav-item">
                        <a class="nav-link" href="/addprofile">নতুন মাদ্রাসার প্রোফাইল</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>