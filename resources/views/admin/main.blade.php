@extends('admin.home')

@section('head')
    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    {{-- <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script> --}}

@endsection

@section('content')
    <div class="col-md-4">
        <form action="" method="POST">

            <div class="card-body">
                <div class="form-group">
                    <label for="menu">Tên Danh mục</label>
                    <input name="menu" type="text" class="form-control" id="menu" placeholder="Nhập tên Danh mục">
                </div>

                <div class="form-group">
                    <label for="menu">Danh mục</label>
                    <select name="parent_id" class="form-control">
                        <option value="0">Danh mục Cha</option>
                        <option value="1">iphone</option>
                        <option value="2">Android</option>
                        <option value="3">Windows Phone</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control" rows="2" cols="50"></textarea>
                </div>

                <div class="form-group">
                    <label>Nội dung chi tiết</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="">Kích hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" name="active" type="radio" id="active" value="1" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>

                <div class="custom-control custom-radio">
                    <input class="custom-control-input" name="active" type="radio" id="notactive" value="0">
                    <label for="notactive" class="custom-control-label">Không</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
