@csrf
<!-- <div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>
</div> -->

<div class="create_zaico_number">
  <label>型番</label>
  <input type="text" name="zaico_number" class="form-control" required value="{{ old('zaico_number') }}">
</div>
<div class="create_zaico_name">
  <label>商品名</label>
  <input type="text" name="zaico_name" class="form-control" required value="{{ old('zaico_name') }}">
</div>
<div class="create_zaico_image">
  <label>画像</label>
  <input type="text" name="zaico_image" class="form-control" required value="{{ old('zaico_image') }}">
</div>
<div class="create_zaico_number">
  <label>在庫数</label>
  <input type="text" name="zaico_count" class="form-control" required value="{{ old('zaico_number') }}">
</div>
<div class="create_zcategory">
  <label>カテゴリー</label>
  <input type="text" name="category" class="form-control" required value="{{ old('zaico_number') }}">
</div>
<div class="create_zaico_number">
  <label>保管場所</label>
  <input type="text" name="zaico_storage" class="form-control" required value="{{ old('zaico_number') }}">
</div>
<div class="create_content">
  <label></label>
  <textarea name="content" required class="form-control" rows="16" placeholder="本文">{{ old('content') }}</textarea>
</div>