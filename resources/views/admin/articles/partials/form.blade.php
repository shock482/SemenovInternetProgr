<label for="">Статус</label>
<select class="form-control" name="published">
  @if (isset($article->id))
    <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
  @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  @endif
</select>

<label for="">Заголовок</label>
<input id='id1' type="text" class="form-control mainPostHeader" name="title" placeholder="Заголовок новости" value="{{$article->title or ""}}" required>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$article->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control mainPostCategory" name="categories[]" multiple="">
  @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short or ""}}</textarea>

<label for="">Полное описание</label>
{{--<textarea id='id3' class="form-control mainPostContent" id="description" name="description">{{$article->description or ""}}</textarea>--}}
<input id='id3' type="text" class="form-control mainPostHeader" name="title" placeholder="Заголовок новости" value="{{$article->description or ""}}" required>

<hr />

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title or ""}}">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description or ""}}">

<label for="">Ключевые слова</label>
<input id='id4' type="text" class="form-control mainPostKeyWords" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$article->meta_keyword or ""}}">

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
<input class="btn btn-primary do_preshow" type="button" value="Предпоказ" onclick="doPreshowPage();">


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
{{--<script type="text/javascript">--}}
    {{--$(document).ready(function() {--}}
        {{--$('#id1').bind('keyup', function(event){repeat();});--}}
        {{--$('#id2').bind('keyup', function(event){repeat();});--}}
        {{--$('#id3').bind('keyup', function(event){repeat();});--}}
        {{--$('#id4').bind('keyup', function(event){repeat();});--}}
    {{--});--}}
    {{--function repeat()--}}
    {{--{--}}
        {{--$("#id1-1").val($("#id1").val())--}}
        {{--$("#id2-2").val($("#id2").val())--}}
        {{--$("#id3-3").val($("#id3").val())--}}
        {{--$("#id4-4").val($("#id4").val())--}}
    {{--}--}}
{{--</script>--}}

{{--<form action="" method="post">--}}
    {{--<br>--}}
    {{--<input id='id1-1' value=""><br>--}}
    {{--<input id='id2-2' value=""><br>--}}
    {{--<input id='id3-3' value=""><br>--}}
    {{--<input id='id4-4' value=""><br>--}}
{{--</form>--}}


<script type="text/javascript">
    $(document).ready(function() {
        $('#id1').on('input', function() {
            var a = $(this).val();
            // var h4 = document.getElementById('id1-1');
            // h4.innerHTML = a;
            $('#id1-1').html(a);
        });

        $('#id2').on('input', function() {
            var b = $(this).val();
            // var h5 = document.getElementById('id2-2');
            // h5.innerHTML = b;
            $('#id2-2').html(b);
        });

        $('#id3').on('input', function() {
            var c = $(this).val();
            // var h6 = document.getElementById('id3-3');
            // h6.innerHTML = c;
            $('#id3-3').html(c);
        });

        $('#id4').on('input', function() {
            var d = $(this).val();
            console.log(d);
            // var h7 = document.getElementById('id4-4');
            // h7.innerHTML = d;

            $('#id4-4').html(d);
        });
    });
</script>

<div class="preshow_page">
    <div id="content">
        <article>
            <header class="header_preshow">
                <h2 id='id1-1' value="" class="h2_preshow"></h2>
                <p id='id2-2' class="p_preshow"></p>
            </header>
            <p id='id3-3' class="p2_preshow"></p>
            <div>
            </div>
            <p id='id4-4' class="p3_preshow"></p>
        </article>
    </div>
</div>

{{--<script>--}}
    {{--function doPreshowPage() {--}}
        {{--$(document.querySelector('.preshow_page')).css({  'display': 'inherit', 'visibility': 'visible'});--}}
        {{--document.querySelector('.h2_preshow').innerHTML = document.querySelector('.mainPostHeader').value;--}}
        {{--document.querySelector('.p_preshow').innerHTML = 'Категория № ' + document.querySelector('.mainPostCategory').value;--}}
        {{--document.querySelector('.p2_preshow').innerHTML = document.querySelector('.mainPostContent').value;--}}
        {{--document.querySelector('.p3_preshow').innerHTML = document.querySelector('.mainPostKeyWords').value;--}}
    {{--}--}}
{{--</script>--}}




{{--<body>--}}
{{--<form action="" method="post">--}}
    {{--<input id='id1' value=""><br>--}}
    {{--<input id='id2' value=""><br>--}}
    {{--<input id='id3' value=""><br>--}}
    {{--<input id='id4' value=""><br>--}}
{{--</form>--}}
{{--</body>--}}