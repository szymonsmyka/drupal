<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php if (!$teaser): ?>
  <div id="product_foto">
    <?php print render($content['field_foto']); ?>
  </div>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      print render($content['body']);
    ?>
  </div>




  <!--Product add to bag-->
  <!--
                <?php if (isset($node->field_product_id)): ?>
                <?php $prodid = $node->field_product_id['und']['0']['value']; ?>
                  <div class='ecwid-Product'><form>
                    <div style='text-align: center'><script type="text/javascript" src="http://app.ecwid.com/script.js?4216183" charset="utf-8"></script>
                    <script type="text/javascript">xAddToBag('productid=<?php print($prodid); ?>');</script></div>
                  </form></div>
                <?php endif; ?>
                -->

  </div>

</div>