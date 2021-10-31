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
    a {
        text-decoration: none;
    }
    header  {

        background: grey;
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
        height: 800px;
    }

</style>
<body>
    <main>
        <header>
            <div class="text">
                <nav>
                    <ul>
                        <li><a style="color: black" href="/online-market.com">HOME</a></li>
                        <li><a style="color: black" href="">PROFILE</a></li>
                        <li><a style="color: black" href="">ABOUT US</a></li>
                    </ul>
                </nav>
                <p class="h1"><span>ONLINE</span>-MARKET</p>
                <div class="login">
                    <a style="color: black" href="/login">LOG-IN</a>
                    <a style="color: black" href="/signup">SIGN-UP</a>
                </div>
            </div>
        </header>
        <section>
            @yield('content')
        </section>
    </main>
</body>
</html>
