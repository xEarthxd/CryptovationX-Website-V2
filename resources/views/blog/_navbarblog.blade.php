<header>
    <nav class="navbar navbar-fixed-top navbar.navbar-default bg-white navbar-shadow">
        <div class="container container-fluid">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar navbar-toggle collapsed mobile-bar" data-toggle="collapse" data-target="#navbar-top-toggle"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand-mat " data-id="home" href="{{ action('PagesController@getIndex') }}">
                        <img width="50" id="x-logo" src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/logos/Token.png">
                    </a>
                </div>
                <div class="top-right links">
                    <div class="collapse navbar-collapse" id="navbar-top-toggle">
                        <ul class="nav navbar-nav navbar-right header-nav">
                            <li>
                                <a href="{{ action('PagesController@getIndex') }}" id="Home" style="color:#000;">Home</a>
                            </li>
                            <li>
                                <a href=" {{ asset('whitepaper.pdf') }} " id="White Paper Bar" style="color:#000;" target="_blank">White Paper</a>
                            </li>

                            <li>
                                <a href="{{ action('PagesController@getBlog') }}" style="color:#000;" id="blog">Blog</a>
                            </li>
                            <li>
                                <a href="https://v2.cryptovationx.io/login" style="color:#000;" id="login" target="_blank">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="navbar-inverse">
        <div class="container container-fluid">
            <div class=" row">
                <div class="navbar-header">
                    <button type="button" class=" navbar navbar-toggle collapsed mobile-bar" data-toggle="collapse" data-target="#navbar-2top-toggle"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand-mat " data-id="home" href="/blog">
                        <img width="50" id="x-logo" src="/images/blog.png">
                    </a>
                </div>
                <div class="links">
                    <div class="collapse navbar-collapse navbar-inverse" id="navbar-2top-toggle">
                        <ul class="nav navbar-nav header-nav">
                            <li> <a href="#" id="Home" style="color:#fff;">News</a> </li>
                            <li><a href="#"  style="color:#fff;" >Feature</a> </li>
                            <li><a href="#" style="color:#fff;" id="blog">CXA</a> </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            </div>
        </div>
    </nav>
</header>