<!DOCTYPE html>
<html>
<head>
<title>Create a Project</title>
</head>

<body>
<form method="POST" action="/projects">
@csrf
<div><input type="text"placeholder="Project title" name="title"></div>
<div><textarea name="description" placeholder="Describe your project"></textarea></div>
<div><button type="submit">Create Project</button></div>
</form>
</body>
</html>

