<!DOCTYPE html>
<html>

<body>

    <h1>The Window Object</h1>
    <h2>The open() and close() Methods</h2>

    <button onclick="openWin()">Open "myWindow"</button>
    <button onclick="closeWin()">Close "myWindow"</button>

    <script>
    let myWindow;

    function openWin() {
        myWindow = window.open("", "", "width=200,height=100");
    }

    function closeWin() {
        myWindow.close();
    }
    </script>

</body>

</html>