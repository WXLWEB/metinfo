<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');
echo <<<EOT
-->
<div class="v52fmbx">
<!--
EOT;
$tmpincfile=PATH_WEB."templates/{$_M[config][met_skin_user]}/metinfo.inc.php";
require $tmpincfile;
if($metadmin['system_flash_close'] != 1){
echo <<<EOT
-->
	<h3 class="v52fmbx_hr">{$_M['word']['larger_wheel']}</h3>
<!--
EOT;
if($inbaset[0]==1){
echo <<<EOT
-->
	<dl>
		<dd class="bannerlist index_bannerlist ftype_input">
			<input type="hidden" name="indexbannerlist" value="" />
			<textarea name="bannerlist_li_html" style="display:none;">
				<li>
					<a href="#" class="img">
						<img src="" />
						<div class="banner_rep">
						<input type="hidden" name="img_path" data-upload-type="doupimg" value="" />
						</div>
						<div class="banner_del"><i class="fa fa-times"></i></div>
					</a>
					<div class="banner_more">{$_M['word']['title_link']}<i class="fa fa-sort-desc"></i></div>
					<div class="banner_input">
					<input type="text" name="img_title" value="" placeholder="{$_M['word']['setflashName']}">
					<input type="text" name="img_link" class="in2" value="" placeholder="{$_M['word']['columnhref']}">
					</div>
				</li>
			</textarea>
			<div class="fbox">
			<ul>
<!--
EOT;
foreach($bannerlist as $key=>$val){
echo <<<EOT
-->
			<li data-bannerid="{$val[id]}">
				<a href="#" class="img">
					<img src="{$val[img_path]}" />
					<div class="banner_rep">
					<input type="hidden" name="img_path" data-upload-type="doupimg" value="{$val[img_path]}" />
					</div>
					<div class="banner_del"><i class="fa fa-times"></i></div>
				</a>
				<div class="banner_more">{$_M['word']['title_link']}<i class="fa fa-sort-desc"></i></div>
				<div class="banner_input">
				<input type="text" name="img_title" value="{$val[img_title]}" placeholder="{$_M['word']['setflashName']}">
				<input type="text" name="img_link" class="in2" value="{$val[img_link]}" placeholder="{$_M['word']['columnhref']}">
				</div>
			</li>
<!--
EOT;
}
echo <<<EOT
-->
			</ul>
			<div class="banner_add">{$_M['word']['add_them_picture']}</div>
			</div>
		</dd>
	</dl>
<!--
EOT;
if(!$metinfover){
echo <<<EOT
-->
	<dl>
		<dt>{$_M['word']['flashMode']}</dt>
		<dd class="ftype_select">
			<div class="fbox">
				<select name="met_flash_10001_imgtype" data-checked="{$inbaset[3]}">
					<option value="1">{$_M['word']['setflashimgtext']}1</option>
					<option value="2">{$_M['word']['setflashimgtext']}2</option>
					<option value="3">{$_M['word']['setflashimgtext']}3</option>
					<option value="4">{$_M['word']['setflashimgtext']}4</option>
					<option value="5">{$_M['word']['setflashimgtext']}5</option>
					<option value="6">{$_M['word']['setflashimgtext']}6</option>
					<option value="7">{$_M['word']['setflashimgtext']}7</option>
					<option value="8">{$_M['word']['setflashimgtext']}8</option>
				</select>
				<span class="tips">{$_M['word']['designer_special']}</span>
			</div>
		</dd>
	</dl>
<!--
EOT;
}
echo <<<EOT
-->
	<dl>
		<dt>{$_M['word']['wapdimensionalsize']}</dt>
		<dd class="ftype_input">
			<div class="fbox">
<!--
EOT;
$tips = $_M['word']['height_setting'].'<br/><br/>如果是全屏图片，图片建议尺寸：1920(宽) * 自定义(高)（像素），能够适应绝大部分电脑屏幕。';
if(!$metinfover){
$tips = "{$_M[word][setimgWidth]}×{$_M[word][setimgHeight]}({$_M[word][setimgPixel]})";
echo <<<EOT
-->
				<input type="text" name="met_flash_10001_x" value="{$inbaset[1]}" style="width:40px;">
				×
<!--
EOT;
}
echo <<<EOT
-->
				<input type="text" name="met_flash_10001_y" value="{$inbaset[2]}" style="width:40px;">
				<span class="tips">{$tips}</span>
			</div>
		</dd>
	</dl>
<!--
EOT;
}else{
echo <<<EOT
-->
	<dl>
		<dd class="banner_set_more">
			{$_M['word']['shuffling_closed']}
		</dd>
	</dl>
<!--
EOT;
}
echo <<<EOT
-->
	<dl>
		<dd>
			<a href="{$_M[url][site_admin]}interface/flash/setflash.php?anyid=18&lang={$_M[lang]}" target="_blank" class="ui-addlist" style="margin-left:70px;">更多自定义设置（原Banner设置）</a>
		</dd>
	</dl>
<!--
EOT;
}
require $this->template('tem/zujian');
echo <<<EOT
-->
<!--
EOT;
if(!$metinfover){
echo <<<EOT
-->
<!--
EOT;
if($metadmin[homecontent]){
echo <<<EOT
-->
	<h3 class="v52fmbx_hr">{$_M['word']['indexsetIntroduce']}</h3>
	<dl>
		<dd class="ftype_ckeditor_theme">
			<div class="fbox">
				<textarea name="met_index_content" data-ckeditor-type="2" data-ckeditor-y="380">{$_M['config']['met_index_content']}</textarea>
			</div>
		</dd>
	</dl>
<!--
EOT;
}
echo <<<EOT
-->
	<h3 class="v52fmbx_hr">{$_M[word][unitytxt_40]}</h3>
	<dl>
		<dt>{$_M[word][mod2]}{$_M[word][indexsetnum]}</dt>
		<dd class="ftype_input">
			<div class="fbox">
				<input type="text" name="index_news_no" value="{$_M[config][index_news_no]}">
			</div>
			<span class="tips">{$_M[word][item]}</span>
		</dd>
	</dl>
	<dl>
		<dt>{$_M[word][mod3]}{$_M[word][indexsetnum]}</dt>
		<dd class="ftype_input">
			<div class="fbox">
				<input type="text" name="index_product_no" value="{$_M[config][index_product_no]}">
			</div>
			<span class="tips">{$_M[word][item]}</span>
		</dd>
	</dl>
	<dl>
		<dt>{$_M[word][mod5]}{$_M[word][indexsetnum]}</dt>
		<dd class="ftype_input">
			<div class="fbox">
				<input type="text" name="index_img_no" value="{$_M[config][index_img_no]}">
			</div>
			<span class="tips">{$_M[word][item]}</span>
		</dd>
	</dl>
	<dl>
		<dt>{$_M[word][mod4]}{$_M[word][indexsetnum]}</dt>
		<dd class="ftype_input">
			<div class="fbox">
				<input type="text" name="index_download_no" value="{$_M[config][index_download_no]}">
			</div>
			<span class="tips">{$_M[word][item]}</span>
		</dd>
	</dl>
	<dl>
		<dt>{$_M[word][mod6]}{$_M[word][indexsetnum]}</dt>
		<dd class="ftype_input">
			<div class="fbox">
				<input type="text" name="index_job_no" value="{$_M[config][index_job_no]}">
			</div>
			<span class="tips">{$_M[word][item]}</span>
		</dd>
	</dl>
	<h3 class="v52fmbx_hr">{$_M[word][unitytxt_41]}</h3>
	<dl>
		<dt>{$_M[word][indexsetFriendly]}</dt>
		<dd class="ftype_radio">
			<div class="fbox">
				<label><input name="index_link_ok" type="radio" value="1" data-checked="{$_M[config][index_link_ok]}">{$_M[word][open]}</label>
				<label><input name="index_link_ok" type="radio" value="0">{$_M[word][close]}</label>
			</div>
		</dd>
	</dl>
<!--
EOT;
}
echo <<<EOT
-->
</div>
<!--
EOT;
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved.
?>-->