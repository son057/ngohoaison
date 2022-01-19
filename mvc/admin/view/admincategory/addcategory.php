<?php
$cats=$data['cats'];
$brands=$data['brands'];
?>


<div class="col-md-9">
<h2>ADD CATEGORY</h2>
<div class="row btn-success">
<?php if(isset($_SESSION['msg'])){echo $_SESSION['msg']; unset($_SESSION['msg']);} ?>
</div>
<div class=row>
<form method=post action='' enctype='multipart/form-data'>
<table>
<tr>
<td class="col-md-3"><label>Cat Name</label></td>
<td><input type='text' name=inputCategoryName required></td>
</tr>

<tr>
<td class="col-md-3"><label>Alias</label></td>
<td><input type='text' name=inputAlias></td>
</tr>


<tr>
<td class="col-md-3"><label>Status</label></td>
<td>
<select name=inputStatus>
<option value=0>Ẩn</option>
<option value=1>Hiện</option>
</select>
</td>
</tr>


<tr>
<td><input type=submit name=submit value=Submit>
<input type=reset name=reset value=Reset>
</td>
</tr>

</table>
</form>
</div>
</div>