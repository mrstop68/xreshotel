foreach($filtered_img as $k=>$img){
    ?>
        <section>
        <div class="wrapper">
            <div class="back-img" style="background-image: url('<?=$apiURL?>/img/<?=$img->imgName?>');">
                <div class="containerr">
                    <div class="contentt">
                        <div class="bodyy bodyLeft"></div>
                        <div class="bodyy bodyRight">
                            <h2>ResClick Theme</h2>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices lacus. Maecenas cursus, leo eu iaculis dictum, mauris ante facilisis metus, vitae porta lorem ipsum eu felis.
                                <br><br>
                                Proin sed est commodo, vestibulum est vitae, rhoncus felis. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php echo(count($filtered_img)); if(($num)==4){break;};$num++; } ?>