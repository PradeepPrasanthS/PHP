<?php
    define("TITLE","Team | Pradeep's Fine Dining");

    include('includes/header.php');
?>

    <div id="team-members" class="cf">
        <h1>Our team at Pradeep</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe aut distinctio qui nemo quas sed in fuga unde totam beatae, itaque laborum, sequi eos explicabo! Consequuntur alias, facere dignissimos perspiciatis.<strong>The best food you've ever had. Ever.</strong></p>
        
        <hr>
        
        <?php
            foreach($teamMembers as $member){

        ?>

        <div class="member">
            <img src="img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>">
            <h2><?php echo $member[name]; ?></h2>
            <p><?php echo $member[bio]; ?></p>
        </div>

        <?php
            }
        ?>
        
    </div>
    
    

<?php
    include('includes/footer.php');
?>