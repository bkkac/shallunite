<?php
?>

<header>
    <div class="container">
        <div class="row flex-column flex-md-row align-items-center ">
            <a href="/" class="logo"><img  src="/images/logo.svg" alt=""/></a>
            <form method="POST" action="/" class="search col">
                <label>
                    <input type="text" name="keyword" placeholder="Search"/>
                    <button type="submit">submit</button>
                </label>
            </form>
            <div class="language">
                <p>EN</p>
                <div class="language-option hide">
                    <a href="#"  data-lang="en">EN</a>
                    <a href="#"  data-lang="fr">FR</a>
                    <a href="#"  data-lang="th">TH</a>
                </div>
            </div>
            <div class="user">
                <a href="#">
                    <img src="/images/example/Kid-Thinking.png" alt=""/>
                    <span>Sam Boyd</span>
                    <em></em>
                </a>
            </div>
            <div class="divider"></div>
            <div class="misc">
                <a href="#" class="people"></a>
                <a href="#" class="chat"></a>
                <a href="#" class="notify"><span>2</span></a>
            </div>
        </div>
    </div>
</header>

