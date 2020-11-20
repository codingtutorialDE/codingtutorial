<?php get_header();?>

<!-- Überschrift unserer Seite -->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2><?php the_title();?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hier endet die Überschrift unserer Seite -->
<!-- hier beginnt unser Text der Seite -->
<section id="post-234" class="blog_area single-post-area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <!-- hier beginnt unser Text der Seite pages.php -->
                        <?php if (have_posts()) : while(have_posts()) : the_post();?>
                        <?php the_content();?>
                        <?php endwhile; endif;?>
                        <!-- hier endet der Text unserer Seite pages.php -->
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <ul class="social-icons">
                                <p>Teile den Beitrag:</p>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                </li>
                                <li><a href="whatsapp://send?text=Schau dir diesen Artikel an"
                                        data-action="share/whatsapp/share"><i style="font-size: 48px; color: #25d366"
                                            class="fab fa-whatsapp"></i></a></li>
                                <li><a
                                        href="https://twitter.com/home?status=https://www.codingtutorial.de/11-moeglichkeiten-mehr-kommentare-zu-ihren-wordpress-blogbeitraegen-zu-erhalten/"><i
                                            style="font-size: 48px; color: #00acee" class="fab fa-twitter"></i></a></li>
                                <li><a
                                        href="../cdn-cgi/l/email-protection.html#8ae3e4ece5caeff2ebe7fae6efa4e9e5e7b5acf9ffe8e0efe9feb7ace8e5eef3b7e2fefefaf9b0a5a5fdfdfda4e9e5eee3e4edfefffee5f8e3ebe6a4eeefa5bbbba7e7e5efede6e3e9e2e1efe3feefe4a7e7efe2f8a7e1e5e7e7efe4feebf8efa7f0ffa7e3e2f8efe4a7fde5f8eefaf8eff9f9a7e8e6e5ede8efe3fef8ebefedefe4a7f0ffa7eff8e2ebe6feefe4a5"><i
                                            style="font-size: 48px; color: #B23121" class="far fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Schreibe einen Kommentar <small><a
                                    rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond"
                                    style="display:none;">Antworten abbrechen</a></small></h3>
                        <form action="https://www.codingtutorial.de/wp-comments-post.php" method="post" id="commentform"
                            class="comment-form">
                            <p class="comment-notes"><span id="email-notes">Deine E-Mail-Adresse wird nicht
                                    veröffentlicht.</span> Erforderliche Felder sind mit <span class="required">*</span>
                                markiert.</p>
                            <p class="comment-form-comment"><label for="comment">Kommentar</label> <textarea
                                    id="comment" name="comment" cols="45" rows="8" maxlength="65525"
                                    required="required"></textarea></p>
                            <p class="comment-form-author"><label for="author">Name <span
                                        class="required">*</span></label> <input id="author" name="author" type="text"
                                    value="" size="30" maxlength="245" required='required' /></p>
                            <p class="comment-form-email"><label for="email">E-Mail <span
                                        class="required">*</span></label> <input id="email" name="email" type="text"
                                    value="" size="30" maxlength="100" aria-describedby="email-notes"
                                    required='required' /></p>
                            <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url"
                                    type="text" value="" size="30" maxlength="200" /></p>
                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                    name="wp-comment-cookies-consent" type="checkbox" value="yes" /><label
                                    for="wp-comment-cookies-consent">Meinen Namen, E-Mail und Website in diesem Browser
                                    speichern, bis ich wieder kommentiere.</label></p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                    value="Kommentar abschicken" /> <input type='hidden' name='comment_post_ID'
                                    value='234' id='comment_post_ID' />
                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <div id="footer-sidebar" class="widget-area" role="complementary">
                            <aside id="search-3" class="single_sidebar_widget widget widget_search">
                                <h4 class="widget-title">Suche</h4>
                                <form role="search" method="get" id="searchform" class="searchform"
                                    action="https://www.codingtutorial.de/">
                                    <div>
                                        <label class="screen-reader-text" for="s">Suche nach:</label>
                                        <input type="text" value="" name="s" id="s" />
                                        <input type="submit" id="searchsubmit" value="Suche" />
                                    </div>
                                </form>
                            </aside>
                            <aside id="categories-4" class="single_sidebar_widget widget widget_categories">
                                <h4 class="widget-title">Kategorien</h4>
                                <ul>
                                    <li class="cat-item cat-item-11"><a href="../category/bilder/index.html">Bilder</a>
                                        (1)
                                    </li>
                                    <li class="cat-item cat-item-12"><a
                                            href="../category/digitales-marketing/index.html">Digitales Marketing</a>
                                        (1)
                                    </li>
                                    <li class="cat-item cat-item-34"><a
                                            href="../category/e-mail-marketing/index.html">E-Mail Marketing</a> (6)
                                    </li>
                                    <li class="cat-item cat-item-13"><a
                                            href="../category/facebook-marketing/index.html">Facebook Marketing</a> (1)
                                    </li>
                                    <li class="cat-item cat-item-21"><a href="../category/google/index.html">Google</a>
                                        (3)
                                    </li>
                                    <li class="cat-item cat-item-65"><a href="../category/how-to/index.html">How To:</a>
                                        (2)
                                    </li>
                                    <li class="cat-item cat-item-17"><a
                                            href="../category/lernen-sie-seo/index.html">Lernen Sie SEO</a> (7)
                                    </li>
                                    <li class="cat-item cat-item-30"><a
                                            href="../category/marketing/index.html">Marketing</a> (3)
                                    </li>
                                    <li class="cat-item cat-item-99"><a
                                            href="../category/pinterest/index.html">Pinterest</a> (1)
                                    </li>
                                    <li class="cat-item cat-item-73"><a href="../category/seo/index.html">SEO</a> (3)
                                    </li>
                                    <li class="cat-item cat-item-16"><a
                                            href="../category/sicherheit/index.html">Sicherheit</a> (1)
                                    </li>
                                    <li class="cat-item cat-item-92"><a
                                            href="../category/social-media/index.html">Social Media</a> (1)
                                    </li>
                                    <li class="cat-item cat-item-71"><a href="../category/tag-manager/index.html">Tag
                                            Manager</a> (1)
                                    </li>
                                    <li class="cat-item cat-item-106"><a
                                            href="../category/twitter/index.html">Twitter</a> (1)
                                    </li>
                                    <li class="cat-item cat-item-23"><a
                                            href="../category/webmaster-tools/index.html">Webmaster Tools</a> (1)
                                    </li>
                                    <li class="cat-item cat-item-78"><a
                                            href="../category/wordpress/index.html">Wordpress</a> (4)
                                    </li>
                                </ul>
                            </aside>
                            <aside id="recent-comments-3" class="single_sidebar_widget widget widget_recent_comments">
                                <h4 class="widget-title">Kommentare</h4>
                                <ul id="recentcomments"></ul>
                            </aside>
                            <aside id="recent-posts-4" class="single_sidebar_widget widget widget_recent_entries">
                                <h4 class="widget-title">Neueste Beiträge</h4>
                                <ul>
                                    <li>
                                        <a href="../lernen-sie-seo-linkaufbau-part-7/index.html">Lernen Sie SEO &#8211;
                                            Linkaufbau | Part 7</a>
                                    </li>
                                    <li>
                                        <a href="../lernen-sie-seo-keywordrecherche-part-6/index.html">Lernen Sie SEO
                                            &#8211; Keywordrecherche | Part 6</a>
                                    </li>
                                    <li>
                                        <a href="../lernen-sie-seo-ux-seo-part-5/index.html">Lernen Sie SEO &#8211; UX
                                            &#038; SEO | Part 5</a>
                                    </li>
                                    <li>
                                        <a href="../lernen-sie-seo-inhalt-seo-part-4/index.html">Lernen Sie SEO &#8211;
                                            Inhalt &#038; SEO | Part 4</a>
                                    </li>
                                    <li>
                                        <a href="../lernen-sie-seo-on-page-und-technisches-seo-part-3/index.html">Lernen
                                            Sie SEO &#8211; On-Page und technisches SEO | Part 3</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control"
                                        onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                                        onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter email'"
                                        placeholder='Enter email' required
                                        data-cf-modified-be24ddac495d24f9999338d3-="">
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hier endet der Text unserer Seite -->

<?php get_footer();?>