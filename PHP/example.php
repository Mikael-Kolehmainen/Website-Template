<form name='date' action='example.php' method='POST' autocomplete='off'>
    <input name='date' type='date'>
    <input type='submit'>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["date"])) {
        require 'connection.php';
        $sql = "UPDATE dates SET bookingD = '$_REQUEST["date"]' WHERE id = ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_assoc($result);
                //echo $_REQUEST['date'];
                echo "
                <br>
                <br>
                    <select id='time' name='time'>
                        <option value='1000'>10:00</option>
                        <option value='1000'>11:00</option>
                        <option value='1000'>12:00</option>
                        <option value='1300'>13:00</option>
                        <option value='1000'>14:00</option>
                        <option value='1000'>15:00</option>
                        <option value='1600'>16:00</option>
                        <option value='1900'>17:00</option>
                    </select>
                ";
            }
        }
    }
?>
