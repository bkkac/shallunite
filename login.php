<?php
$page_handle = 'login';
include './elements/head.php';
?>

<main>
    <section class="container">
        <div class="row">
            <div class="login">
                <form action="kid_feed_home.php" method="post">
                    <p class="logo"><img src="images/logo.svg" alt=""/></p>
                    <div class="input">
                        <label>
                            <input type="text" name="username" placeholder="Username"/>
                        </label>
                        <label>
                            <input type="password" name="password" placeholder="Password"/>
                        </label>
                    </div>
                    <button type="submit"><span>Let's Go!</span></button>
                    <p class="forget_password">
                        <a href="#">Forget password</a>
                    </p>
                    <p class="is_parent">
                        <span>Are you a parent?</span>
                        <a href="#">Sign up</a>
                    </p>
                    <p class="invite_parent">
                        <strong>Invite Parent</strong>
                        <button><img src="images/icons/family-yellow.svg" alt="family-icon"/><em></em></button>
                    </p>
                    <p class="copuright">@ 2020 SHALL UNITE PVT., LTD. All right reserved</p>
                </form>
            </div>
            <div class="child">
                <p class="child-01">&nbsp;</p>
                <p class="child-02">&nbsp;</p>
                <p class="child-03">&nbsp;</p>
                <p class="child-04">&nbsp;</p>
                <p class="child-05">&nbsp;</p>
            </div>
        </div>
    </section>
</main>


<div class="invite_parent_popup hide">
    <div class="box">
        <a href="#" class="close"><i>&nbsp;</i></a>
        <h2>
            <img src="images/icons/family-yellow.svg" alt="family-icon"/>
            <span>Invite Parent</span>
        </h2>
        <div class="switch">
            <span>Email</span>
            <button class="switch"><em>&nbsp;</em></button>
            <span>SMS</span>
        </div>
        <form action="#" method="post">
            <label class="email">
                <input type="email" name="email" placeholder="Email"/>
            </label>
            <label class="sms">
                <input type="tel" name="sms" placeholder="Mobile Number"/>
            </label>
            <button type="submit"><span>Submit</span></button>
        </form>
    </div>
</div>



<?php
include './elements/footer.php';
?>


