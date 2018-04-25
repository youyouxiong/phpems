<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2" style="margin-top:10px;">
				<ul class="list-group">
					<?php $cid = 0;
 foreach($this->tpl_var['catbrother'] as $key => $cat){ 
 $cid++; ?>
					<li class="list-group-item<?php if($this->tpl_var['cat']['catid'] == $cat['catid']){ ?> active<?php } ?>">
						<?php if($this->tpl_var['cat']['catid'] == $cat['catid']){ ?>
						<?php echo $cat['catname']; ?>
						<?php } else { ?>
						<a href="index.php?content-app-category&catid=<?php echo $cat['catid']; ?>"><?php echo $cat['catname']; ?></a>
						<?php } ?>
					</li>
					<?php } ?>
					<?php if($this->tpl_var['cat']['catparent']){ ?>
					<li class="list-group-item">
						<a href="index.php?content-app-category&catid=<?php echo $this->tpl_var['cat']['catparent']; ?>">返回</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-xs-10">
				<div class="box itembox" style="margin-bottom:0px;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">首页</a></li>
							<li><a href="index.php?content">新闻</a></li>
						  	<?php $cbid = 0;
 foreach($this->tpl_var['catbread'] as $key => $cb){ 
 $cbid++; ?>
							<li><a href="index.php?content-app-category&catid=<?php echo $cb['catid']; ?>"><?php echo $cb['catname']; ?></a> <span class="divider">/</span></li>
							<?php } ?>
							<li class="active"><?php echo $this->tpl_var['cat']['catname']; ?></li>
						</ol>
					</div>
				</div>
				<?php $cid = 0;
 foreach($this->tpl_var['contents']['data'] as $key => $content){ 
 $cid++; ?>
				<div class="box itembox" style="padding-top:20px;">
					<div class="col-xs-3">
						<a href="index.php?content-app-content&contentid=<?php echo $content['contentid']; ?>" class="thumbnail pull-left">
							<img src="<?php echo $content['contentthumb']; ?>" alt="" width="100%">
						</a>
					</div>
					<div class="col-xs-9">
						<a href="index.php?content-app-content&contentid=<?php echo $content['contentid']; ?>"><h4 class="title"><?php echo $content['contenttitle']; ?></h4></a>
						<p><?php echo $content['contentdescribe']; ?></p>
						<hr/>
						<p>
							<span class="pull-right">
								<a href=""><span class="glyphicon glyphicon-time"></span> <span><?php echo date('Y-m-d H:i:s',$content['contentinputtime']); ?></span></a>&nbsp;&nbsp;
								<a href=""><span class="glyphicon glyphicon-heart"></span> <span>1026</span></a>
							</span>
						</p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>