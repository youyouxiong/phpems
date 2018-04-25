<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="box itembox" style="margin-bottom:0px;">
				<div class="col-xs-12">
					<ol class="breadcrumb">
					  <li><a href="index.php">首页</a></li>
					  <li><a href="index.php?exam-app">考试</a></li>
					  <li><a href="index.php?exam-app-basics"><?php echo $this->tpl_var['data']['currentbasic']['basic']; ?></a></li>
					  <li><a href="index.php?exam-app-lesson">课后练习</a></li>
					  <li class="active"><?php echo $this->tpl_var['knows']['knows']; ?>（<?php echo $this->tpl_var['questype']['questype']; ?>）</li>
					</ol>
				</div>
			</div>
			<div class="box itembox" id="questionpanel" style="padding-top:20px;">
			</div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
<script type="text/javascript">
$(document).ready(function(){
	submitAjax({"url":"index.php?exam-app-lesson-ajax-questions","target":"questionpanel"});
});
</script>
</body>
</html>