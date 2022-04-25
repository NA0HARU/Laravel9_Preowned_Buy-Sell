<!DOCTYPE html>
<html>
<body>

<h1>Test page</h1>
<p>My first paragraph.</p>

<form action="/save" method="post">
    @csrf
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <input type="submit" value="Save">
</form>

</body>
</html>
