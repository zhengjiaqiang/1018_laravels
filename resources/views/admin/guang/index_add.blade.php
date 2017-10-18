@extends('admin.layouts.header')
@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
            <div class="row">
                <form action="add_do" method="post" class="add-article-form">
                    <div class="col-md-9">
                        <h1 class="page-header">广告添加</h1>
                        <div class="form-group">
                            <label for="article-title" class="sr-only">标题</label>
                            <input type="text" id="article-title" name="title" class="form-control" placeholder="在此处输入标题" required autofocus autocomplete="off">
                        </div>

                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>路径</span></h2>
                            <div class="add-article-box-content">
                                <input type="text" class="form-control" placeholder="" name="url" autocomplete="off">
                                <span class="prompt-text">多个标签请用英文逗号,隔开。</span>
                            </div>
                        </div>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>地区</span></h2>
                            <div class="add-article-box-content">
                                <textarea class="form-control" name="city" autocomplete="off"></textarea>
                                <span class="prompt-text">描述是可选的手工创建的内容总结，并可以在网页描述中使用</span>
                            </div>
                        </div>

                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>是否开启</span></h2>
                            <div class="add-article-box-content">
                                <input type="radio" name="is_show" value="1">开启
                                <input type="radio" name="is_show" value="0">关闭
                            </div>
                        </div>

                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>时间</span></h2>
                            <div class="add-article-box-content">
                                开始时间<input type="date" name="start">结束时间<input type="date" name="end">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <h1 class="page-header">操作</h1>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>发布</span></h2>

                            <div class="add-article-box-footer">
                                <button class="btn btn-primary" type="submit" name="submit">发布</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       @endsection