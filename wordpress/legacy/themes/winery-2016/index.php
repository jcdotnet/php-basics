<?php get_header(); ?>

<section id="blog">
    <div class="container">
        <div class="row">

            <!-- content -->            
                <div class="col-sm-8">
                    <?php while (have_posts()): the_post() ?> 
                        <article class="entry">
                            <figure class="box-1">
                                <a href="<?php the_permalink(); ?>"><img alt="" class="img-responsive" src="http://placehold.it/1500x1000"></a>
                            </figure>
                            <div class="entry-preview clearfix">
                                <div class="entry-date">
                                    <span class="entry-day"><?php echo get_the_time('d') ?></span> <span class="entry-month">Jul</span>
                                </div><span class="entry-category"><?php the_category(); ?></span>
                                <h2>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p>
                                    <?php the_excerpt(); ?>
                                    <a class="primary" href="blog-entry-alternative.html">Leer más</a>
                                </p>
                        </div>
                    </article>
                    <?php endwhile; ?>

                <nav class="text-center">
                  <ul class="pagination-product pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true" class="fa fa-angle-left"></span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true" class="fa fa-angle-right"></span>
                      </a>
                    </li>
                  </ul>
                </nav>		
            </div>
            <!-- /content -->

            <!-- sidebar -->
            <div class="col-sm-4">
                <ul class="list-group widget">
                    <li class="list-group-item style-2 list-group-label">Categories
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-angle-right"></span> Wine News <small>(4)</small></a>
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-angle-right"></span> Wine Events <small>(8)</small></a>
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-angle-right"></span> Wine Tastings <small>(15)</small></a>
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-angle-right"></span> Cellars Visits <small>(16)</small></a>
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-angle-right"></span> Wine Reviews <small>(23)</small></a>
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-angle-right"></span> Best Wines <small>(42)</small></a>
                    </li>
                </ul>

                <ul class="list-group widget list-icon-left">
                    <li class="list-group-item style-2 list-group-label">Lastest News
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-newspaper-o"></span> New Chateau Pinot Noir awarded as "Best 20015 America Red Wine"</a>
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-newspaper-o"></span> Chateau International Wine Expo counts more than 100,000 visitors this month</a>
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-newspaper-o"></span> How to correctly taste white whine</a>
                    </li>
                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-newspaper-o"></span> Hollywood Star Russel Crowe came to visit Chateau Wine Estate</a>
                    </li>
                </ul>

                <ul class="list-group widget list-icon-left no-mar-v">
                    <li class="list-group-item style-2 list-group-label">Photo stream
                    </li>
                </ul>

                <div class="row row-small-gutter">
                    <div class="col-xs-4 col-small-gutter">
                        <a href="#"><img alt="" class="img-responsive img-thumbnail" src="http://placehold.it/200x200"/></a>
                    </div>
                    <div class="col-xs-4 col-small-gutter">
                        <a href="#"><img alt="" class="img-responsive img-thumbnail" src="http://placehold.it/200x200"/></a>
                    </div>
                    <div class="col-xs-4 col-small-gutter">
                        <a href="#"><img alt="" class="img-responsive img-thumbnail" src="http://placehold.it/200x200"/></a>
                    </div>
                    <div class="col-xs-4 col-small-gutter">
                        <a href="#"><img alt="" class="img-responsive img-thumbnail" src="http://placehold.it/200x200"/></a>
                    </div>
                    <div class="col-xs-4 col-small-gutter">
                        <a href="#"><img alt="" class="img-responsive img-thumbnail" src="http://placehold.it/200x200"/></a>
                    </div>
                    <div class="col-xs-4 col-small-gutter">
                        <a href="#"><img alt="" class="img-responsive img-thumbnail" src="http://placehold.it/200x200"/></a>
                    </div>
                    <div class="col-xs-4 col-small-gutter">
                        <a href="#"><img alt="" class="img-responsive img-thumbnail" src="http://placehold.it/200x200"/></a>
                    </div>
                    <div class="col-xs-4 col-small-gutter">
                        <a href="#"><img alt="" class="img-responsive img-thumbnail" src="http://placehold.it/200x200"/></a>
                    </div>
                    <div class="col-xs-4 col-small-gutter">
                        <a href="#"><img alt="" class="img-responsive img-thumbnail" src="http://placehold.it/200x200"/></a>
                    </div>
                </div>
            </div>
            <!-- /sidebar -->

        </div>
    </div>
</section>
               
                
<?php get_footer(); ?>