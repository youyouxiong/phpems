<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2" style="padding-top:10px;margin-bottom:0px;">
				<?php $this->_compileInclude('menu'); ?>
			</div>
			<div class="col-xs-10" id="datacontent">
<?php } ?>
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a></li>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-contents&page=<?php echo $this->tpl_var['page']; ?>">内容管理</a></li>
							<li class="active">复制内容</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;overflow:visible">
					<h4 class="title" style="padding:10px;">
						复制内容
						<a class="btn btn-primary pull-right" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-contents&catid=<?php echo $this->tpl_var['catid']; ?>&page=<?php echo $this->tpl_var['page']; ?>">内容管理</a>
					</h4>
					<form action="index.php?content-master-contents-lite" method="post" class="form-horizontal">
						<div class="form-group">
				            <label class="control-label col-sm-2">内容ID</label>
				            <div class="col-sm-4">
			        			<input class="form-control" type="text" name="contentids" value="<?php echo $this->tpl_var['contentids']; ?>" needle="needle" msg="您必须输入标题" readonly>
				        	</div>
				        </div>
				        <div class="form-group">
		        			<label class="control-label col-sm-2">目标分类</label>
		        			<div class="col-sm-4">
			        			<select class="form-control" msg="您必须选择一个目标分类" needle="needle" class="autocombox input-medium" name="targetcatid" refUrl="index.php?content-master-category-ajax-getchildcategory&catid={value}">
					            	<option value="">选择一级分类</option>
					            	<?php $cid = 0;
 foreach($this->tpl_var['parentcat'] as $key => $cat){ 
 $cid++; ?>
					            	<option value="<?php echo $cat['catid']; ?>"><?php echo $cat['catname']; ?></option>
					            	<?php } ?>
					            </select>
							</div>
				        </div>
				        <div class="form-group">
				            <label class="control-label col-sm-2"></label>
				            <div class="col-sm-9">
					            <button class="btn btn-primary" type="submit">提交</button>
					            <a class="btn btn-primary" href="index.php?content-master-contents&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>">取消</a>
					            <?php $sid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $sid++; ?>
					            <input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
					            <?php } ?>
					            <input type="hidden" name="copycategory" value="1">
					            <input type="hidden" name="catid" value="<?php echo $this->tpl_var['catid']; ?>">
							</div>
				        </div>
					</form>
				</div>
			</div>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>