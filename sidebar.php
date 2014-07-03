<ul id = "chat" class = "chat">

  <?php
  
  if(! function_exists('dynamic_sidebar') ||  ! dynamic_sidebar() ) : ?>
  
  <p> You're dynamic sidebar doesn't have any widgets add them in the admin panel! </p>
  
  <?php endif; ?>
  
  </ul>