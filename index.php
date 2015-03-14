<?php include('header.php') ?>

<main>
    <?php $x = 1; while($x <= 3) { ?>
    
    <article id="{pageid}">
        <header>
            <h2>Article Title <?php echo $x ?></h2>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta non perspiciatis odit neque, impedit cum. Nulla reprehenderit quam incidunt, asperiores ex recusandae a consequuntur ducimus error facere, officia, quasi consequatur.</p>
    </article>

    <?php  $x++; } ?>
</main>

<?php include('footer.php') ?>