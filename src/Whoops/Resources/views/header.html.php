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
            <img alt="PHP manual" height="16" width="16" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABL0lEQVQ4jb2TsUpcYRCFv/8il0UWC9laliApLcRCQWKTZ7C2WxSrrYNgLVtZ+QA+gKSKFiIhIAR8BGsbwQeQ86Xwyt6sK64InunOzH/+MzNMEfkIqg+9nklAlpH12QSkRpYnagbAmrGPzL8uIDWwox4bq4brACvADXAIDI2diU9FrZMM1askKz6xJNlUf6pdtZ/kLMkoyfxzDWo3yaH6S+0/J9RKPVB/tLieeqqeqD2RCuiVUr6p18Bdy1wX2ADOW9wDcAmsAUvtFlbV3+q+Wjfc14brtRxtJ/mb5Pu4hbG9L+pFkqOmeE8dqXPNPIbqnySrjl+1tlC4BQallHugVrfUKwqPAKWUR2C3VOXm5RYmQ/vNsBan5ltRpt7Ck7MFCg8vk/9jusA78AnH9Ab+AZNgEMth9MjTAAAAAElFTkSuQmCC">
        </a>
      </li>
      <?php endif ?>
        <li>
            <a rel="noopener noreferrer" target="_blank" href="https://teamspeak-interface.net" title="Search for help on Teamspeak Interface.">
                <img alt="Teamspeak Interface" height="16" width="16" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyxpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTIzIDc5LjE1ODk3OCwgMjAxNi8wMi8xMy0wMToxMToxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODU3ODhDNThCNDU5MTFFOUJFQkZEM0I1MDBGNDJBRjUiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODU3ODhDNTdCNDU5MTFFOUJFQkZEM0I1MDBGNDJBRjUiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIEVsZW1lbnRzIDE1LjAgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDE5REY2MENDNjE0MTFFN0I2MkJFMzBFMUI2NEYwQUMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDE5REY2MERDNjE0MTFFN0I2MkJFMzBFMUI2NEYwQUMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4n1WotAAABdElEQVR42nTTvS9DURjHcbe9TSNE0W6NWCQNiWCQYLOYhKGD+AMwsLBYamIze1mIzWQwC4OB0SBpRBALkSiiRL1FfU/zu8njpk7yaXqe+5yX+5xzvXK5XFOlxZCUCJ7wgFI40Q/1sxhDB9KowzfeUcA5drGFr8oItwNZLf9td1Kt7aG+snsNHjEPHzGJBkwpNqycS5OXsxNsK/iCPrOrFcUz6rfiWrFT+C4YwYmCC2ZwLQpmB0E8q9gz0h4/TZQijxQyuIKHnCsRbtGPaXwijgsVudPN2IJX3CCuVdpxZlY9wKjp72sXvRGtFhxpVP/dsbVhHYsYVMzek5rKHWGWlI7rB91mlTlT8TVEFU+oNi6/8gq+KurahpkgeJWuUGxWuUX3+kFwx6w2ERpgDaleruURCx6Mh27aJgaQdKeEHizjw+Qs2Yvkh3Zhb+V9lfgxGu0EwSQzONSRvpkBJRX6CPPBd+B4/3zOzZJQv6hPuhBO/BVgAOdOhgjdMgKWAAAAAElFTkSuQmCC">
            </a>
        </li>
      <li>
        <a rel="noopener noreferrer" target="_blank" href="https://google.com/search?q=<?php echo urlencode(implode('\\', $name).' '.$message) ?>" title="Search for help on Google.">
          <img alt="Google" height="16" width="16" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABoUlEQVQ4jY2SPWhUURCFv1keyxLCEiSIioQgwUIsRFKIWIqgnWgh2Ftb24m1tUUQFcs0IlhaB8FACgtF/EVQkYgsG4xrdj6bu7svbxNwbnN598x558ycEJkq6QJLwBxQqX3gI/AtWpENbO1oSz2bmQ/Ut+pv9a/6NTOfZeY1tVPv2dVcAJ/UofpH3VR/qFvqMDM/qMt1gmqsRJcj4i5wBPgMPATWgG3gJHA5IlaBV1MWMnNWXSl//q5eVauGvQV1xt2mGT2ezsx3xe9ttd0E7neqIn8+Ig4Bv4B1gkFN4i3gcGNPA2CF4PVoBhXQVnsR0WuArwMnGt92gOdQCCKiD/SAWXUxiDr4KfCy3BeBM0XBYJIDXVJfZOZQXVUP1IbXUWfUbmbeKet9o56qD7Gl3izBUb2fmcdLc6UeVG+UXAzVe5k5IxLjKMs88Ai4pO5ExEbZ+ba6EBHngC7wHrhCsLFXlI+pj9XNYmdcmbmlrmfmebU16pkomKyto14ALgJHI6JSf0bEGvCE4EsdPk0wIWqrcxHRUvvRiv5esP0J/rP+AT9WpDkSOmlEAAAAAElFTkSuQmCC">
        </a>
      </li>
      <li>
        <a rel="noopener noreferrer" target="_blank" href="https://stackoverflow.com/search?q=<?php echo urlencode(implode('\\', $name).' '.$message) ?>" title="Search for help on Stack Overflow.">
            <img alt="Stack Overflow" height="16" width="16" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABUklEQVQ4jY2SMWtUURCFv/MQSSG4pLQSsQipBYkQECzsAipYWQuShGjjH7C0SJEygoiIf0AEsbALWKYQ7IKgTbAKS4og81mYJ3cfu5vc28ww55w7Z+ZG5MwjHdAR/gxL3TnJz9W1aeW5ApYXCQUcJ3mJXBliMtPCv5efApfV18CLJJ36JF2OGtyMq516q6oO1J2qWq6qH1X1uMXNIl9SH6rX1CX1i/pZ3aiqfXWpx063IFfVXWAxyRv1O/AsCcBb4APh6KwZjNS1JFvAAvAR+AW8IoznD1HeAcfAV+CneiPJXeAe4XcL7RrSdaTf9ScVYAt4DzwA9oBRgxl0II+AdWAVuP1fVxeBm8C3JCfAOmGlr1+Y6FxJsgBs9znA6fAOgJOh2wmBJBDGyJ3TvBqrY+D+XAF1OWZ/0FEbj9TDkKkCe8AmzWB7chsnmdjC7H9wzvMXsS/IfHnWsFcAAAAASUVORK5CYII=">
        </a>
      </li>
    </ul>

    <span id="plain-exception"><?php echo $tpl->escape($plain_exception) ?></span>
    <button id="copy-button" class="rightButton clipboard" data-clipboard-text="<?php echo $tpl->escape($plain_exception) ?>" title="Copy exception details to clipboard">
      COPY
    </button>
  </div>
</div>
