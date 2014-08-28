<?php
  $blocks = $this->fuel->styleguide->config('blocks');

/* NO TOUCH BELOW THIS */
  // Build out URI to reload from form dropdown
  // Need full url for this to work in Opera Mini
  $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";

  if (isset($_POST['sg_uri']) && isset($_POST['sg_section_switcher'])) {
     $pageURL .= $_POST[sg_uri].$_POST[sg_section_switcher];
     $pageURL = htmlspecialchars( filter_var( $pageURL, FILTER_SANITIZE_URL ) );
     header("Location: $pageURL");
  }

  $this->load->helper('directory');
  $this->load->helper('inflector');

  $files = directory_map(MODULES_PATH.'/styleguide/views/_blocks');

  function outputSection($filename, $title, $filecontents, $block, $blockmodule = '', $args = '') {
    echo '<div class="sg-markup sg-section">';
    echo '<div class="sg-display">';
    echo '<h2 class="sg-h2"><a id="sg-'.$filename.'" class="sg-anchor">'.$title.'</a></h2>';
    echo '<div class="sg-htmlview">';
    echo fuel_block(array('view' => $block, 'module' => $blockmodule, 'vars' => $args));
    echo '</div></div>';
    echo '<div class="sg-markup-controls"><a class="sg-btn sg-btn--source" href="#">View Source</a></div>';
    echo '<div class="sg-source sg-animated">';
    echo '<a class="sg-btn sg-btn--select" href="#">Copy Source</a>';
    echo '<pre class="prettyprint linenums"><code>';
    echo htmlspecialchars(file_get_contents($filecontents));
    echo '</code></pre>';
    echo '</div>';
    echo '</div>';
  }

  // Display title of each markup samples as a select option 
  function listMarkupAsOptions ($type, $files) {
    sort($files[$type]);
    foreach ($files[$type] as $file):
        $filename = preg_replace("/\.html$/i", "", $file); 
        echo '<option value="#sg-'.$filename.'">'.humanize($filename).'</option>';
    endforeach;
  }

  function listBlocksAsOptions($blocks, $s_blocks) {
      foreach ($blocks as $file => $args):
        $title = humanize($file);
       echo '<option value="#sg-'.$file.'">'.$title.'</option>';
      endforeach;
      foreach ($s_blocks as $file):
        $title = humanize($file);
       echo '<option value="#sg-'.$file.'">'.$title.'</option>';
      endforeach;
  }

  // Display markup view & source
  function showBaseMarkup($files) {
    sort($files['base']);
    foreach ($files['base'] as $file):
        $filename = preg_replace("/\.php$/i", "", $file);
        $title = humanize($filename);
        $filecontents = MODULES_PATH.'styleguide/views/_blocks/base/'.$file;
        $block = 'base/'.$filename;
        outputSection($filename, $title, $filecontents, $block, 'styleguide');
    endforeach;
  }

  function showBlocks($blocks,$s_blocks) {
    foreach ($blocks as $file => $args):
      $filename = $file;
      $title = humanize($filename);
      $filecontents = APPPATH.'/views/_blocks/'.$file.'.php';
      $block = 'base/'.$file;
      $blockmodule = 'styleguide';
      outputSection($filename, $title, $filecontents, $file, '', $args);
    endforeach;
    foreach ($s_blocks as $file):
      $filename = $file;
      $title = humanize($filename);
      $filecontents = MODULES_PATH.'styleguide/views/blocks/'.$file.'.php';
      outputSection($filename, $title, $filecontents, $file, 'styleguide');
    endforeach;
  }

  function getColors() {
    $filecontents = file_get_contents(assets_server_path('css/_variables.scss'));
    $pos1 = strpos($filecontents, '//Base Colors') + strlen('//Base Colors');
    $pos2 = strpos($filecontents, '//End Base Colors');
    $len = $pos2 - $pos1;
    $colorstring = substr($filecontents, $pos1, $len);
    $color_titles = explode(';', $colorstring);
    array_splice($color_titles,-1,1);
    $html = '';
    foreach($color_titles as $item){
      $color = substr($item, strrpos($item, '#'));
      $html .= '<div class="sg-color" style="background:'.$color.';"><span class="sg-color-swatch"><span class="sg-color-label">'.$item.'</span></span></div>';
    }
    return $html;
  }

  function getFonts() {
    $filecontents = file_get_contents(assets_server_path('css/_variables.scss'));
    $pos1 = strpos($filecontents, '//Base Type') + strlen('//Base Type');
    $pos2 = strpos($filecontents, '//End Base Type');
    $len = $pos2 - $pos1;
    $string = substr($filecontents, $pos1, $len);
    $titles = explode(';', $string);
    array_splice($titles,-1,1);
    $html = '';
    foreach($titles as $item){
      $html .= '<p class="sg-font sg-font-primary">'.$item.'</p>';
    }
    return $html;
  }

?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
  <title>Styleguide</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php echo fuel_block('type'); ?>
  <?php echo css('sg-style', 'styleguide')?>
  <?php echo css('main')?>
</head>
<body>
<div id="top" class="sg-header sg-container">
  <h1 class="sg-logo">Style Guide: <span><?=$this->fuel->config('site_name');?></span></h1>
  <p class="sg-updated_time">Last Updated <?=$this->fuel->styleguide->config('updated_time');?></p>
  <form id="js-sg-nav" action=""  method="post" class="sg-nav">
    <select id="js-sg-section-switcher" class="sg-section-switcher" name="sg_section_switcher">
        <option value="">Jump To Section:</option>
        <optgroup label="Intro">
          <option value="#sg-colors">Colors</option>
          <option value="#sg-fontStacks">Font-Stacks</option>
        </optgroup>
        <optgroup label="Base Styles">
          <?php listMarkupAsOptions('base', $files); ?>
        </optgroup>
        <optgroup label="Block Styles">
          <?php listBlocksAsOptions($blocks['app'], $blocks['module']); ?>
        </optgroup>
    </select>
    <input type="hidden" name="sg_uri" value="<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">
    <button type="submit" class="sg-submit-btn">Go</button>
  </form><!--/.sg-nav-->
</div><!--/.sg-header-->

<div class="sg-body sg-container wrapper">
  <div class="sg-info">               
    <div class="sg-colors sg-section">
      <h2 class="sg-h2"><a id="sg-colors" class="sg-anchor">Colors</a></h2>
      <div class="sg-htmlview">
        <?php echo getColors() ?>
      </div>
    </div><!--/.sg-colors-->
    
    <div class="sg-font-stacks sg-section">
      <h2 class="sg-h2"><a id="sg-fontStacks" class="sg-anchor">Font Stacks</a></h2>
       <div class="sg-htmlview">
        <?php echo getFonts() ?>
      </div>
    </div><!--/.sg-font-stacks-->
  </div><!--/.sg-info-->    

  <div class="sg-base-styles">    
    <h1 class="sg-h1">Base Styles</h1>
    <?php showBaseMarkup($files); ?>
  </div><!--/.sg-base-styles-->

  <div class="sg-pattern-styles">
    <h1 class="sg-h1">Block Styles</h1>
    <?php showBlocks($blocks['app'], $blocks['module']); ?>
    </div><!--/.sg-pattern-styles-->
  </div><!--/.sg-body-->

  <?php echo js('sg-plugins, sg-scripts', 'styleguide')?>
</body>
</html>
 