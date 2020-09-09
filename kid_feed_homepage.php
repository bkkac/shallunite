<?php
$page_handle = 'kid_feed_homepage';
include ('./elements/head.php');
include ('./elements/kid_header.php');
?>
<div class="container">
    <div class="row flex-column flex-md-row">
        <?php include ('./elements/kid_left_sidebar.php'); ?>
        <main class="col">
            <div class="row">

                <div class="col">
                    <div class="create-post">
                        <h5>Create Post</h5>
                        <div class="msg">
                            <img src="/images/example/kid-thinking-sss.png" alt=""/>
                            <textarea placeholder="What's going on?"></textarea>
                        </div>
                        <div class="tools">
                            <button class="photo-video"><i></i><span>Photo/Video</span></button>
                            <button class="checkin"><i></i><span>Checkin</span></button>
                            <button class="etc"><i></i></button>
                        </div>
                    </div>
                    <!-- end create post /-->
                    <div class="greeting">
                        <div class="bg"></div>
                        <div class="bg-shadow"></div>
                        <div class="msg d-flex flex-column flex-md-row">
                            <div class="text col">
                                <i></i>
                                <h2>Good Morning,<br />Sam Boyd</h2>
                            </div>
                            <div class="img col">
                                <img src="/images/example/boyd.png" alt=""/>
                            </div>
                        </div>
                    </div>
                    <!-- end greeting //-->

                    <div class="feeds">
                        <div class="feed">
                           <div class="user">
                               <a href="#" class="img"><img src="/images/example/feed-user1.png" alt=""/></a>
                               <h3><a href="#">Louis Morales</a><small>Yesterday at 3:06 PM</small></h3>
                               <a href="#" class="options"><i></i></a>
                           </div>
                            <div class="msg">
                                Pain can be defined quite simply as a symptom of some physical hurt or disorder, an affliction or an emotional distress. Mild pain can be treated in many ways … over the counter drugs and balms.
                            </div>
                            <div class="image">
                                <img src="/images/example/feed-image1.png" alt="" />
                            </div>
                            <div class="react">
                                <div class="static">
                                    <div class="like"><i></i><span>23k</span></div>
                                    <div class="comment"><span>234 Comments</span></div>
                                    <div class="shares"><span>56 Shares</span></div>
                                </div>
                                <div class="action">
                                    <div class="like"><i></i><span>Like</span></div>
                                    <div class="comment"><i></i><span>Comment</span></div>
                                    <div class="share"><i></i><span>Share</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="feed">
                            <div class="user">
                                <a href="#" class="img"><img src="/images/example/feed-user2.png" alt=""/></a>
                                <h3><a href="#">Louis Morales</a><small>Yesterday at 3:06 PM</small></h3>
                                <a href="#" class="options"><i></i></a>
                            </div>
                            <div class="msg">
                                Pain can be defined quite simply as a symptom of some physical hurt or disorder, an affliction or an emotional distress. Mild pain can be treated in many ways … over the counter drugs and balms.
                            </div>
                            <div class="image">
                                <img src="/images/example/feed-image2.png" alt="" />
                            </div>
                            <div class="react">
                                <div class="static">
                                    <div class="like"><i></i><span>23k</span></div>
                                    <div class="comment"><span>234 Comments</span></div>
                                    <div class="shares"><span>56 Shares</span></div>
                                </div>
                                <div class="action">
                                    <div class="like"><i></i><span>Like</span></div>
                                    <div class="comment"><i></i><span>Comment</span></div>
                                    <div class="share"><i></i><span>Share</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="feed">
                            <div class="user">
                                <a href="#" class="img"><img src="/images/example/feed-user3.png" alt=""/></a>
                                <h3><a href="#">Louis Morales</a><small>Yesterday at 3:06 PM</small></h3>
                                <a href="#" class="options"><i></i></a>
                            </div>
                            <div class="msg">
                                Pain can be defined quite simply as a symptom of some physical hurt or disorder, an affliction or an emotional distress. Mild pain can be treated in many ways … over the counter drugs and balms.
                            </div>
                            <div class="image">
                                <img src="/images/example/feed-image3.png" alt="" />
                            </div>
                            <div class="react">
                                <div class="static">
                                    <div class="like"><i></i><span>23k</span></div>
                                    <div class="comment"><span>234 Comments</span></div>
                                    <div class="shares"><span>56 Shares</span></div>
                                </div>
                                <div class="action">
                                    <div class="like"><i></i><span>Like</span></div>
                                    <div class="comment"><i></i><span>Comment</span></div>
                                    <div class="share"><i></i><span>Share</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="feed footer">
                            <div class="xl"></div>
                            <div class="x"></div>
                            <div class="l"></div>
                        </div>

                    </div>
                    <!-- end feeds /-->

                </div>
                <!-- end col left /-->
                <div class="col">
                    <div class="story">
                        <h5><span>Story</span><a href="#">See All</a></h5>
                        <div class="list">
                            <a href="#" class="your-story">
                                <span class="img"><i></i></span>
                                <span class="name">Your story</span>
                            </a>

                            <a href="#">
                                <span class="img"><img src="/images/example/story1.png" alt="" /></span>
                                <span class="name">Allen Hampton</span>
                            </a>

                            <a href="#">
                                <span class="img"><img src="/images/example/story2.png" alt="" /></span>
                                <span class="name">Floyd Knight</span>
                            </a>

                            <a href="#">
                                <span class="img"><img src="/images/example/story1.png" alt="" /></span>
                                <span class="name">Isaiah Baker</span>
                            </a>

                        </div>
                    </div>
                    <!-- end story //-->

                    <div class="classrooms">
                        <div class="title">
                            <h5>Classrooms</h5>
                            <p>This week</p>
                        </div>
                        <ul>
                            <li>
                                <a href="#">History</a>
                                <p class="img">
                                    <img src="/images/example/classroom1.png" alt=""/>
                                </p>
                                <p class="create">
                                    <span class="day mon">Mon</span>
                                    <span class="time">9:00 am</span>
                                </p>
                            </li>
                            <li>
                                <a href="#">Mathematics</a>
                                <p class="img">
                                    <img src="/images/example/classroom2.png" alt=""/>
                                </p>
                                <p class="create">
                                    <span class="day mon">Mon</span>
                                    <span class="time">9:00 am</span>
                                </p>
                            </li>
                            <li>
                                <a href="#">Mathematics</a>
                                <p class="img">
                                    <img src="/images/example/classroom3.png" alt=""/>
                                </p>
                                <p class="create">
                                    <span class="day tue">TUE</span>
                                    <span class="time">9:00 am</span>
                                </p>
                            </li>
                            <li>
                                <a href="#">Basketball</a>
                                <p class="img">
                                    <img src="/images/example/classroom4.png" alt=""/>
                                </p>
                                <p class="create">
                                    <span class="day wed">WED</span>
                                    <span class="time">9:00 am</span>
                                </p>
                            </li>
                            <li>
                                <a href="#">Biology</a>
                                <p class="img">
                                    <img src="/images/example/classroom5.png" alt=""/>
                                </p>
                                <p class="create">
                                    <span class="day wed">WED</span>
                                    <span class="time">9:00 am</span>
                                </p>
                            </li>
                        </ul>
                        <a href="#" class="view-all">View all this week <i></i></a>
                    </div>
                    <!-- end classrooms //-->
                    <div class="due-work">
                        <h5 class="title">
                            <i></i>
                            <span>Due work</span>
                        </h5>
                        <ul>
                            <li>
                                <a href="#">History</a>
                                <i class="yellow"></i>
                                <p class="create">
                                    <span class="day">21 Jul 2020</span>
                                </p>
                            </li>
                            <li>
                                <a href="#">Fundamental science</a>
                                <i class="pink"></i>
                                <p class="create">
                                    <span class="day">21 Jul 2020</span>
                                </p>
                            </li>
                            <li class="submit-upload">
                                <a href="#"><i></i><span>Submission Upload</span></a>
                            </li>
                            <li>
                                <a href="#">Basketball</a>
                                <i class="green"></i>
                                <p class="create">
                                    <span class="day">21 Jul 2020</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- end duework /-->
                    <div class="school-notice">
                        <div class="title">
                            <h3>School Notice</h3>
                            <div class="date-filter">
                                <i></i>
                                <p>Today</p>
                            </div>
                        </div>
                        <div class="notice">
                            <h5><i></i>19 Jun 2020</h5>
                            <p>Pain can be defined quite simply as a symptom of some physical hurt or disorder, an affliction or an emotional distress. Mild pain can be treated in many ways … over the counter drugs and balms.</p>
                        </div>
                        <nav>
                            <a href="#" class="left"><i></i></a>
                            <div class="pager">
                                <a href="#"><i></i></a>
                                <a href="#"><i></i></a>
                                <a href="#"><i></i></a>
                            </div>
                            <a href="#" class="right"><i></i></a>
                        </nav>
                    </div>
                    <!-- end school-notice /-->
                    <?php include ('./elements/footer.php'); ?>
                </div>
                <!-- end col right /-->
            </div>
            <!-- end row /-->
        </main>
        <?php include ('./elements/kid_right_sidebar.php'); ?>
    </div>
</div>


<?php include ('./elements/footer_bottom.php'); ?>
