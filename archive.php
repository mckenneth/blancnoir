<?php include('header.php') ?>
<main class="main"> 
    <section class="content">
    <?php $x = 1; while($x <= 10) { ?>
   
        <?php include('content.php') ?>

    <?php  $x++; } ?>
    </section>

    <aside class="sidebar">
    </aside>
</main>
<?php include('footer.php') ?> 