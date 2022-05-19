<aside id="sidebar" role="complementary">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div id="primary">
        <ul class="list-group">
            <?php dynamic_sidebar( 'is_active_sidebar' ); ?>
        </ul>
    </div>
    <?php endif; ?>
</aside>