<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="post">
@csrf
<label >nhập số thứ 1</label>
<input type="text" name="sothunhat" ><br>
<label >nhập số thứ hai</label>
<input type="text" name="sothuhai" >

<select name="caculator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="%">%</option>
</select>
<input type="submit" value="Ok">

</form>
@if(@isset($tong))
    <div>
    <strong> Kết quả là:{{$tong}}</strong>
    @endif
    </div>
</body>
</html>