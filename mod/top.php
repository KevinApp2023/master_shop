<div class="top <?php echo $TopbgClass; ?>">
    <div class="container">
    <div class="row p-2 pt-0 pb-0  m-0 " style=" font-size:18px;">
        <?php if(!empty($facebook)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="' . $facebook . '" ><il class="bi-facebook "></il></a></div>';} ?>
        <?php if(!empty($youtube)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="' . $youtube . '" ><il class="bi-youtube "></il></a></div>';} ?>
        <?php if(!empty($instagram)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="' . $instagram . '" ><il class="bi-instagram "></il></a></div>';} ?>
        <?php if(!empty($linkedin)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="' . $linkedin . '" ><il class="bi-linkedin "></il></a></div>';} ?>
        <?php if(!empty($x)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="' . $x . '" ><il class="bi-twitter-x "></il></a></div>';} ?>
        <?php if(!empty($github)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="' . $github . '" ><il class="bi-github "></il></a></div>';} ?>
        <?php if(!empty($telegram)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="' . $telegram . '" ><il class="bi-telegram "></il></a></div>';} ?>
        <?php if(!empty($whatsapp)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="wa.me/' . $whatsapp . '" ><il class="bi-whatsapp "></il></a></div>';} ?>
        <?php if(!empty($gmail)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="' . $gmail . '" ><il class="bi-google "></il></a></div>';} ?>
        <?php if(!empty($skype)){ echo '<div class="col-auto p-2"><a class="' . $ToptextClass . '" href="' . $skype . '" ><il class="bi-skype "></il></a></div>';} ?>
    <?php if(!empty($texto_top)){ echo '<div class="col-12 col-md text-end p-2 ' . $ToptextClass . '">' . $texto_top . '</div>';} ?>
    </div>
    </div>
</div>