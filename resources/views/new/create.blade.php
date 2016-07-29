<html>
<head>
	<meta charset="utf8">
	<title>ประกาศข่าว</title>
</head>
<body>
	<h1>ประกาศข่าวใหม่</h1>
	{!! Form::open(['url' => 'new']) !!}
	<table>
		<tbody>
			<tr>
				<td><label for="name">ชื่อข่าว :</label></td>
				<td><input type="text" name="name"></textarea></td>
			</tr>
			<tr>
				<td><label for="detail">รายละเอียด :</label></td>
				<td><textarea name="detail" row="4" col="30"></textarea></td>
			</tr>
			<tr>
				<td><label for="type">ประเภทข่าว :</label></td>
				<td>
					<select name="type">
						<option value="0">กรุณาเลือก</option>
						<option value="1">ข่าวประชาสัมพันธ์</option>
						<option value="2">ข่าวกิจกรรม</option>
						<option value="3">ข่าวการศึกษา</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="dates">วันที่ประกาศ :</label></td>
				<td><input type="text" name="dates"></td>
			</tr>
			<tr>
				<td><label for="user">ผู้ประกาศ :</label></td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="บันทึก"></td>
			</tr>
		</tbody>
	</table>
	{!! Form::close() !!}

</body>
</html>