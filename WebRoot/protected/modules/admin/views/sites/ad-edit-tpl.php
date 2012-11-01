				<div class="ad-setting-page">
					<div class="header">头部信息</div>
					<div id="ad-banner" class="ad-banner dropzone">
						<input type="hidden" name="ad[ad-banner]" value="<?=$ad['ad-banner'];?>">
							<div class="preview">
							<?php if(isset($ad) && !empty($ad['ad-banner'])):?>
								<img src="<?=$ad['ad-banner'];?>">
							<?php else:?>
								<span class="dropzone-tips">
									拖动替换广告 960 X 100 
									AD-Banner
								</span>
							<?php endif;?>
							</div>
					</div>
					<div class="w670 clearfix">
						<div class="w220">
							<div class="box w220" style="height:100px;"></div>
							<div class="box w220" style="height:200px;"></div>
							<div id="ad-1" class="ad-left-1 dropzone">
								<input type="hidden" name="ad[ad-1]" value="<?=$ad['ad-1'];?>">
								<div class="preview">
								<?php if(isset($ad) && !empty($ad['ad-1'])):?>
									<img src="<?=$ad['ad-1'];?>">
								<?php else:?>
									<span class="dropzone-tips">
									AD-1,ad_show
									</span>
								<?php endif;?>
								</div>
							</div>
						</div>
						<div class="w440">
							<div class="box" style="height:100px;"></div>
							<div class="box" style="height:310px;"></div>
						</div>
						<div class="ad-center-1 dropzone" id="ad-3">
							<input type="hidden" name="ad[ad-3]" value="<?=$ad['ad-3'];?>">
							<div class="preview">
							<?php if(isset($ad) && !empty($ad['ad-3'])):?>
								<img src="<?=$ad['ad-3'];?>">
							<?php else:?>
								<span class="dropzone-tips">
									拖动替换 670 X 75
									AD-3
								</span>
							<?php endif;?>
							</div>
						</div>
						<div class="w220">
							<div class="box w220" style="height:300px;"></div>
							<div class="ad-left-1"></div>
						</div>
					</div>
					<div class="w310">
						<div class="box" style="height:180px;"></div>
						<div class="box-ad dropzone" id="ad-2">
							<input type="hidden" name="ad[ad-2]" value="<?=$ad['ad-2'];?>">
							<div class="preview">
							<?php if(isset($ad) && !empty($ad['ad-2'])):?>
								<img src="<?=$ad['ad-2'];?>">
							<?php else:?>
								<span class="dropzone-tips">
									拖动替换 308 X 72
								</span>
							<?php endif;?>
							</div>
						</div>
						<div class="box" style="height:120px;"></div>
						<div class="box-ad dropzone" id="ad-4">
							<input type="hidden" name="ad[ad-4]" value="<?=$ad['ad-4'];?>">
							<div class="preview">
							<?php if(isset($ad) && !empty($ad['ad-4'])):?>
								<img src="<?=$ad['ad-4'];?>">
							<?php else:?>
								<span class="dropzone-tips">
									拖动替换 308 X 68 
								</span>
							<?php endif;?>
							</div>
						</div>

					</div>
				</div>
