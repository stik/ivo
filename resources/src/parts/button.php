<?php

$button_element     = isset($element)? $element : 'a';
$button_link        = isset($link)? $link : '';
$button_title       = isset($title)? $title : '';
$button_icon_before = isset($icon_before)? $icon_before : '';
$button_icon_after  = isset($icon_after)? $icon_after : '';
$button_size        = isset($size)? $size : 'md';
$button_type        = isset($type)? $type : 'primary';
$button_theme       = isset($theme)? $theme : 'light';
$button_disabled    = isset($disabled)? true : false;
$button_customcss   = isset($customcss)? $customcss : '';

$classes = [];
if($button_size == 'sm') $classes[] = 'button__small';
if($button_size == 'md') $classes[] = 'button__medium';
if($button_size == 'lg') $classes[] = 'button__large';

$classes[] = 'button__'.$button_theme.'-'.$button_type;

if($button_customcss) $classes[] = $button_customcss;
?>
<<?php echo $button_element; ?> <?php if($button_link) echo 'href="'.$button_link.'"'; ?> class="button <?php echo implode(' ', $classes); ?>" <?php if($button_disabled) echo 'disabled'; ?>>
    <?php if($button_icon_before) echo $button_icon_before; ?>
    <span><?php echo $button_title; ?></span>
    <?php if($button_icon_after) echo $button_icon_after; ?>
</<?php echo $button_element; ?>> 