<?php

/**
 * 这是一个基于开源项目<a href="https://github.com/WebStackPage/WebStackPage.github.io" rel="nofollow" target="_blank">WebStack</a>和<a href="https://github.com/wclk/WebStack_ZMKI" rel="nofollow" target="_blank">WebStack_钻芒二开版</a>而制作的免费开源网址导航主题。
 * 主题项目源代码地址：<a href="https://github.com/LightAPIs/WebStackTypechoTheme" rel="nofollow" target="_blank">LightAPIs/WebStackTypechoTheme</a>。
 * 若需要排序功能可以安装插件：<a href="https://github.com/LightAPIs/EnablePostsOrder" rel="nofollow" target="_blank">LightAPIs/EnablePostsOrder</a>。
 *
 * @package WebStack Typecho Theme
 * @author Light
 * @version 1.4.0
 * @link https://github.com/LightAPIs
 */
use Utils\Helper;

\Widget\User::alloc()->to($user);

// var_dump($user->hasLogin());

if (!defined('__TYPECHO_ROOT_DIR__'))
  exit;
?>
<!DOCTYPE html>
<html lang="zh">
<?php $this->need('header.php'); ?>

<body class="page-body <?php echo isset($_COOKIE['night']) && $_COOKIE['night'] == '1' ? 'night' : ''; ?>">
  <!-- skin-white -->
  <div class="page-container">
    <?php $this->need('sidebar.php'); ?>
    <!--顶部美化开始-->
    <div class="board">
      <?php $defaultCategoryMid = null; ?>

      <div class="left" style="margin-right: auto;">
        <ul class="user-info-menu left-links list-inline list-unstyled" style="margin-right: auto;">
          <?php $this->widget('Widget_Metas_Category_List')->to($navs); ?>
          <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>

          <?php $children = $categorys->getAllChildren(THEME_RELATION_META);
          ?>

          <?php foreach ($children as $mid): ?>
            <?php $nav = $categorys->getCategory($mid);
            if ($nav['levels'] != 1)
              continue; ?>
            <?php
            if (empty($defaultCategoryMid)) {
              if (!empty($this->request->get('slug'))) {
                if ($this->request->get('slug') === $nav['slug'])
                  $defaultCategoryMid = $nav['mid'];
              } else {
                $defaultCategoryMid = $nav['mid'];
              }
            }
            ?>
            <li><span class="board-title<?php if ($defaultCategoryMid == $nav['mid'])
              echo ' active'; ?>"><a href="/index.php/category/<?php echo $nav['slug']; ?>/"><i class="fa <?php echo str_replace('--', ' ', $nav['slug']); ?>"></i> <?php echo $nav['name']; ?></a></span></li>
          <?php endforeach; ?>

        </ul>
      </div>
      <ul class="user-info-menu left-links list-inline list-unstyled">
        <li><span class="board-title"><a href="./admin/"> <?php echo $user->hasLogin() ? '进入后台' : '管理网址' ?></a></span></li>
        <li><span class="board-title "><a href="<?php $this->options->zmki_url(); ?>" target="_blank"><i class="fa fa-heart xiaotubiao" style="color: #fb5962;"></i>&nbsp;<?php $this->options->zmki_name(); ?></a></span>
        </li>
      </ul>

      <div class="my_mode_switch" title="切换模式"></div>
      <div class="dark_mode_list dropdown xs-left">
        <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-header">选择模式</li>
          <li class="dark_mode_li"><span class="dark_mode_sun"><i></i>日间模式</span></li>
          <li class="dark_mode_li"><span class="dark_mode_night"><i></i>夜间模式</span></li>
          <li class="dark_mode_li"><span class="dark_mode_system"><i></i>跟随系统</span></li>
          <li class="dark_mode_li"><span class="dark_mode_auto"><i></i>自动切换</span></li>
        </ul>
      </div>
    </div>
    <!--顶部美化结束-->
    <div class="main-content">
      <?php if ($this->options->isSearch == '1'): ?>
        <?php $this->need('search.php'); ?>
      <?php endif; ?>
      <!--顶部新增模块开始	-->
      <?php if ($this->options->zmki_top_main == '1'): ?>
        <div class="zmki_top_main">
          <div class="zmki_top_item">
            <a class="colorful-card zmki_top_one" target="_blank" href="<?php $this->options->zmki_top_main_one_url(); ?>">
              <i class="<?php $this->options->zmki_top_main_one_icon(); ?>"></i>
              <span class="zmki_top_text"><?php $this->options->zmki_top_main_one_name(); ?></span>
            </a>
          </div>
          <div class="zmki_top_item">
            <a class="colorful-card zmki_top_two" target="_blank" href="<?php $this->options->zmki_top_main_two_url(); ?>">
              <i class="<?php $this->options->zmki_top_main_two_icon(); ?>"></i>
              <span class="zmki_top_text"><?php $this->options->zmki_top_main_two_name(); ?></span>
            </a>
          </div>
          <div class="zmki_top_item">
            <a class="colorful-card zmki_top_three" target="_blank" href="<?php $this->options->zmki_top_main_three_url(); ?>">
              <i class="<?php $this->options->zmki_top_main_three_icon(); ?>"></i>
              <span class="zmki_top_text"><?php $this->options->zmki_top_main_three_name(); ?></span>
            </a>
          </div>
          <div class="zmki_top_item">
            <a class="colorful-card zmki_top_four" target="_blank" href="<?php $this->options->zmki_top_main_four_url(); ?>">
              <i class="<?php $this->options->zmki_top_main_four_icon(); ?>"></i>
              <span class="zmki_top_text"><?php $this->options->zmki_top_main_four_name(); ?></span>
            </a>
          </div>
        </div>
      <?php endif; ?>


      <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>

      <?php $navs = $categories->getAllChildren(THEME_RELATION_META); ?>
      <?php foreach ($navs as $index => $mid) { ?>
        <?php $nav = $categories->getCategory($mid); ?>
        <?php if ($mid == $defaultCategoryMid): ?>

          <?php $sides = $categories->getAllChildren($nav['mid']); ?>

          <?php foreach ($sides as $side):
            $side = $categories->getCategory($side);
            ?>
            <?php if ($side['levels'] != 2)
              continue; ?>



            <?php $children = $categories->getAllChildren($side['mid']);

            ?>
            <?php foreach (array_merge([$side['mid']], $children) as $mid):
              $card = $categories->getCategory($mid); ?>

              <?php $this->widget('Widget_Archive@category-' . $card['mid'], 'pageSize=10000&type=category', 'mid=' . $card['mid'])->to($posts); ?>
              <h4 class=" text-gray"><i class="linecons-tag" style="margin-right: 7px;" data-set-nav="#<?php echo $card['name']; ?>"></i><?php echo $card['name']; ?></h4>
              <div class="row">
                <?php while ($posts->next()): ?>
                  <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('<?php echo ($user->hasLogin() ? '/admin/write-post.php?cid=' . $posts->cid : $posts->fields->url); ?>', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $posts->fields->url; ?>">
                      <div class="xe-comment-entry">
                        <span class="xe-user-img">
                          <?php if (strlen($posts->fields->logo) > 0): ?>
                            <img src="<?php echo $posts->fields->logo; ?>" class="img-circle" width="54" alt="<?php $posts->title(); ?>">
                          <?php else: ?>
                            <span class="img-circle no-img"><?php echo strlen($posts->title) > 0 ? mb_substr($posts->title, 0, 1) : '' ?></span>
                          <?php endif; ?>
                        </span>
                        <div class="xe-comment">
                          <span class="xe-user-name overflowClip_1">
                            <strong><?php $posts->title(); ?></strong>
                          </span>
                          <p class="overflowClip_2"><?php echo $posts->fields->text; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
              <br />
            <?php endforeach; ?>
          <?php endforeach; ?>

          <?php $this->widget('Widget_Archive@category-' . $nav['mid'], 'pageSize=10000&type=category', 'mid=' . $nav['mid'])->to($posts); ?>
          <h4 class=" text-gray"><i class="linecons-tag" style="margin-right: 7px;" data-set-nav="#<?php echo $nav['name']; ?>"></i><?php echo $nav['name']; ?></h4>
          <div class="row">
            <?php while ($posts->next()): ?>
              <div class="col-sm-3">
                <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('<?php echo ($user->hasLogin() ? '/admin/write-post.php?cid=' . $posts->cid : $posts->fields->url); ?>', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $posts->fields->url; ?>">
                  <div class="xe-comment-entry">
                    <span class="xe-user-img">
                      <?php if (strlen($posts->fields->logo) > 0): ?>
                        <img src="<?php echo $posts->fields->logo; ?>" class="img-circle" width="54" alt="<?php $posts->title(); ?>">
                      <?php else: ?>
                        <span class="img-circle no-img"><?php echo strlen($posts->title) > 0 ? mb_substr($posts->title, 0, 1) : '' ?></span>
                      <?php endif; ?>
                    </span>
                    <div class="xe-comment">
                      <span class="xe-user-name overflowClip_1">
                        <strong><?php $posts->title(); ?></strong>
                      </span>
                      <p class="overflowClip_2"><?php echo $posts->fields->text; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <br />
        <?php endif; ?>
      <?php } ?>



      <?php $this->need('footer.php'); ?>
    </div>

    <?php if ($this->options->fk_zmki == '1'): ?>
      <div class="fk_service">
        <ul>
          <li class="fk_service_box fk_service_sidebar visible-xs" onclick="document.getElementById('01').click();" style="display: block;">
            <a id="01" href="#" rel="toggle-sidebar" class="fk_service_box fk_service_sidebar" title="切换侧栏" data-toggle="mobile-menu">1</a>
          </li>
          <li class="fk_service_box fk_service_upward" onclick="document.getElementById('02').click();" style="display: block;">
            <a id="02" href="/#" rel="go-top" class="fk_service_box fk_service_upward" title="返回顶部">2</a>
          </li>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</body>

</html>