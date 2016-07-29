<html>
<head>
	<meta charset="utf8">
	<title>ประกาศข่าว</title>
</head>
<body>
	<h1>ข่าวประกาศ</h1>
	<br>
	<table>
		<thead>
			<tr>
				<td><a href="/new/create">ประกาศข่าวใหม่</a></td>
			</tr>
			<tr>
				<td>
					<label>เลือกประเภท : </label>
					<a href="{{ url('new')}}">ทั้งหมด</a>
					<a href="{{ url('new/1/type') }}">ข่าวประชาสัมพันธ์</a>
					<a href="{{ url('new/2/type') }}">ข่าวกิจกรรม</a>
					<a href="{{ url('new/3/type') }}">ข่าวการศึกษา</a>
				</td>
			</tr>
			<tr>
				<th>ชื่อข่าว</th>
				<th>ประเภทข่าว</th>
				<th>ผู้ประกาศ</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($news as $new)
			<tr>
				<td><a href="/new/{{ $new->id }}/show/">{{ $new->name }}</a></td>
				@if ($new->type == 1)
				<td>ข่าวประชาสัมพันธ์</td>
				@elseif ($new->type == 2)
				<td>ข่าวกิจจกรรม</td>
				@elseif ($new->type == 3)
				<td>ข่าวการศึกษา</td>
				@endif
				<td>{{ $new->user }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>	

</body>
</html>