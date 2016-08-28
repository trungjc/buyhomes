
 <div class="slick-top" >
<?php if( have_rows('top_widget', $acfw) ):     while ( have_rows('top_widget', $acfw) ) : the_row(); ?>
  <?php
      $url = get_sub_field('link', $acfw);     
      $name = get_sub_field('name', $acfw); 
      $img= get_sub_field('image', $acfw); 

        ?>  
              <div style="float:left;min-width:200px;">   
               <div class="img-circle">
                  <a class="img" href="<?php echo $url ?>" style="width:100%;height:100%;background-image:url(<?php echo $img['sizes']['medium'] ?>)" >
                  <img style="display:none" src="<?php echo $img['sizes']['medium'] ?>" alt='<?php echo   $img['caption'] ?>' />
                  </a>
               </div>
               <h3 class="heading"><?php echo   $name ?></h3>
               <a href="<?php echo $url ; ?>">Xem tiếp >></a>
             </div>
                
      <?php     endwhile;     endif; ?>

 </div>


