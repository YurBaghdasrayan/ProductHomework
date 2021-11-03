<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    *   {
        padding: 0;
        margin: 0;
    }
    ul {
        color: #b7dae8;
    }
    a {
        text-decoration: none;
    }
    .login{
        width: 200px;
        display: flex;
        justify-content: space-between;
    }
    header  {

        background: linear-gradient(90deg, rgba(162,220,185,1) 0%, rgba(136,183,171,1) 47%, rgba(183,218,232,1) 100%);
    }
    .text {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 600px;
    }
    .gradient-custom-3 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
    }
    .gradient-custom-4 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }
</style>
<body>
    <main>
        <header>
            <div class="text">
                <nav>
                    <ul>
                        <li><a style="color: #b7dae8" href="/online-market.com">HOME</a></li>
                        <li><a style="color: #b7dae8" href="">PROFILE</a></li>
                        <li><a style="color: #b7dae8" href="">ABOUT US</a></li>
                    </ul>
                </nav>
                <p class="h1" style="color: #b7dae8"><span>ONLINE</span>-MARKET</p>
                <div class="login">
                    <a style="color: #b7dae8;" href="/login">LOG-IN</a>
                    <a style="color: #b7dae8" href="/signup">SIGN-UP</a>
                    @yield('logout', '')

                </div>
            </div>
        </header>
        <section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg')";>
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
            @yield('content')
                </div>
            </div>
        </section>
    </main>
</body>
</html>
