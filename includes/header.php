<header>
    <div class="header-wrapper">
        <nav>
            <ul>
                <li><a href="index.php?page=sport">Sporrt</a></li>
                <li><a href="index.php?page=vrijetijdsbesteding">Vrijetijdsbesteding</a></li>
                <li><a href="index.php?page=game1">Game 1</a></li>
                <li><a href="index.php?page=game2">Game 2</a></li>
            </ul>
        </nav>
    </div>
    <div class="header-image"></div>
</header>
<style>
    header {
        position: relative;
    }

    .header-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline-block;
        margin-right: 10px;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
    }

    .header-image {
        background-image: url("path/to/header-image.jpg");
        background-size: cover;
        height: calc(10vh - 20px); /* 100% viewport height minus the padding */
    }
</style>