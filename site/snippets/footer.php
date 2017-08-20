    <footer class="footer cf" role="contentinfo">
      <div class="wrap wide">

        <p class="footer-copyright"><?php
          // Parse Kirbytext to support dynamic year,
          // but remove all HTML like paragraph tags:
          echo html::decode($site->copyright()->kirbytext())
        ?></p>

        <p class="footer-madewithkirby">
          <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b class="heart">♥</b></a>
        </p>

      </div>
    </footer>

    <?= js('assets/js/scripts.js') ?>
    <script type="text/javascript" src="assets/js/marquee3k.js"></script>
    <script type="text/javascript">Marquee3k.init();</script>

  </div>
</body>
</html>
