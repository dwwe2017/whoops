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
                    <a rel="noopener noreferrer" target="_blank" href="<?php echo $docref_url; ?>"
                       title="Search for help in the PHP manual.">
                        <img alt="PHP manual" height="16" width="16"
                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABL0lEQVQ4jb2TsUpcYRCFv/8il0UWC9laliApLcRCQWKTZ7C2WxSrrYNgLVtZ+QA+gKSKFiIhIAR8BGsbwQeQ86Xwyt6sK64InunOzH/+MzNMEfkIqg+9nklAlpH12QSkRpYnagbAmrGPzL8uIDWwox4bq4brACvADXAIDI2diU9FrZMM1askKz6xJNlUf6pdtZ/kLMkoyfxzDWo3yaH6S+0/J9RKPVB/tLieeqqeqD2RCuiVUr6p18Bdy1wX2ADOW9wDcAmsAUvtFlbV3+q+Wjfc14brtRxtJ/mb5Pu4hbG9L+pFkqOmeE8dqXPNPIbqnySrjl+1tlC4BQallHugVrfUKwqPAKWUR2C3VOXm5RYmQ/vNsBan5ltRpt7Ck7MFCg8vk/9jusA78AnH9Ab+AZNgEMth9MjTAAAAAElFTkSuQmCC">
                    </a>
                </li>
            <?php endif ?>
            <?php if (!empty($help_urls) && is_array($help_urls)): ?>
                <?php foreach ($help_urls as $help_url): ?>
                    <?php
                    if (!key_exists("name", $help_url) || !key_exists("href", $help_url) || !key_exists("img", $help_url)) {
                        continue;
                    } ?>
                    <li>
                        <?php
                        $href = substr($help_url["href"], -1) == "="
                            ? sprintf("%s%s", $help_url["href"], urlencode(implode('\\', $name) . ' ' . $message)) : $help_url["href"]
                        ?>
                        <a rel="noopener noreferrer" target="_blank" href="<?php echo $href; ?>>"
                           title="Search for help on <?php echo $help_url["name"]; ?>.">
                            <img alt="<?php echo $help_url["name"]; ?>" height="16" width="16"
                                 src="<?php echo $help_url["img"]; ?>">
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>

        <span id="plain-exception"><?php echo $tpl->escape($plain_exception) ?></span>
        <button id="copy-button" class="rightButton clipboard"
                data-clipboard-text="<?php echo $tpl->escape($plain_exception) ?>"
                title="Copy exception details to clipboard">
            COPY
        </button>
    </div>
</div>
