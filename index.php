<form action="store.php">
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        <tr>
            <td><input type="text" name="people[0][firstname]" value="Leonard" /></td>
            <td><input type="text" name="people[0][surname]" value="Hofstader" /></td>
        </tr>
        <tr>
            <td><input type="text" name="people[1][firstname]" value="Sheldon" /></td>
            <td><input type="text" name="people[1][surname]" value="Cooper" /></td>
        </tr>
        <tr>
            <td><input type="text" name="people[2][firstname]" value="Raj" /></td>
            <td><input type="text" name="people[2][surname]" value="Koothrapali" /></td>
        </tr>
        <tr>
            <td><input type="text" name="people[3][firstname]" value="Howard" /></td>
            <td><input type="text" name="people[3][surname]" value="Wolowitz" /></td>
        </tr>
        <tr>
            <td><input type="text" name="people[4][firstname]" value="Penny" /></td>
            <td><input type="text" name="people[4][surname]" value="" /></td>
        </tr>
    </table>
    <input type="submit" value="OK" />
</form>
