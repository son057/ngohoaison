<?php
$cats=$data['cats'];
$brands=$data['brands'];
$oldproduct=$data['oldproduct'];
?>

<div class="col-md-9">
<h2>UPDATE CATEGORY</h2>
<div class="row btn-success">
<?php if(isset($_SESSION['msg'])){echo $_SESSION['msg']; unset($_SESSION['msg']);} ?>
</div>
<div class=row>
<form method=post action='' enctype='multipart/form-data'>
<table>
<tr>
<td class="col-md-3"><label>Cat Name</label></td>
<td><input type='text' name=inputCategoryName required value='<?php echo $oldproduct['catName']?>'></td>
</tr>

<tr>
<td class="col-md-3"><label>Alias</label></td>
<td><input type='text' name=inputAlias value='<?php echo $oldproduct['alias']?>'></td>
</tr>


<tr>
<td class="col-md-3"><label>Status</label></td>
<td>
<select name=inputStatus>
<option value=0 <?php if($oldproduct['status']==0) echo "selected"?>>Ẩn</option>
<option value=1 <?php if($oldproduct['status']==1) echo "selected"?>>Hiện</option>
</select>
</td>
</tr>



<tr>
<td class="col-md-3"><label>Trash</label></td>
<td>
<select name=inputTrash>
<option value=0 <?php if($oldproduct['trash']==0) echo "selected"?>>Không</option>
<option value=1 <?php if($oldproduct['trash']==1) echo "selected"?>>Trash</option>
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