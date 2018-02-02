<!DOCTYPE html>
<html>
<head>
	<title>测试hook</title>
</head>
<body>
	<div style="width: 500px;height: 300px;text-align: center;font-size: 150px;background-color: green;color: #FFF;line-height: 300px;">SB</div>
	<script type="text/javascript">
		var socket = new WebSocket('ws://hao.niu:8000/');
		// 打开事件
		socket.onopen = function (e) {
		    console.log("websocket 打开");
		     socket.send('hahahfdsafdsfaf');
		};
		// 消息事件
		socket.binaryType = "";
		socket.onmessage = function (e) {
		    if (typeof e.data === "string"){
		        console.log("处理文本格式数据.") ;
		        console.log(JSON.parse(e.data));
		        if (event.data == 'on') {
		            console.log("处理当数据等于on时.") ;
		        }
		    }
		};
		//error 事件
		socket.onerror = function(e){
		    console.log("正在处理错误");
		}
		//关闭事件
		socket.onclose = function(e){
		    console.log("连接关闭");
		}
	</script>
</body>
</html>