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
							<?php if($this->tpl_var['catid']){ ?>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-contents">课件管理</a></li>
							<li class="active"><?php echo $this->tpl_var['categories'][$this->tpl_var['catid']]['catname']; ?></li>
							<?php } else { ?>
							<li class="active">课件管理</li>
							<?php } ?>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						课件管理
						<a class="btn btn-primary pull-right" href="index.php?course-master-contents-add&courseid=<?php echo $this->tpl_var['course']['csid']; ?>&page=<?php echo $this->tpl_var['page']; ?>">添加课件</a>
					</h4>
					<h4><?php if($this->tpl_var['course']){ ?><?php echo $this->tpl_var['course']['cstitle']; ?><?php } else { ?>所有课件<?php } ?></h4>
					<form action="index.php?course-master-contents" method="post" class="form-inline">
						<table class="table">
					        <tr>
								<td>
									课件ID：
								</td>
								<td>
									<input name="search[courseid]" class="form-control" size="15" type="text" class="number" value="<?php echo $this->tpl_var['search']['courseid']; ?>"/>
								</td>
								<td>
									录入时间：
								</td>
								<td>
									<input class="form-control datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" type="text" name="search[stime]" size="10" id="stime" value="<?php echo $this->tpl_var['search']['stime']; ?>"/> - <input class="form-control datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" size="10" type="text" name="search[etime]" id="etime" value="<?php echo $this->tpl_var['search']['etime']; ?>"/>
								</td>
								<td>
									关键字：
								</td>
								<td>
									<input class="form-control" name="search[keyword]" size="15" type="text" value="<?php echo $this->tpl_var['search']['keyword']; ?>"/>
								</td>
							</tr>
					        <tr>
								<td>
									录入人：
								</td>
					        	<td>
					        		<input class="form-control" name="search[username]" size="15" type="text" value="<?php echo $this->tpl_var['search']['username']; ?>"/>
					        	</td>
					        	<td>
									课件模型：
								</td>
								<td>
									<select name="search[coursemoduleid]" class="form-control">
								  		<option value="0">不限</option>
								  		<?php $mid = 0;
 foreach($this->tpl_var['modules'] as $key => $module){ 
 $mid++; ?>
								  		<option value="<?php echo $module['moduleid']; ?>"<?php if($this->tpl_var['search']['coursemoduleid'] == $module['moduleid']){ ?> selected<?php } ?>><?php echo $module['modulename']; ?></option>
								  		<?php } ?>
							  		</select>
								</td>
								<td>
									<input type="hidden" name="courseid" value="<?php echo $this->tpl_var['course']['csid']; ?>"/>
									<button class="btn btn-primary" type="submit">提交</button>
								</td>
								<td></td>
					        </tr>
						</table>
						<div class="input">
							<input type="hidden" value="1" name="search[argsmodel]" />
						</div>
					</form>
					<form action="index.php?course-master-contents-lite" method="post">
						<fieldset>
							<table class="table table-hover table-bordered">
								<thead>
									<tr class="info">
					                    <th width="40"><input type="checkbox" class="checkall" target="delids"/></th>
					                    <th width="80">权重</th>
					                    <th width="40">ID</th>
					                    <th width="80">缩略图</th>
								        <th>标题</th>
								        <th width="100">课件模型</th>
								        <th width="100">发布时间</th>
								        <th width="100">操作</th>
					                </tr>
					            </thead>
					            <tbody>
					            	<?php $cid = 0;
 foreach($this->tpl_var['contents']['data'] as $key => $content){ 
 $cid++; ?>
					            	<tr>
					                    <td><input type="checkbox" name="delids[<?php echo $content['courseid']; ?>]" value="1"></td>
					                    <td><input class="form-control" type="text" name="ids[<?php echo $content['courseid']; ?>]" value="<?php echo $content['coursesequence']; ?>" style="width:36px;padding:2px 5px;"/></td>
					                    <td><?php echo $content['courseid']; ?></td>
					                    <td class="picture"><img src="<?php if($content['coursethumb']){ ?><?php echo $content['coursethumb']; ?><?php } else { ?>app/core/styles/images/noupload.gif<?php } ?>" alt="" style="width:48px;"/></td>
					                    <td>
					                        <?php echo $content['coursetitle']; ?>
					                    </td>
					                    <td>
					                        <?php echo $this->tpl_var['modules'][$content['coursemoduleid']]['modulename']; ?>
					                    </td>
					                    <td>
					                    	<?php echo date('Y-m-d',$content['courseinputtime']); ?>
					                    </td>
					                    <td class="actions">
					                    	<div class="btn-group">
					                    		<a class="btn" href="index.php?course-master-contents-edit&courseid=<?php echo $content['coursecsid']; ?>&contentid=<?php echo $content['courseid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>" title="修改"><em class="glyphicon glyphicon-edit"></em></a>
												<a class="btn confirm" href="index.php?course-master-contents-del&courseid=<?php echo $content['coursecsid']; ?>&contentid=<?php echo $content['courseid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>" title="删除"><em class="glyphicon glyphicon-remove"></em></a>
					                    	</div>
					                    </td>
					                </tr>
					                <?php } ?>
					        	</tbody>
					        </table>
					        <div class="form-group">
					            <div class="col-sm-9">
						            <label class="radio-inline">
						                <input type="radio" name="action" value="modify" checked/>排序
						            </label>
						            <label class="radio-inline">
						                <input type="radio" name="action" value="delete" />删除
						            </label>
						            <?php $sid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $sid++; ?>
						            <input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
						            <?php } ?>
						            <label class="radio-inline">
						            	<button class="btn btn-primary" type="submit">提交</button>
						            </label>
						            <input type="hidden" name="modifycontentsequence" value="1"/>
						            <input type="hidden" name="courseid" value="<?php echo $this->tpl_var['course']['csid']; ?>"/>
						            <input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
						        </div>
					        </div>
							<ul class="pagination pull-right">
								<?php echo $this->tpl_var['contents']['pages']; ?>
							</ul>
						</fieldset>
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