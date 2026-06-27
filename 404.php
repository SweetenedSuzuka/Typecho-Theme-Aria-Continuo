<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $GLOBALS['ARIA_IS_404_PAGE'] = true; ?>
<?php $this->need('header.php'); ?>
<?php $isContinuoVisualsEnabled = ThemeOptions::isContinuoVisualsEnabled(); ?>
<div id="main" class="col-mb-12 col-8 col-offset-2 error-page-main">
	<div class="error-page">
		<?php
        $notFoundTitle = ThemeOptions::getOptionStringValue('notFoundTitle', '404:没有找到界面呢，是书架摆错了吗？');
        ?>
		<?php if ($isContinuoVisualsEnabled): ?>
		<h2 class="post-title error-page-title"><?php echo htmlspecialchars($notFoundTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
		<p class="error-page-desc">
			<?php
            $notFoundDescription = ThemeOptions::getOptionStringValue('notFoundDescription', '这个页面不存在或者被删除，你可以尝试搜索你想要的内容。');
            echo htmlspecialchars($notFoundDescription, ENT_QUOTES, 'UTF-8');
            ?>
		</p>
		<form method="post" class="error-page-form">
			<input type="text" name="s" class="text error-page-search-input" placeholder="搜索你想找的内容..." autofocus />
			<div class="error-page-search-actions">
				<button type="submit" class="submit error-page-search-submit">
					<?php _e('搜索'); ?>
				</button>
			</div>
			<a href="<?php $this->options->siteUrl(); ?>" class="error-page-home-link">&larr; <?php _e('返回首页'); ?></a>
		</form>
		<?php else: ?>
		<h2 class="post-title"><?php echo htmlspecialchars($notFoundTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
		<p>
			<?php
            $notFoundDescription = ThemeOptions::getOptionStringValue('notFoundDescription', '这个页面不存在或者被删除，你可以尝试搜索你想要的内容。');
            echo htmlspecialchars($notFoundDescription, ENT_QUOTES, 'UTF-8');
            ?>
		</p>
		<form method="post">
			<p>
				<input type="text" name="s" class="text error-page-search-input" autofocus />
			</p>
			<div class="error-page-search-actions">
				<button type="submit" class="submit error-page-search-submit">
					<?php _e('搜索'); ?>
				</button>
			</div>
		</form>
		<?php endif; ?>
	</div>
</div>
<!-- end #content-->
<?php $this->need('footer.php');
