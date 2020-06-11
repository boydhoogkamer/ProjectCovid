 <?php require __DIR__ . "/../templates/header.php"; ?>


<main>


<?php 
foreach ($posts as $post):
?>

<div class="user_containers">
<div class='user_container'>
<img src="images/uploaded_images/<?php echo $post['user_img'];?>" alt="User Image">
<div class='user_info'>
<p><?php echo $post['user_name'];?></p>

<div class='user_game'><?php echo $post['user_game1'];?></div>
<div class='user_games'>
<div class='user_game'><?php echo $post['user_game2'];?></div>
<div class='user_game'><?php echo $post['user_game3'];?></div>
</div>

<div class='user_socials'>
<img id="discord" src="images/discordicon.png" alt="Discord">
<p id="user_discord"><?php echo $post['user_discord'];?></p>
<a href="<?php echo $post['user_steam'];?>"><img src="images/steamicon.png" alt="Steam"></a>
</div>
</div>
</div>
</div>

<?php
endforeach;
?>

</main>


<?php require __DIR__ . "/../templates/footer.php"; ?>