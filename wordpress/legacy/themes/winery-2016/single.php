<?php get_header(); ?>

<section id="blog-entry">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article>
                    <figure>
                        <img alt="" class="img-responsive" src="http://placehold.it/1500x1000">
                    </figure>

                    <div class="entry-meta">
                        <span class="fa fa-file-text primary"></span> Publicado en <strong><?php echo the_category(); ?></strong> por <em> <?php echo get_the_author_meta(); ?></em> el
                        <span> <?php echo get_the_date( 'd-m-Y' );?></span>
                    </div><span class="separator"></span>

                    <h1><?php the_title(); ?></h1>

                    <?php the_content(); ?>
                </article>

                <div id="comments">
                    <h2>Comentarios</h2><span class="separator"></span>

                    <div class="comment clearfix">
                        <a href="#"><img alt="" class="img-responsive img-circle comment-avatar" src="http://placehold.it/96x96"></a>

                        <h4 class="comment-author"><a href="#">Taylor Swift</a></h4><span class="comment-meta">December 06th, 2014 at 10:01 am</span>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper lorem urna, vitae sodales nisl pretium nec. Ut sed lacus sagittis, commodo tortor eu, sodales erat.</p><button class="btn btn-primary btn-xs pull-right">Reply</button>
                    </div>

                    <div class="comment clearfix comment-reply">
                        <a href="#"><img alt="" class="img-responsive img-circle comment-avatar" src="http://placehold.it/96x96"></a>

                        <h4 class="comment-author"><a href="#">Kenny Chesney</a></h4><span class="comment-meta">December 06th, 2014 at 10:01 am</span>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper lorem urna, vitae sodales nisl pretium nec. Ut sed lacus sagittis, commodo tortor eu, sodales erat.</p><button class="btn btn-primary btn-xs pull-right">Reply</button>
                    </div>

                    <div class="comment clearfix">
                        <a href="#"><img alt="" class="img-responsive img-circle comment-avatar" src="http://placehold.it/96x96"></a>

                        <h4 class="comment-author"><a href="#">Toby Keith</a></h4><span class="comment-meta">December 06th, 2014 at 10:01 am</span>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper lorem urna, vitae sodales nisl pretium nec. Ut sed lacus sagittis, commodo tortor eu, sodales erat.</p><button class="btn btn-primary btn-xs pull-right">Reply</button>
                    </div>

                    <div id="comment-form">
                        <h2>Add a comment</h2><span class="separator"></span>

                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label> <input class="form-control" id="email" placeholder="Email" type="email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label> <input class="form-control" id="name" placeholder="Name" type="text">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="comment-txt">Comment</label> 
                                        <textarea class="form-control" id="comment-txt" placeholder="Write comment" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit"><span class="btn-label">Comment</span><span class="btn-icon fa fa-comment"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <ul class="list-group widget">
                    <li class="list-group-item style-2 list-group-label">Categories</li>

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
                    <li class="list-group-item style-2 list-group-label">Lastest News</li>

                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-newspaper-o"></span> New Chateau Pinot Noir awarded as "Best America Wine"</a>
                    </li>

                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-newspaper-o"></span> Chateau Wine Expo counts more than 100,000 visitors this month</a>
                    </li>

                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-newspaper-o"></span> Wine 101 - episode 3: How to correctly taste white whine</a>
                    </li>

                    <li class="list-group-item style-2">
                        <a href="#"><span class="fa fa-newspaper-o"></span> Hollywood Star Russel Crowe came to visit Chateau Wine Estate</a>
                    </li>
                </ul>

                <ul class="list-group widget list-icon-left no-mar-v">
                    <li class="list-group-item style-2 list-group-label">Photo stream</li>
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
        </div>
    </div>
</section>

<?php get_footer(); ?>