<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use frontend\models\Post;
use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

$rs=Post::find()->where(["link"=>$_GET['link']])->one();
?>

        <!-- Content -->
        <div class="verso-content">

            <div class="section">
                <div class="section-background">
                    <div class="section-bg-image section-bg-image-size-cover section-bg-image-position-top section-bg-image-paralax verso-demo-bg-image-02"></div>
                </div>
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <h1 class="display-3 text-uppercase verso-text-light verso-font-weight-300 verso-mt-25 verso-mb-15 verso-opacity-8 verso-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">
                                    <?=$rs->post_title?>
                                    <small class="d-block text-muted"><?=$rs->short_desc?></small>
                                </h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-background" data-section-bg-title="NEWS"></div>
                <div class="section-content">
                    <div class="container">
                        <div class="row verso-py-10">
                            <div class="col-lg-9">
                                <div class="card verso-shadow-15 verso-shadow-hover-20 verso-transition verso-mb-10 verso-os-animation verso-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">

                                    <div class="card-img-container">
                                        <img class="card-img" src="../../../../cluadmin/public_html/uploads/<?=$rs->gambar?>" alt="Card image">
                                    </div>

                                    <!-- <div class="card-block">
                                        <p class="card-text"><?=$rs->post_content?></p>
                                    </div> -->
                                    <div class="card-footer clearfix">
                                        <div class="verso-icon-set verso-icon-set-expandable verso-transition float-right">
                                            <a class="verso-icon-set-item verso-icon-set-item-trigger text-muted" href="1">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                            <a class="verso-icon-set-item verso-icon-set-item-close verso-transition" href="2">
                                                <i class="fa fa-close"></i>
                                            </a>
                                            <a class="verso-icon-set-item text-muted verso-transition" href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a class="verso-icon-set-item text-muted verso-transition" href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a class="verso-icon-set-item text-muted verso-transition" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="verso-icon-set-item text-muted verso-transition" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <h4 class="h4 text-uppercase verso-transition verso-mb-3 verso-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">Author's posts</h4>
                                <div class="row">
                                  <?php $rsx=Post::find()->where(['<>',"link",$_GET["link"]])->all();
                                    foreach($rsx as $rs){
                                  ?>
                                    <div class="col-md-4">
                                        <div class="card verso-shadow-15 verso-shadow-hover-20 verso-transition verso-mb-3 verso-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".4s">
                                            <div class="card-img-container">
                                                <img class="card-img d-block mw-100" src="../../../../cluadmin/public_html/uploads/<?=$rs->gambar?>" alt="Card image">
                                                <div class="card-img-overlay card-img-overlay-fade-to-top card-img-overlay-bottom">
                                                    <h5 class="card-title text-uppercase">
                                                        <a href="<?=Url::to(['site/about','link'=>$rs->link]);?>"><?=$rs->post_title?></a>
                                                    </h5>
                                                    <p class="verso-mb-0 text-truncate font-italic">
                                                        <?=$rs->short_desc?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="col-lg-3 sidebar">
                                <div class="verso-widget">
                                      <p class="card-text"><?=$rs->post_content?></p>
                                </div>

                                <div class="verso-widget widget_categories">
                                    <h4 class="h5 verso-widget-header text-uppercase">Categories</h4>
                                    <ul>
                                        <li>
                                            <a href="blog.html">
                                                Human Resources (3)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog.html">
                                                Web Development (2)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog.html">
                                                Corporate Funding (1)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog.html">
                                                Marketing &amp; Media (3)
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="verso-widget verso-widget-no-padding">
                                    <a href="#">
                                        <img src="https://placehold.it/400x300" alt="image">
                                    </a>
                                </div>
                                <div class="verso-widget widget_recent_entries">
                                    <h4 class="h5 verso-widget-header text-uppercase">Recent Posts</h4>

                                    <ul>
                                        <li class="text-truncate">
                                            <a href="post.html" class="float-left verso-mr-1 verso-widget-image" title="Post title">
                                                <img alt="post image" src="https://placehold.it/100x100">
                                            </a>
                                            <a href="post.html">Corporate Enviroment</a>
                                            <small class="post-date d-block">September 25, 2017</small>
                                        </li>

                                        <li class="text-truncate">
                                            <a href="post.html" class="float-left verso-mr-1 verso-widget-image" title="Post title">
                                                <img alt="post image" src="https://placehold.it/100x100">
                                            </a>
                                            <a href="post.html"> Better Sales</a>
                                            <small class="post-date d-block">June 12, 2017</small>
                                        </li>
                                        <li class="text-truncate">
                                            <a href="post.html" class="float-left verso-mr-1 verso-widget-image" title="Post title">
                                                <img alt="post image" src="https://placehold.it/100x100">
                                            </a>
                                            <a href="post.html">Stronger Leads & new visitors</a>
                                            <small class="post-date d-block">May 05, 2017</small>
                                        </li>
                                    </ul>
                                </div>

                                <div class="verso-widget widget_tag_cloud">
                                    <h4 class="h5 verso-widget-header text-uppercase">Tags</h4>
                                    <ul>
                                        <li>
                                            <a href="blog.html">company</a>
                                        </li>

                                        <li>
                                            <a href="blog.html">leads</a>
                                        </li>

                                        <li>
                                            <a href="blog.html">marketshare</a>
                                        </li>

                                        <li>
                                            <a href="blog.html">events</a>
                                        </li>

                                        <li>
                                            <a href="blog.html">resources</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">capital</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">enviroment</a>
                                        </li>

                                        <li>
                                            <a href="blog.html">offices</a>
                                        </li>

                                        <li>
                                            <a href="blog.html">offshore</a>
                                        </li>

                                        <li>
                                            <a href="blog.html">accounting</a>
                                        </li>
                                    </ul>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
