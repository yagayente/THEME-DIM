<ul class="share-buttons">
  Partager 
    <li>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>&amp;via=DIM_STCN" target="_blank">
            <span>Twitter</span>
        </a>
    </li>
    <li>
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank">
            <span>Facebook</span>
        </a>
    </li>
    <li>
      <a href="whatsapp://send?text=<?php echo $url; ?>&amp;via=DIM_STCN" data-action="share/whatsapp/share">Whatsapp</a>
    </li>
    <li>
    <a href="tg://msg_url?url=<?php echo $url; ?>">Telegram</a>
    </li>
    <li>
      <a onclick="myFunction()"><?php pll_e('copier_le_lien'); ?></a>
      <div id="message_copie" style="position: fixed; top:10px; right:10px;"></div>
    </li>
</ul>
<input style="position: absolute; left: -9999em; top: auto; overflow: hidden;" type="text" value="<?php global $wp; echo home_url( $wp->request ) ?>" id="myInput">
<script>
function myFunction() {
var copyText = document.getElementById("myInput");

copyText.select();
copyText.setSelectionRange(0, 99999)
document.execCommand("copy");
document.getElementById("message_copie").innerHTML = "<div class='display_message'>" + "<?php pll_e('lien_copie'); ?>" + "</div>";
    setTimeout(function(){
        document.getElementById("message_copie").innerHTML = '';
    }, 4000)
}

</script>
