		<header class="container-fluid" style="background-color:#2DAB49;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				用户注册
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
    	<div style="width:90%;margin:auto;margin-bottom:1rem;">
	    	<h2 class="text-center">
				<img src="app/core/styles/img/logo2.png" style="width:6rem;">
			</h2>
			<h4 class="text-center" style="padding:1rem;">用户注册</h4>
			<form class="col-xs-12" method="post" action="index.php?user-phone-register">
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-user"></a></span>
					<input type="hidden" value="1" name="userregister"/>
					<input class="form-control" name="args[username]" datatype="userName" needle="needle" msg="请你输入用户名" placeholder="请输入用户名">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-user"></a></span>
					<input type="hidden" value="1" name="userregister"/>
					<input class="form-control" name="args[useremail]" datatype="email" needle="needle" msg="请你输入邮箱" placeholder="请输入邮箱">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-lock"></a></span>
					<input class="form-control"  name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" placeholder="请输入密码" type="password">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-lock"></a></span>
					<input class="form-control"  name="repeatpassword" datatype="password" needle="needle" msg="请再次输入密码" placeholder="请再次输入密码" type="password">
				</div>
				<button type="submit" class="btn btn-primary btn-block" style="line-height:3rem;">注册</button>
				<a class="btn btn-default btn-block ajax" href="index.php?user-phone-login" data-target="user" data-page="user" style="line-height:3rem;">登录</a>
			</form>
		</div>