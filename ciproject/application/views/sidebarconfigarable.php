<ul class="sidebar navbar-nav">
<?php     
foreach ($pagelist as $row) :

?>

          <li class="nav-item <?php echo $row->page_active; ?>">
          <a class="nav-link" href="<?php echo site_url($row->page_link); ?>">
            <i class="<?php echo $row->symbol; ?>"></i>
            <span><?php echo htmlentities($row->page_name);?> </span>
          </a>
        </li> 

<?php
endforeach;
?>
</ul>


