<div class="exception">
  <div class="exc-title">
    <?php foreach ($name as $i => $nameSection): ?>
      <?php if ($i == count($name) - 1): ?>
        <span class="exc-title-primary"><?php echo $tpl->escape($nameSection) ?></span>
      <?php else: ?>
        <?php echo $tpl->escape($nameSection) . ' \\' ?>
      <?php endif ?>
    <?php endforeach ?>
    <?php if ($code): ?>
      <span title="Exception Code">(<?php echo $tpl->escape($code) ?>)</span>
    <?php endif ?>
  </div>

  <div class="exc-message">
    <?php if (!empty($message)): ?>
      <span><?php echo $tpl->escape($message) ?></span>


      <?php if (count($previousMessages)): ?>
        <div class="exc-title prev-exc-title">
          <span class="exc-title-secondary">Previous exceptions</span>
        </div>

        <ul>
          <?php foreach ($previousMessages as $i => $previousMessage): ?>
            <li>
              <?php echo $tpl->escape($previousMessage) ?>
              <span class="prev-exc-code">(<?php echo $previousCodes[$i] ?>)</span>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif ?>



    <?php else: ?>
      <span class="exc-message-empty-notice">No message</span>
    <?php endif ?>

    <ul class="search-for-help">
      <?php if (!empty($docref_url)): ?>
      <li>
        <a rel="noopener noreferrer" target="_blank" href="<?php echo $docref_url; ?>" title="Search for help in the PHP manual.">
            <img alt="PHP manual" height="16" width="16" src="../icons/code.png">
        </a>
      </li>
      <?php endif ?>
        <li>
            <a rel="noopener noreferrer" target="_blank" href="https://teamspeak-interface.net" title="Search for help on Teamspeak Interface.">
                <img alt="Google" height="16" width="16" src="../icons/tsi.png">
            </a>
        </li>
      <li>
        <a rel="noopener noreferrer" target="_blank" href="https://google.com/search?q=<?php echo urlencode(implode('\\', $name).' '.$message) ?>" title="Search for help on Google.">
          <img alt="Google" height="16" width="16" src="../icons/google.png">
        </a>
      </li>
      <li>
        <a rel="noopener noreferrer" target="_blank" href="https://stackoverflow.com/search?q=<?php echo urlencode(implode('\\', $name).' '.$message) ?>" title="Search for help on Stack Overflow.">
            <img alt="Stack Overflow" height="16" width="16" src="../icons/stack-overflow.png">
        </a>
      </li>
    </ul>

    <span id="plain-exception"><?php echo $tpl->escape($plain_exception) ?></span>
    <button id="copy-button" class="rightButton clipboard" data-clipboard-text="<?php echo $tpl->escape($plain_exception) ?>" title="Copy exception details to clipboard">
      COPY
    </button>
  </div>
</div>
