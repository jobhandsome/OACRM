<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"/home/wwwroot/guanjia.jutui.org/public/../application/admin/view/team/integral.html";i:1548129504;s:72:"/home/wwwroot/guanjia.jutui.org/application/admin/view/public/title.html";i:1551945361;}*/ ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>巨推管家</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="/static/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="/static/layuiadmin/style/admin.css" media="all">
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/layuiadmin/layui/layui.js"></script>
<script src="/static/admin/js/admin.js"></script>
<style media="screen">
  .layui-form-checked[lay-skin="primary"] i{
    border-color:#1E9FFF;
    background-color:#1E9FFF;
    color:#fff;
  }
  .layui-form-checkbox[lay-skin="primary"]:hover i {
    border-color:#1E9FFF;
    color:#fff;
  }
  .layui-form-radio > i:hover, .layui-form-radioed > i {
      color: #1E9FFF;
  }
</style>

 <style media="screen">
   .layui-table tbody tr:hover{
     background-color: #fff;
   }
 </style>
</head>
<body class="layui-layout-body">
<div class="layui-fluid" class="layui-form">
  <div class="layui-card">
    <div class="layui-tab layui-tab-brief">
      <crmblok>
          <div style="position: relative;">
            <button class="layui-btn"></button>
            <form class="layui-form" method="post" style="display:inline-block;position: absolute;right: 0;">
              
              <div class="layui-input-inline">
                <input type="text" name="name" class="layui-input" placeholder="请输入查询姓名">
              </div>
              <div class="layui-input-inline">
                <input type="text" name="iacard" class="layui-input" placeholder="请输入查询身份证号">
              </div>
              <div class="layui-input-inline">
                <select name="year">
                  <option value="">选择年份</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                </select>
              </div>
              <div class="layui-input-inline">
                <select name="month">
                  <option value="">选择月份</option>
                  <option value="1">1月</option>
                  <option value="2">2月</option>
                  <option value="3">3月</option>
                  <option value="4">4月</option>
                  <option value="5">5月</option>
                  <option value="6">6月</option>
                  <option value="7">7月</option>
                  <option value="8">8月</option>
                  <option value="9">9月</option>
                  <option value="10">10月</option>
                  <option value="11">11月</option>
                  <option value="12">12月</option>
                </select>
              </div>
              <div class="layui-input-inline">
                <select name="week">
                  <option value="">选择周份</option>
                  <option value="1">第一周</option>
                  <option value="2">第二周</option>
                  <option value="3">第三周</option>
                  <option value="4">第四周</option>
                </select>
              </div>
              <button class="layui-btn layui-btn-normal" type="submit"><i class="layui-icon layui-icon-search"></i>搜索</button>
            </form>
          </div>
        </crmblok>
        <table class="layui-table">
          <thead>
            <tr>
              <th width="25" align="center">
                <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
              </th>
              <th align="center">工号</th>
              <th align="center">姓名</th>
              <th align="center">部门</th>
              <th align="center">本周积分</th>
              <th align="center">本月积分</th>
              <th align="center">本月等级</th>
              <th align="center">员工等级</th>
              <th align="center">累计积分</th>
              <th align="center">状态</th>
              <th align="center">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
            <tr align="center" style="height:500px;"><td colspan="11">暂无员工</td></tr>
          <?php else: foreach($list as $l): ?>
              <tr>
                <td>
                  <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='<?php echo $l['id']; ?>'><i class="layui-icon">&#xe605;</i></div>
                </td>
                <td><?php echo $l['staff_num']; ?></td>
                <td><?php echo $l['user_name']; ?></td>
                <td><?php echo $l['group_id']; ?></td>
                <td><?php echo $l['sectors_id']; ?></td>
                <td>1111</td>
                <td><?php echo $l['staff_tel']; ?></td>
                <td><?php echo $l['staff_wechat']; ?></td>
                <td><?php if($l['staff_status'] == 1): ?>全职<?php else: ?>兼职<?php endif; ?></td>
                <td><?php if($l['user_status'] == 1): ?>开启<?php else: ?>关闭<?php endif; ?></td>
                <td>
                	<button class="layui-btn layui-btn-normal layui-btn-xs" onclick="crm_admin_show('编辑员工信息','<?php echo url('team/edit',['id'=>$l['id']]); ?>')">编辑</button>
                	<button class="layui-btn layui-btn-normal layui-btn-xs" onclick="del('<?php echo $l['id']; ?>')">删除</button>
                  <button class="layui-btn layui-btn-normal layui-btn-xs" onclick="crm_admin_show('查看员工信息','<?php echo url('team/show',['id'=>$l['id']]); ?>')">详情</button>
                  <button class="layui-btn layui-btn-normal layui-btn-xs" onclick="">打分</button>
                  <button class="layui-btn layui-btn-normal layui-btn-xs" onclick="">媒体</button>
                </td>
              </tr>
            <?php endforeach; endif; ?>
          </tbody>
        </table>
    </div>
    </div>
  </div>
  <script>
  	function del(id)
  	{
  		layer.confirm("您确定删除该用户吗？",function(){
  			$.ajax({
  				url:"<?php echo url('team/del'); ?>",
  				data:{id:id},
  				type:'post',
  				success:function(data)
  				{
  					var status = JSON.parse(data);
  					layer.msg(status.msg,{icon:status.icon,time:1000},function(){
  						window.location.reload();
  					});
  				}
  			});
  		});
  	}
    function delAll()
    {
      var datas = tableCheck.getData();
      layer.confirm("确认删除选择的用户吗？",function(){
        $.ajax({
          url:"<?php echo url('team/del'); ?>",
          data:{id:datas},
          type:'post',
          success:function(data){
            var status = JSON.parse(data);
            layer.msg(status.msg,{icon:status.icon,time:1000},function(){
              window.location.reload();
            });
          }
        });
      });
    }
  </script>
</body>
</html>
