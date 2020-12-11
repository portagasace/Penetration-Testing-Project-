<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Aaditya Prakash">
		<title> CSRF Demonstration </title>
		<script src="assets/js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<style type="text/css">
body{margin:40px;}

.process-row {
    display: table-row;
}

.process {
    display: table;     
    width: 100%;
    position: relative;
}

.process-row:before {
    top: 50px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: hsla(14, 100%, 53%, 0.6);
    z-order: 0;
    
}

.process-step {    
    display: table-cell;
    text-align: center;
    position: relative;
}

.process-step p {
    margin-top:10px;
    
}

.btn-circle {
  width: 100px;
  height: 100px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.glyphicon{
    font-size: 5em;
}
</style>
	</head>
	<body>
<div class="container">
    <div class="process">
    <div class="process-row">
        <div class="process-step http-get" data-url="catshop.php">
            <button type="button" class="btn btn-default btn-circle"><span class="glyphicon glyphicon-floppy-open"></span></button>
            <p>HTTP GET</p>
        </div>
        <div class="process-step http-post" data-url="post/catshop.php">
            <button type="button" class="btn btn-default btn-circle"><span class="glyphicon glyphicon-floppy-save"></span></button>
            <p>HTTP POST</p>
        </div>
        <div class="process-step http-post-withtoken" data-url="post_withtoken/catshop.php">
            <button type="button" class="btn btn-default btn-circle" ><span class="glyphicon glyphicon-floppy-saved"></span></button>
            <p>HTTP POST with Anti-CSRF Token</p>
        </div> 
         <div class="process-step exploits" data-url="exploits/">
            <button type="button" class="btn btn-success btn-circle" ><span class="glyphicon glyphicon-fire"></span></button>
            <p>Exploits</p>
        </div> 
    </div>
    </div>
    <div class="container">
        <div class="jumbotron">
        <h3>CSRF  Challenge</h3>
        <p>Its purpose is to learn and test CSRF attacks legally and in real-world understandable actions in a variety of scenarios.</p>
        <h3>Cross-Site Request Forgery (CSRF) </h3>
        <p>CSRF It is an attack on web users, where attackers write scripts to lure and force the web user to do things inadvertently. Or not realizing It will cause such actions to be used by the right of the user of that website. For example, if Website A is running with user B rights when attacked by CSRF vulnerability, the command will be executed with user B privilege.On Web A, an example of the impact when the attack succeeds is Password or email change Of website users, making users send messages to other people (spam), adding new users or using web capabilities with administrator rights</p>
        <p>Sources: <a href="https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)">OWASP.org</a></p>
        <hr/>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
    $('.process-step').click(function(e) {
        e.preventDefault();
        window.location = $(this).data('url');
    });
});
</script>
	</body>
</html>