        @extends('admin.layouts.header')
        @section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
            <form action="/Article/checkAll" method="post" >
                <h1 class="page-header">拥护充值记录</h1>
                <ol class="breadcrumb">
                    <li><a href="add-article.html">增加文章</a></li>
                </ol>
                <h1 class="page-header">管理 <span class="badge">7</span></h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">选择</span></th>
                            <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">用户名称</span></th>
                            <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">项目名称</span></th>
                            <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">贷款率</span></th>
                            <th><span class="glyphicon glyphicon-list"></span> <span class="visible-lg">贷款总金额</span></th>
                            <th class="hidden-sm"><span class="glyphicon glyphicon-tag"></span> <span class="visible-lg">贷款时间</span></th>
                            <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">状态</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($list_all as $k=>$v){?>
                            <tr>
                                <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
                                <td class="article-title"><?php echo $v['user_tel']?></td>
                                <td class="article-title"><?php echo $v['info_name']?></td>
                                <td class="article-title"><?php echo $v['loan_rate']?></td>
                                <td><?php echo $v['loan_money']?></td>
                                <td><?php echo date('Y-m-d H:i:s',$v['loan_time'])?></td>
                                <td><a href="javascrit:void(0)">
                                 <?php
                                    if($v['loan_sta']==1)
                                    {
                                       echo '贷款成功,还款中...';
                                    }
                                    else
                                        {
                                            echo '贷款中...';
                                        }

                                    ?>

                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <footer class="message_footer">
                    <nav>
                        <div class="btn-toolbar operation" role="toolbar">
                            <div class="btn-group" role="group"> <a class="btn btn-default" onClick="select()">全选</a> <a class="btn btn-default" onClick="reverse()">反选</a> <a class="btn btn-default" onClick="noselect()">不选</a> </div>
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="删除全部选中" name="checkbox_delete">删除</button>
                            </div>
                        </div>
                        <ul class="pagination pagenav">
                            <li class="disabled"><a aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
                        </ul>
                    </nav>
                </footer>
            </form>
        </div>
        @endsection