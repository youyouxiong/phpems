<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div id="content">
	<div class="pages" id="exam">
<?php } ?>
		<header class="container-fluid" style="background-color:#2DAB49;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				我的考场
				<a style="font-size:2rem;color:#FFFFFF;" class="pull-right glyphicon glyphicon-plus ajax" href="index.php?exam-phone-basics-open" data-target="page2" data-page="page2"></a>
			</h5>
		</header>
		<div class="container-fluid">
			<?php $bid = 0;
 foreach($this->tpl_var['basics'] as $key => $basic){ 
 $bid++; ?>
			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem">
				<div class="col-xs-4">
					<a data-markPrepage="no" href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-index-setCurrentBasic&basicid=<?php echo $basic['basicid']; ?>" class="ajax" data-page="basic" data-target="basic"><img src="<?php if($basic['basicthumb']){ ?><?php echo $basic['basicthumb']; ?><?php } else { ?>app/exam/styles/image/paper.png<?php } ?>" style="width:10rem;margin-top:0.5rem"/></a>
				</div>
				<div class="col-xs-8" style="padding:0.2rem;">
					<div class="text-left" style="padding:0.2rem;">
						<a data-markPrepage="no" href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-index-setCurrentBasic&basicid=<?php echo $basic['basicid']; ?>" class="ajax" data-page="basic" data-target="basic">
							<h5><?php echo $basic['basic']; ?></h5>
							<p style="font-size:1rem;"><?php echo $basic['basicdescribe']; ?></p>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php $this->_compileInclude('footer'); ?>
	<?php if(!$this->tpl_var['userhash']){ ?>
    </div>
</div>
</body>
</html>
<?php } ?>