<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
</head>
<body>
<h1>Chat</h1>
<?php
if (empty($this->messages)) {
    echo "There is no messages in chat...";
} else {
    foreach ($this->messages as $message) {
        echo htmlspecialchars($message) . "<br>";
    }
}
?>
<h2>New message</h2>
<form action="?action=send" method="post">
    Enter username: <input id="nick" type="text" name="nickname">
    <br>
    Enter your message: <input type="text" name="message">
    <br>
    <input type="submit" value="Send">
</form>
</body>
</html>