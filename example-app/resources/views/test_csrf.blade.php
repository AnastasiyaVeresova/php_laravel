<html>

<body>
    <form name="test_csrf" method="post" action="{{'post_security_form'}}">
        @csrf
        <input type="test" name="test_name">
        <input type="submit" value="send">
    </form>
</body>

</html>
