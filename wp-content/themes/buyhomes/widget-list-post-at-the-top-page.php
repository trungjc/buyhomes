
 <div class="slick-top" >
<?php if( have_rows('top_widget', $acfw) ):     while ( have_rows('top_widget', $acfw) ) : the_row(); ?>
  <?php
      $url = get_sub_field('link', $acfw);     
      $name = get_sub_field('name', $acfw); 
      $img= get_sub_field('image', $acfw); 

        ?>  <!--  <?php var_dump($img) ?> -->
              <div style="float:left;min-width:200px;">   
               <div class="img-circle">
                  <a href="<?php echo $url ?>" >
                 <!--  <?php var_dump($img) ?> -->
                  <img src="<?php echo $img['sizes']['medium'] ?>" alt='<?php echo   $img['caption'] ?>' />
                  </a>
               </div>
               <span><?php echo   $name ?></span>
               <a href="<?php echo $url ; ?>">Xem tiếp >></a>
             </div>
                
      <?php     endwhile;     endif; ?>

 </div>


