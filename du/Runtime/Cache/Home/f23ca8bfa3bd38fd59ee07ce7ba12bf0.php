<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>输出数据</title>
 	<script src="/thinkPHP/Public/js/jquery-3.2.1.min.js"></script>
 </head>
 <body>
 	<table>
 		<th>ID</th>
 		<th>USER</th>
 		<th>AJAX_del</th>
 		<th>DEL</th>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr>
 			<td><?php echo ($user[id]); ?></td>
 			<td><?php echo ($user[name]); ?></td>
 			<td><span onclick="del(this,<?php echo ($user[id]); ?>)">删除</span></td>
 			<td><a href="<?php echo U('del',array('id'=>$user[id]));?>">删除</a></td>
 		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
 	</table>

 	<!-- 添加 -->

 </body>
 <script>
 	function del(obj,id){
 		
 		$.post("<?php echo U('ajax_del');?>",{id:id},function(data){
 			alert(data);
 			alert(data.indo);
 			alert(data.code);
 		},'json');
 	}
 </script>
 </html>