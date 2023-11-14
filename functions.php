function year_shortcode () {
   $year = date_i18n ('Y');
   return $year;
}
add_shortcode ('year', 'year_shortcode');


/^ Footer Section*/
 $copyright   =   get_field( 'copyright', 'option' );

<div class="pre-footer">
       <?php echo '©'.do_shortcode( '[year]' ) . ' '. $copyright; ?>
</div>
