        @extends('admin.layouts.header')
        @section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
        <h1 class="page-header">抵押物管理</h1>
        <ol class="breadcrumb">
        <li><a data-toggle="modal" data-target="#addUser">增加用户</a></li>
        </ol>
        <h1 class="page-header">管理 <span class="badge">2</span></h1>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
        <thead>
        <tr>
        <th><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">抵押物ID</span></th>
        <th><span class="glyphicon glyphicon-user"></span> <span class="visible-lg">抵押物名称</span></th>
        <th><span class="glyphicon glyphicon-bookmark"></span> <span class="visible-lg">抵押物图片</span></th>
        <th><span class="glyphicon glyphicon-pushpin"></span> <span class="visible-lg">估价</span></th>
        <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">审核状态</span></th>
        <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">贷款人手机号</span></th>
        <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">申请时间</span></th>
        <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">审核通过时间</span></th>
        </tr>
        </thead>
        <tbody>
        @foreach($info_list as $v)
        <tr>
        <td>{{$v->info_id}}</td>
        <td>{{$v->info_name}}</td>
        <td><img src="{{asset($v->info_img)}}" alt="" style="width: 150px; height: 200px;"></td>
        <td id="{{$v->info_id}}"><span class="rightNow">{{$v->info_judge}}￥</span></td>
        <td>
        <select name="" info_id="{{$v->info_id}}" class="is_check">
        {{--<option value="">全部</option>--}}
        <?php
        if ($v->info_status==0)
        {
        echo "
        <option value='0' selected='selected'>未审核</option>
        <option value='1' >审核通过</option>
        <option value='2' >审核中</option>
            ";
        }
        elseif ($v->info_status==2)
        {
        echo "
        <option value='0' >未审核</option>
        <option value='1' >审核通过</option>
        <option value='2' selected='selected'>审核中</option>
            ";
        }
        else
        {
        echo "
        <option value='0'>未审核</option>
        <option value='1' selected='selected'>审核通过</option>
        <option value='2' >审核中</option>
        ";
        }
        ?>
        </select>
        </td>
        <td>{{$v->user_tel}}</td>
        <td>{{date('Y-m-d H:i:s'),$v->info_start_time}}</td>
        <td>{{date("Y-m-d H:i:s",strtotime("+1 week"))}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
        </div>
        @endsection
        <script src="{{asset('jquery-1.7.2.min.js')}}"></script>
        <script>
          $(function () {
            /*状态值修改其中0:代表未通过审核 1:已通过审核 2 审核中*/
            $('.is_check').change(function () {
            var obj=$(this);
            var info_id=obj.attr('info_id');//id
            var status=obj.val();           //获取要修改的状态值
            //alert(info_id+','+status);
            var url="{{url('admin/zhiya/status')}}";
            $.ajax({
            type:'get',
            url : url,
            data:{info_id:info_id,status:status},
            dataType:'json',
          success:function (msg) {
              window.location.href=window.location.href;
           }
            })
            });

             {{--即点即该--}}
             var num=''; //定义一个全局变量用来存储修改前的值
            $(document).on('click','.rightNow',function () {
                var _this=$(this);
                var old_val=$('.rightNow').html();//获取要修改的值
                _this.parent().html('<input type="text" class="update" value="'+old_val+'">');//将该值替换为文本输入框
                num=old_val;
            });
            //失去焦点委托事件
            $(document).on('blur','.update',function () {
               var _this=$(this);
               var id=_this.parent().attr('id');//获取要修改的id值
               var new_num=_this.val();         //获取修改后的值
                if(new_num=='')
                {
                    _this.parent().html('<span>'+num+'</span>');
                    alert('要修改的值不能为空');
                    return;
                }
               var url="{{url('admin/zhiya/update')}}";
               $.get(url,{id:id,new_num:new_num},function (data) {
                   if(data==1)
                   {
                       _this.parent().html('<span>'+new_num+'</span>')
                   }
                 else
                   {
                       _this.parent().html('<span>'+num+'</span>')
                   }
               })
            })
          })
        </script>

