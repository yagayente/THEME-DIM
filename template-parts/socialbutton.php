<script type="text/javascript">
function show(elem) {
    var paragraph = elem.querySelector(".hidden");
    if (paragraph.style.display == "none") {
        paragraph.style.display = "block";
    } else {
        paragraph.style.display = "none";
}}
</script>


<div class="setup" onclick="show(this)">
  <p class="share"><?php pll_e('partager'); ?></p>
  <p class="hidden" style="display: none">

            <a class="share-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>&amp;via=DIM_STCN" target="_blank">
                <span>Twitter</span>
            </a>

            <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank">
                <span>Facebook</span>
            </a>

          <a href="whatsapp://send?text=<?php echo $url; ?>&amp;via=DIM_STCN" data-action="share/whatsapp/share">Whatsapp</a>

        <a href="tg://msg_url?url=<?php echo $url; ?>">Telegram</a>


  </p>
</div>
