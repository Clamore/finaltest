<html>
<head>
	<meta charset="utf8">
	<title>ประกาศข่าว</title>
</head>
<body>

	<table>
		<tbody>
			<tr>
				<tr>
				<td><label for="name">ชื่อข่าว :</label></td>
				<td>{{ $new->name }}</td>
			</tr>
			<tr>
				<td><label for="detail">รายละเอียด :</label></td>
				<td>{{ $new->detail }}</td>
			</tr>
			<tr>
				<td><label for="type">ประเภทข่าว :</label></td>
				@if ($new->type == 1)
				<td>ข่าวประชาสัมพันธ์</td>
				@elseif ($new->type == 2)
				<td>ข่าวกิจจกรรม</td>
				@elseif ($new->type == 3)
				<td>ข่าวการศึกษา</td>
				@endif
			</tr>
			<tr>
				<td><label for="dates">วันที่ประกาศ :</label></td>
				<td>{{ $new->dates }}</td>
			</tr>
			<tr>
				<td><label for="user">ผู้ประกาศ :</label></td>
				<td>{{ $new->user }}</td>
			</tr>
		</tbody>
	</table>

</body>
</html>