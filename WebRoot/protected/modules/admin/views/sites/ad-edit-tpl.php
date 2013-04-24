				<div class="ad-setting-page">
					<div class="header">头部信息</div>
					<div id="ad-banner" class="ad-banner dropzone">
						<input type="hidden" name="ad[ad-banner][image_url]" value="<?=$ad['ad-banner']['image_url'];?>">
							<div class="preview">
							<?php if(isset($ad) && !empty($ad['ad-banner'])):?>
								<img src="<?=$ad['ad-banner']['image_url'];?>">
							<?php else:?>
								<span class="dropzone-tips">
									拖动替换广告 960 X 100 
									AD-Banner
								</span>
							<?php endif;?>
							</div>
						链接地址：<input type="text"  name="ad[ad-banner][href]" value="<?=$ad['ad-banner']['href'];?>">
					</div>
					<div class="w670 clearfix">
						<div class="w220">
							<div class="box w220" style="height:100px;"></div>
							<div class="box w220" style="height:200px;"></div>
							<div id="ad-1" class="ad-left-1 dropzone">
								<input type="hidden" name="ad[ad-1][image_url]" value="<?=$ad['ad-1']['image_url'];?>">
								<div class="preview">
								<?php if(isset($ad) && !empty($ad['ad-1'])):?>
									<img src="<?=$ad['ad-1']['image_url'];?>">
								<?php else:?>
									<span class="dropzone-tips">
									AD-1,ad_show
									</span>
								<?php endif;?>
								</div>
						链接地址：<input type="text"  name="ad[ad-1][href]" value="<?=$ad['ad-1']['href'];?>">
							</div>
						</div>
						<div class="w440">
							<div class="box" style="height:100px;"></div>
							<div class="box" style="height:310px;"></div>
						</div>
						<div class="ad-center-1 dropzone" id="ad-3">
							<input type="hidden" name="ad[ad-3][image_url]" value="<?=$ad['ad-3']['image_url'];?>">
							<div class="preview">
							<?php if(isset($ad) && !empty($ad['ad-3'])):?>
								<img src="<?=$ad['ad-3']['image_url'];?>">
							<?php else:?>
								<span class="dropzone-tips">
									拖动替换 670 X 75
									AD-3
								</span>
							<?php endif;?>
							</div>
						链接地址：<input type="text"  name="ad[ad-3][href]" value="<?=$ad['ad-3']['href'];?>">
						</div>
					</div>
					<div class="w310">
						<div class="box" style="height:200px;"></div>
						<div class="box-ad dropzone" id="ad-2">
							<input type="hidden" name="ad[ad-2][image_url]" value="<?=$ad['ad-2']['image_url'];?>">
							<div class="preview">
							<?php if(isset($ad) && !empty($ad['ad-2'])):?>
								<img src="<?=$ad['ad-2']['image_url'];?>">
							<?php else:?>
								<span class="dropzone-tips">
									拖动替换 308 X 72
								</span>
							<?php endif;?>
							</div>
						链接地址：<input type="text"  name="ad[ad-2][href]" value="<?=$ad['ad-2']['href'];?>">
						</div>
						<div class="box" style="height:120px;"></div>
						<div class="box-ad dropzone" id="ad-4">
							<input type="hidden" name="ad[ad-4][image_url]" value="<?=$ad['ad-4']['image_url'];?>">
							<div class="preview">
							<?php if(isset($ad) && !empty($ad['ad-4'])):?>
								<img src="<?=$ad['ad-4']['image_url'];?>">
							<?php else:?>
								<span class="dropzone-tips">
									拖动替换 308 X 68 
								</span>
							<?php endif;?>
							</div>
						链接地址：<input type="text"  name="ad[ad-4][href]" value="<?=$ad['ad-4']['href'];?>">
						</div>

					</div>
				</div>
